<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lists;
use App\List_number;
use App\Delivery;
use App\Campaign;
use App\Delivery_click;
use App\MessageInfo;
use DB;
use Exception;

class DeliveryClickController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {
        $dataArr['title'] = 'Manage Delivery Clicks';
        return view('frontend/delivery_clicks/index',$dataArr);
    }

    public function getDeliveryClicksDatatable(Request $request) {
        return datatables()->of(
                                DB::table('delivery_clicks')
                                ->join('brands', 'brands.id', '=', 'delivery_clicks.brand_id')
                                ->join('campaigns', 'campaigns.id', '=', 'delivery_clicks.campaign_id')
                                ->join('list_numbers', 'list_numbers.id', '=', 'delivery_clicks.list_phone_number_id')
                                ->select('brands.brand_name', 'campaigns.campaign_name', 'delivery_clicks.id', 'delivery_clicks.click_count', 'delivery_clicks.created_at', 'list_numbers.phone_number', 'list_numbers.first_name', 'list_numbers.last_name')
                                ->where('delivery_clicks.brand_id', '=', Auth::user()->brand_id)
                                ->get()
                        )
                        ->addIndexColumn()
                        ->addColumn('delivery_click_hash', function ($query) {
                            return encodeId($query->id);
                        })
                        ->make(true);
    }

    public function deleteDeliveryClick(Request $request) {
        if (!empty($request->delivery_click_hash)) {
            if (!empty(Delivery_click::where('id', '=', decodeId($request->delivery_click_hash))->delete())) {
                echo '1';
                die;
            } else {
                echo '0';
                die;
            }
        }
    }

    public function setDeliveryReport(Request $request) {
        try {
            $messageInfoObj = MessageInfo::find(decodeId($request->message_info_hash));
            $campaign_id = $messageInfoObj->campaign_id;
            $list_phone_number_id = $messageInfoObj->list_number_id;
            $campaignObj = Campaign::where('id', '=', $campaign_id)->first();
            $deliveryClickObj = Delivery_click::where([['campaign_id', '=', $campaign_id], ['list_phone_number_id', '=', $list_phone_number_id]])->first();
            if (!empty($deliveryClickObj->id)) {
                $deliveryClickObj->click_count = $deliveryClickObj->click_count + 1;
                $deliveryClickObj->save();
                return response()->json(array("response" => array("status" => "1", "message" => "Request Completed Successfully", 'redirect_url' => $campaignObj->call_to_action_url)), 200);
            } else {
                Delivery_click::insert(['campaign_id' => $campaign_id, 'list_phone_number_id' => $list_phone_number_id, 'brand_id' => $campaignObj->brand_id, 'created_at' => date('Y-m-d h:i:s', time())]);
                return response()->json(array("response" => array("status" => "1", "message" => "Request Completed Successfully", 'redirect_url' => $campaignObj->call_to_action_url)), 200);
            }
        } catch (Exception $e) {
            return response()->json(array("response" => array("status" => "0", "message" => $e->getMessage())), 200);
        }
    }

}
