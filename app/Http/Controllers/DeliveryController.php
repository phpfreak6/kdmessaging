<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lists;
use App\List_number;
use App\Delivery;
use DB;
use Excel;
use Batch;

class DeliveryController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {
        $dataArr['title'] = 'Manage Deliveries';
        return view('frontend/deliveries/index', $dataArr);
    }

    public function getDeliveriesDatatable(Request $request) {
        return datatables()->of(
                            //    DB::table('delivery')
                                Delivery::join('brands', 'brands.id', '=', 'delivery.brand_id')
                                ->leftJoin('campaigns', 'campaigns.id', '=', 'delivery.campaign_id')
                                ->select('brands.brand_name', 'campaigns.campaign_name', 'delivery.campaign_channel', 'delivery.id', 'delivery.phone_number', 'delivery.message_id', 'delivery.delivery_time', 'delivery.type', 'delivery.bad_number', 'delivery.opted_out', 'delivery.status')
                                ->where('delivery.brand_id', '=', Auth::user()->brand_id)
                                ->latest('delivery.created_at')
                            //    ->get()
                        )
                        ->addIndexColumn()
                        ->addColumn('delivery_hash', function ($query) {
                            return encodeId($query->id);
                        })
                        ->addColumn('type_representation', function ($query) {
                            if ($query->type == 'test') {
                                return '<span class="label label-sm label-danger arrowed arrowed-right">Test</span>';
                            } else if ($query->type == 'live') {
                                return '<span class="label label-sm label-success arrowed arrowed-right">Live</span>';
                            } else {
                                return "<span class='label label-sm label-warning arrowed arrowed-right'>$query->type</span>";
                            }
                        })
                        ->addColumn('channel_representation', function ($query) {
                            if ($query->campaign_channel == 'WHATSAPP') {
                                return '<span style="background-color: #25D366 !important" class="label label-sm arrowed arrowed-right">Whatsapp</span>';
                            }
                            return '<span style="background-color: #FF9900 !important" class="label label-sm arrowed arrowed-right">SMS</span>';
                        })
                        ->rawColumns(['type_representation', 'channel_representation'])
                        ->make(true);
    }

    public function delivery_details(Request $request, $delivey_hash) {

        $dataArr['title'] = 'Delivery Details';
        $dataArr['deliveryArr'] = Delivery::with(['brand', 'campaign'])->where('id', '=', decodeId($delivey_hash))->first()->toArray() ?: [];
        return view('frontend/deliveries/delivery_details', $dataArr);
    }

    public function deleteDelivery(Request $request) {
        if (!empty($request->delivery_hash)) {
            if (!empty(Delivery::where('id', '=', decodeId($request->delivery_hash))->delete())) {
                echo '1';
                die;
            } else {
                echo '0';
                die;
            }
        }
    }

}
