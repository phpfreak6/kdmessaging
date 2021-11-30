<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Campaign;
use App\Brand;
use App\Lists;
use App\Delivery;
use App\Delivery_click;
use App\Models\CronRequest;
use App\Models\Messaging;
use Twilio\Exceptions\TwilioException;
use Twilio\Exceptions\RestException;

class CampaignController extends Controller {

    protected $MessageModel;

    public function __construct() {
        $this->MessageModel = new Messaging();
    }

    public function index(Request $request) {
        $dataArr['title'] = 'Manage Campaigns';
        return view('frontend/campaigns/index', $dataArr);
    }

    public function getCampaignsDatatable(Request $request) {
        return datatables()->of(
                                DB::table('campaigns')
                                ->select('campaigns.*')
                                ->where('campaigns.brand_id', '=', Auth::user()->brand_id)
                                ->get())
                        ->addIndexColumn()
                        ->addColumn('prefix_brand_code_representation', function ($query) {
                            if ($query->prefix_brand_code == 1) {
                                return '<span class="label label-sm label-success arrowed arrowed-right">Yes</span>';
                            }
                            return '<span class="label label-sm label-danger arrowed arrowed-right">No</span>';
                        })
                        ->addColumn('channel_representation', function ($query) {
                            if ($query->campaign_channel == 'WHATSAPP') {
                                return '<span style="background-color: #25D366 !important;" class="label label-sm arrowed arrowed-right">Whatsapp</span>';
                            }
                            return '<span style="background-color: #FF9900 !important;" class="label label-sm arrowed arrowed-right">SMS</span>';
                        })
                        ->rawColumns(['prefix_brand_code_representation', 'channel_representation'])
                        ->make(true);
    }

    public function campaign(Request $request, $campaign_hash = NULL) {

        if ($request->isMethod('post')) {
            $postArr = $request->except('_token');
            $postArr['brand_id'] = Auth::user()->brand_id;
            if (!empty($request->campaign_hash)) {
                Campaign::where('campaign_hash', '=', $postArr['campaign_hash'])->update($postArr);
                return redirect('/campaigns/test_campaign/' . $postArr['campaign_hash'])->with('success', 'Campaign Updated Successfully');
            } else {
                $campaign_id = Campaign::insertGetId($postArr);
                $campaignObj = Campaign::find($campaign_id);
                $campaignObj->campaign_hash = encodeId($campaign_id);
                $campaignObj->save();
                return redirect('/campaigns/test_campaign/' . $campaignObj->campaign_hash)->with('success', 'Campaign Created Successfully');
            }
        }
        $dataArr['title'] = 'Add/Edit Campaign';
        $dataArr['brand_code_name'] = Brand::find(Auth::user()->brand_id)->brand_code_name;
        $dataArr['brandArr'] = Brand::find(Auth::user()->brand_id)->toArray();
        $dataArr['campaignArr'] = Campaign::find(!empty($campaign_hash) ? decodeId($campaign_hash) : NULL);
        return view('frontend/campaigns/campaign', $dataArr);
    }

    public function deleteCampaign(Request $request) {
        if (!empty($request->campaign_hash)) {
            try {
                Campaign::where('campaign_hash', '=', $request->campaign_hash)->delete();
                Delivery::where('campaign_id', '=', decodeId($request->campaign_hash))->delete();
                Delivery_click::where('campaign_id', '=', decodeId($request->campaign_hash))->delete();
                echo '1';
                die;
            } catch (Exception $e) {
                echo $e->getMessage();
                die;
            }
        } else {
            echo 'Campaign Identifier is required';
            die;
        }
    }

    public function checkCampaignNameExists(Request $request) {
        $campaign_name = $request->campaign_name;
        $campaign_hash = $request->campaign_hash;
        if (!empty($request->campaign_hash)) {
            $count = Campaign::where([['campaign_name', '=', $campaign_name], ['brand_id', '=', Auth::user()->brand_id]])->whereNotIn('campaign_hash', [$campaign_hash])->count();
        } else {
            $count = Campaign::where([['campaign_name', '=', $campaign_name], ['brand_id', '=', Auth::user()->brand_id]])->count();
        }
        if ($count > 0) {
            echo json_encode(FALSE);
            die;
        } else {
            echo json_encode(TRUE);
            die;
        }
    }

