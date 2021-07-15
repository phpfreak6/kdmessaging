<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Brand;
use App\Campaign;
use App\Delivery;
use App\Delivery_click;
use App\Lists;
use App\List_number;
use App\User;
use App\Models\CronRequest;
use DB;
use Auth;

class CronRequestController extends Controller {

    public function index() {
        return view('admin/cron-requests/index');
    }

    public function getCronRequestsDatatable(Request $request) {
        $dataArr = DB::table('cron_requests')
                ->join('brands', 'brands.id', '=', 'cron_requests.brand_id')
                ->join('campaigns', 'campaigns.id', '=', 'cron_requests.campaign_id')
                ->join('lists', 'lists.id', '=', 'cron_requests.list_id')
                ->join('users', 'users.id', '=', 'cron_requests.user_id')
                ->select('cron_requests.*', 'brands.brand_name', 'campaigns.campaign_name', 'lists.list_name', 'users.first_name', 'users.last_name')
                ->where('lists.brand_id', '=', Auth::user()->brand_id)
                ->orderBy('cron_requests.cron_request_id', 'DESC')
                ->get();
        return datatables()->of($dataArr)->addIndexColumn()->make(true);
    }

}
