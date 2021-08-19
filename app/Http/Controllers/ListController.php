<?php

namespace App\Http\Controllers;

//require 'vendor/autoload.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lists;
use App\List_number;
use App\Brand;
use App\Delivery;
use DB;
use Excel;
use Batch;
use Twilio\Rest\Client;
use Exception;
use Twilio\Exceptions\TwilioException;
use Twilio\Exceptions\RestException;

class ListController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {
        $dataArr['title'] = 'Manage Lists';
        return view('frontend/lists/index', $dataArr);
    }

    public function getListsDatatable(Request $request) {
        return datatables()->of(
                                DB::table('lists')
                                ->leftJoin('brands', 'brands.id', '=', 'lists.brand_id')
                                ->select('lists.list_name', 'lists.list_hash', 'brands.brand_name')
                                ->where('lists.brand_id', '=', Auth::user()->brand_id)
                                ->get()
                        )
                        ->addIndexColumn()
                        ->make(true);
    }

    public function modify_list(Request $request, $encrypted_list_id = NULL) {
        if ($request->isMethod('post')) {
            $postArr = $request->except('_token');
            $postArr['brand_id'] = Auth::user()->brand_id;
            if (!empty($request->list_hash)) {
                Lists::where('list_hash', '=', $postArr['list_hash'])->update($postArr);
                return redirect('/lists/index')->with('success', 'List Updated Successfully');
            } else {
                $list_id = Lists::insertGetId($postArr);
                $listObj = Lists::find($list_id);
                $listObj->list_hash = encodeId($list_id);
                $listObj->save();
                return redirect('/lists/index')->with('success', 'List Created Successfully');
            }
        }
        $dataArr['title'] = 'Add/Edit List'; // Set Page Title
        $dataArr['listArr'] = Lists::find(!empty($encrypted_list_id) ? decodeId($encrypted_list_id) : NULL);
        return view('frontend/lists/list', $dataArr);
    }

    public function checkListNameExists(Request $request) {
        $list_name = $request->list_name;
        $list_hash = $request->list_hash;
        if (!empty($request->list_hash)) {
            $count = Lists::where([['list_name', '=', $list_name], ['brand_id', '=', Auth::user()->brand_id]])->whereNotIn('list_hash', [$list_hash])->count();
        } else {
            $count = Lists::where([['list_name', '=', $list_name], ['brand_id', '=', Auth::user()->brand_id]])->count();
        }
        if ($count > 0) {
            echo json_encode(FALSE);
            die;
        } else {
            echo json_encode(TRUE);
            die;
        }
    }

    public function deleteList(Request $request) {
        if (!empty($request->list_hash)) {
            try {
                Lists::where('list_hash', '=', $request->list_hash)->delete();
                List_number::where('list_id', '=', decodeId($request->list_hash))->delete();
                echo '1';
                die;
            } catch (Exception $e) {
                echo $e->getMessage();
                die;
            }
        } else {
            echo 'List Identifier Is Required';
            die;
        }
    }

    ## Manage List Numbers

    public function manage_list_numbers(Request $request, $list_hash) {
        $dataArr['title'] = 'Manage List Phone Numbers'; // Set Page Title
        $dataArr['list_hash'] = $list_hash;
        $dataArr['listArr'] = Lists::find(decodeId($list_hash));
        return view('frontend/list_numbers/index', $dataArr);
    }

    public function getListNumbersDatatable(Request $request) {
        $list_id = decodeId($request->list_hash);
        return datatables()->of(
                                DB::table('list_numbers')
                                ->select('list_numbers.*')
                                ->where('list_numbers.brand_id', '=', Auth::user()->brand_id)
                                ->where('list_numbers.list_id', '=', $list_id)
                                ->latest()
                                ->get()
                        )
                        ->addIndexColumn()
                        ->addColumn('bad_number_representation', function ($query) {
                            if ($query->bad_number == 1) {
                                return '<span class="label label-sm label-danger arrowed arrowed-right">Yes</span>';
                            }
                            return '<span class="label label-sm label-success arrowed arrowed-right">No</span>';
                        })
                        ->addColumn('opted_out_representation', function ($query) {
                            if ($query->opted_out == 1) {
                                return '<span class="label label-sm label-danger arrowed arrowed-right">Yes</span>';
                            }
                            return '<span class="label label-sm label-success arrowed arrowed-right">No</span>';
                        })
                        ->addColumn('whatsapp_opt_representation', function ($query) {
                            if ($query->whatsapp_opt == 2) {
                                return '<span class="label label-sm label-info arrowed arrowed-right">N/A</span>';
                            }
                            if ($query->whatsapp_opt == 1) {
                                return '<span class="label label-sm label-success arrowed arrowed-right">IN</span>';
                            }
                            if ($query->whatsapp_opt == 0) {
                                return '<span class="label label-sm label-danger arrowed arrowed-right">OUT</span>';
                            }
                        })
                        ->rawColumns(['bad_number_representation', 'opted_out_representation', 'whatsapp_opt_representation'])
                        ->make(true);
    }

    public function list_number(Request $request, $list_hash, $list_number_hash = NULL) {
        $dataArr['list_hash'] = $list_hash;
        $dataArr['listArr'] = Lists::find(decodeId($list_hash));
        if ($request->isMethod('post')) {
            $postArr = $request->except('_token');

            /* SEND WHATSAPP OPT IN NOTIFICATION */
            if (!empty($postArr['send_whatsapp_optin'])) {
                try {
                    $brandArr = Brand::find(Auth::user()->brand_id);
                    $client = new Client($brandArr->sub_account_id, $brandArr->sub_account_token);
                    $result = $client->messages->create('whatsapp:' . $postArr['phone_number'],
                            [
                                'from' => 'whatsapp:' . $brandArr->whatsapp_phone_number,
                                'body' => $brandArr['whatsapp_optin_message'],
                                'statusCallback' => url('api/webhooks/whatsappMessageStatusHook')
                            ]);
                    Delivery::insert(
                            [
                                'brand_id' => Auth::user()->brand_id,
                                'campaign_id' => NULL,
                                'campaign_channel' => 'WHATSAPP',
                                'phone_number' => $postArr['phone_number'],
                                'message' => $brandArr['whatsapp_optin_message'],
                                'message_id' => $result->sid,
                                'type' => 'opt in/out',
                                'status' => strtoupper($result->status),
                                'delivery_time' => $result->dateCreated->format('Y-m-d h:i:s'),
                                'created_at' => date('Y-m-d h:i:s', time())
                    ]);
                    unset($postArr['send_whatsapp_optin']);
                } catch (TwilioException $e) {
                    return redirect("/lists/manage_list_numbers/$list_hash")->with('toast_error', $e->getMessage());
                } catch (RestException $e) {
                    return redirect("/lists/manage_list_numbers/$list_hash")->with('toast_error', $e->getMessage());
                } catch (Exception $e) {
                    return redirect("/lists/manage_list_numbers/$list_hash")->with('toast_error', $e->getMessage());
                }
            }
            /* SEND WHATSAPP OPT IN NOTIFICATION */

            $postArr['brand_id'] = Auth::user()->brand_id;
            $postArr['list_id'] = decodeId($postArr['list_hash']);
            unset($postArr['list_hash']);
            if (!empty($postArr['list_number_hash'])) {
                List_number::where('list_number_hash', '=', $postArr['list_number_hash'])->update($postArr);
                return redirect("/lists/manage_list_numbers/$list_hash")->with('success', 'Phone Number Updated Successfully');
            } else {
                $list_number_id = List_number::insertGetId($postArr);
                $listNumberObj = List_number::find($list_number_id);
                $listNumberObj->list_number_hash = encodeId($list_number_id);
                $listNumberObj->save();
                return redirect("/lists/manage_list_numbers/$list_hash")->with('success', 'Phone Number Saved Successfully');
            }
            return redirect("/lists/manage_list_numbers/$list_hash")->with('error', 'Operation Failed');
        }
        $dataArr['title'] = 'Add/Edit List Phone Number'; // Set Page Title
        $dataArr['listNumberArr'] = List_number::where('list_number_hash', '=', $list_number_hash)->first();
        return view('frontend/list_numbers/list_number', $dataArr);
    }

    public function checkPhoneNumberExistsInList(Request $request) {
        $phone_number = $request->phone_number;
        $list_id = decodeId($request->list_hash);
        if (!empty($request->list_number_hash)) {
            $list_number_id = decodeId($request->list_number_hash);
            $count = List_number::where([
                        ['phone_number', '=', $phone_number],
                        ['list_id', '=', $list_id],
                        ['brand_id', '=', Auth::user()->brand_id]
                    ])->whereNotIn('id', [$list_number_id])->count();
        } else {
            $count = List_number::where([
                        ['phone_number', '=', $phone_number],
                        ['list_id', '=', $list_id],
                        ['brand_id', '=', Auth::user()->brand_id]
                    ])->count();
        }
        if ($count > 0) {
            echo json_encode(FALSE);
            die;
        } else {
            echo json_encode(TRUE);
            die;
        }
    }

    public function deleteListPhoneNumber(Request $request) {
        if (!empty($request->list_number_hash)) {
            if (!empty(List_number::where('list_number_hash', '=', $request->list_number_hash)->delete())) {
                echo '1';
                die;
            } else {
                echo '0';
                die;
            }
        }
    }

    public function uploadExcelFile(Request $request) {
        $errorsArr = [];
        $list_id = decodeId($request->list_hash);
        $path = $request->file('uploaded_file')->getRealPath();
        $excelData = Excel::load($path)->get()->toArray();
        $excelArr = [];
        $date = date('Y-m-d h:i:s', time());
        $existingNumbersArr = List_number::where([['brand_id', '=', Auth::user()->brand_id], ['list_id', '=', $list_id]])->pluck('phone_number')->toArray() ?: [];
        $brandArr = Brand::find(Auth::user()->brand_id);
        foreach ($excelData as $sheet) {
            if (!empty($sheet)) {
                foreach ($sheet as $sheet_row) {
                    if (!in_array($sheet_row['phone_number'], $existingNumbersArr)) {
                        /* SEND WHATSAPP OPT IN NOTIFICATION */
                        if ($request->send_whatsapp_optin_message === 'true') {
                            try {
                                $client = new Client($brandArr->sub_account_id, $brandArr->sub_account_token);
                                $result = $client->messages->create('whatsapp:' . $sheet_row['phone_number'],
                                        [
                                            'from' => 'whatsapp:' . $brandArr->whatsapp_phone_number,
                                            'body' => $brandArr['whatsapp_optin_message'],
                                            'statusCallback' => url('api/webhooks/whatsappMessageStatusHook')
                                        ]);
                                Delivery::insert(
                                        [
                                            'brand_id' => Auth::user()->brand_id,
                                            'campaign_id' => NULL,
                                            'campaign_channel' => 'WHATSAPP',
                                            'phone_number' => $sheet_row['phone_number'],
                                            'message' => $brandArr['whatsapp_optin_message'],
                                            'message_id' => $result->sid,
                                            'type' => 'opt in/out',
                                            'status' => strtoupper($result->status),
                                            'delivery_time' => $result->dateCreated->format('Y-m-d h:i:s'),
                                            'created_at' => date('Y-m-d h:i:s', time())
                                ]);
                            } catch (TwilioException $e) {
                                return $e->getMessage();
                                die;
                            } catch (RestException $e) {
                                return $e->getMessage();
                                die;
                            }
                        }
                        /* SEND WHATSAPP OPT IN NOTIFICATION */

                        array_push($excelArr, [
                            'first_name' => $sheet_row['first_name'],
                            'last_name' => $sheet_row['last_name'],
                            'phone_number' => $sheet_row['phone_number'],
                            'created_at' => $date,
                            'brand_id' => Auth::user()->brand_id,
                            'list_id' => $list_id
                        ]);
                    }
                }
            }
        }
        if (!empty($excelArr)) {
            List_number::insert($excelArr);
            $newRecordsArr = List_number::where('created_at', '=', $date)->get()->toArray() ?: [];
            foreach ($newRecordsArr as $key => $value) {
                $newRecordsArr[$key]['list_number_hash'] = encodeId($value['id']);
            }
            Batch::update(new List_number, $newRecordsArr, 'id');
            return 'list_updated';
        }
        return 'no_new_records';
    }

}