    public function test_campaign(Request $request, $campaign_hash) {
        if ($request->isMethod('post')) {
            $campaignObj = Campaign::find(decodeId($campaign_hash));
            $brandObj = Brand::find(Auth::user()->brand_id);
            switch ($request->test_type) {
                case 'phone_number':
                    $message = $this->MessageModel->formSingleMessage($brandObj, $campaignObj);
                    if (!empty($request->phone_number)) {
                        switch ($campaignObj->campaign_channel) {
                            case 'SMS':
                                try {
                                    $this->MessageModel->sendTwilioSmsMessage($message, $request->message_type, 'test', $request->phone_number, $brandObj, $campaignObj);
                                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('success', 'Test Message Sent Successfully');
                                } catch (TwilioException $e) {
                                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('error', $e->getMessage());
                                } catch (RestException $e) {
                                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('error', $e->getMessage());
                                }
                                break;
                            case 'WHATSAPP':
                                try {
                                    $this->MessageModel->sendWhatsappMessage($message, $request->message_type, 'test', $request->phone_number, $brandObj, $campaignObj);
                                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('success', 'Test Whatsapp Message Sent Successfully');
                                } catch (TwilioException $e) {
                                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('error', $e->getMessage());
                                } catch (RestException $e) {
                                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('error', $e->getMessage());
                                }
                                break;
                        }
                    }
                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('error', 'Phone Number Field Is Required');
                    break;
                case 'list':
                    CronRequest::create(['list_id' => decodeId($request->list_hash), 'brand_id' => Auth::user()->brand_id, 'user_id' => Auth::user()->id, 'campaign_id' => decodeId($campaign_hash), 'message_type' => $request->message_type, 'type' => 'test', 'status' => CRON_JOB_QUEUED]);
                    return redirect('campaigns/test_campaign/' . $campaign_hash)->with('success', 'Your Request is Queued Successfully');
                    break;
            }
        }
        $dataArr['title'] = 'Test Campaign';
        $dataArr['campaign_hash'] = $campaign_hash;
        $dataArr['campaignArr'] = Campaign::where('campaign_hash', '=', $campaign_hash)->first();
        $dataArr['brandArr'] = Brand::find(Auth::user()->brand_id);
        $dataArr['campaignListDropdown'] = getDropdownList(Lists::where('brand_id', '=', Auth::user()->brand_id)->get(), 'list_hash', 'list_name');
        return view('frontend/campaigns/test_campaign', $dataArr);
    }

    public function live_campaign(Request $request, $campaign_hash) {
        if ($request->isMethod('post')) {
            CronRequest::create(['list_id' => decodeId($request->list_hash), 'brand_id' => Auth::user()->brand_id, 'user_id' => Auth::user()->id, 'campaign_id' => decodeId($campaign_hash), 'message_type' => $request->message_type, 'type' => 'live', 'status' => CRON_JOB_QUEUED]);
            return redirect('campaigns/live_campaign/' . $campaign_hash)->with('live_messages_sent', 'Your Request is Queued Successfully! Please check deliveries to get more information.');
        }
        $dataArr['title'] = 'Live Campaign';
        $dataArr['campaign_hash'] = $campaign_hash;
        $dataArr['campaignArr'] = Campaign::where('campaign_hash', '=', $campaign_hash)->first();
        $dataArr['brandArr'] = Brand::find(Auth::user()->brand_id);
        $dataArr['campaignListDropdown'] = getDropdownList(Lists::where('brand_id', '=', Auth::user()->brand_id)->get(), 'list_hash', 'list_name');
        return view('frontend/campaigns/live_campaign', $dataArr);
    }

    public function duplicateCampaign($campaign_hash) {
        $campaignArr = Campaign::find(decodeId($campaign_hash))->toArray();
        $newCampaignObj = new Campaign();
        $newCampaignObj->brand_id = $campaignArr['brand_id'];
        $newCampaignObj->campaign_name = $campaignArr['campaign_name'] . ' + ' . time();
        $newCampaignObj->campaign_channel = $campaignArr['campaign_channel'];
        $newCampaignObj->prefix_brand_code = $campaignArr['prefix_brand_code'];
        $newCampaignObj->message = $campaignArr['message'];
        $newCampaignObj->call_to_action_url = $campaignArr['call_to_action_url'];
        $newCampaignObj->save();
        $newCampaignObj->campaign_hash = encodeId($newCampaignObj->id);
        $newCampaignObj->save();
        return redirect()->back()->with('success', 'Duplicate Campaign Created Successfully');
    }

}
