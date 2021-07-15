<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\admin\MasterController;
use DataTables;
use App\Brand;
use App\Campaign;
use App\Delivery;
use App\Delivery_click;
use App\Lists;
use App\List_number;
use App\User;
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;
use Twilio\Exceptions\RestException;
use Session;

class BrandController extends MasterController {

    public function __construct() {
        
    }

    public function index() {
        $dataArr['title'] = 'Manage Brands';
        return view('admin/brands/index', $dataArr);
    }

    public function getBrandsDatatable() {
        return datatables()->of(Brand::all())->addIndexColumn()->make(true);
    }

    public function createTwilioSubAccount($subaccount_name) {
        try {
            $twilioObj = new Client(config('website_settings.account_id'), config('website_settings.authentication_token'));
            $account = $twilioObj->api->v2010->accounts->create(['friendlyName' => $subaccount_name]);
            return ['sub_account_token' => $account->authToken, 'sub_account_id' => $account->sid];
        } catch (RestException $e) {
            Session::flash('toast_error', $e->getMessage());
            return FALSE;
        } catch (TwilioException $e) {
            Session::flash('toast_error', $e->getMessage());
            return FALSE;
        }
    }

    public function brand(Request $request, $brand_id = NULL) {
        if ($request->isMethod('post')) {
            $postArr = $request->except('_token', 'brand_logo_file');

            /* ---- CREATE TWILIO SUB ACCOUNT ---- */
            if (!empty($postArr['twilio_sub_account'])) {
                if (($twilioSubAccountArr = $this->createTwilioSubAccount($postArr['brand_name'])) === FALSE) {
                    return redirect('admin/brands/index');
                }
                unset($postArr['twilio_sub_account']);
                $postArr = array_merge($postArr, $twilioSubAccountArr);
            }
            /* ---- CREATE TWILIO SUB ACCOUNT ---- */

            if (!empty($postArr['id'])) {
                ## Updating Brand Data
                Brand::where([['id', '=', $postArr['id']]])->update($postArr);
                if (!empty($request->brand_logo_file)) {
                    $file_name = str_replace(' ', '', time() . '_' . $request->brand_logo_file->getClientOriginalName());
                    $request->brand_logo_file->move("uploads/brands/logos/" . $postArr['id'], $file_name);
                    $brandObj = Brand::find($postArr['id']);
                    $brandObj->brand_logo_file = $file_name;
                    $brandObj->save();
                }
                return redirect('admin/brands/index')->with('success', 'Brand Updated Successfully');
            } else {

                ## Inserting Brand Data
                $brand_id = Brand::insertGetId($postArr);
                if (!empty($request->brand_logo_file)) {
                    $file_name = str_replace(' ', '', time() . '_' . $request->brand_logo_file->getClientOriginalName());
                    $request->brand_logo_file->move("uploads/brands/logos/$brand_id", $file_name);
                    $brandObj = Brand::find($brand_id);
                    $brandObj->brand_logo_file = $file_name;
                    $brandObj->save();
                }
                return redirect('admin/brands/index')->with('success', 'Brand Saved Successfully');
            }
        }
        $dataArr['title'] = 'Add/Edit Brand';
        $dataArr['brandArr'] = Brand::find($brand_id);
        return view('admin/brands/brand', $dataArr);
    }

    public function deleteBrand(Request $request) {
        if (!empty($request->id)) {
            /* CLOSE TWILIO ACCOUNT */
            try {
                $brandObj = Brand::find($request->id);
                $delete_twilio_subaccount = new Client(config('website_settings.account_id'), config('website_settings.authentication_token'));
                $delete_twilio_subaccount->api->v2010->accounts($brandObj->sub_account_id)->update(['status' => 'closed']);
            } catch (RestException $e) {
                echo $e->getMessage();
                die;
            } catch (TwilioException $e) {
                echo $e->getMessage();
                die;
            }
            /* CLOSE TWILIO ACCOUNT */
            List_number::where('brand_id', '=', $request->id)->delete();
            Lists::where('brand_id', '=', $request->id)->delete();
            Delivery_click::where('brand_id', '=', $request->id)->delete();
            Delivery::where('brand_id', '=', $request->id)->delete();
            Campaign::where('brand_id', '=', $request->id)->delete();
            User::where([['brand_id', '=', $request->id], ['admin', '=', 0]])->delete();
            Brand::where('id', '=', $request->id)->delete();
            echo '1';
            die;
        } else {
            echo 'Something Went Wrong';
            die;
        }
    }

    public function checkBrandTitleExists(Request $request) {
        $brand_name = $request->brand_name;
        $id = $request->id;
        if (!empty($request->id)) {
            $count = Brand::where([['brand_name', '=', $brand_name]])->whereNotIn('id', [$id])->count();
        } else {
            $count = Brand::where([['brand_name', '=', $brand_name]])->count();
        }
        if ($count > 0) {
            echo json_encode(FALSE);
            die;
        } else {
            echo json_encode(TRUE);
            die;
        }
    }

    public function brandDetails($brand_id) {
        $dataArr['brandArr'] = Brand::find($brand_id);
        return view('admin/brands/brand_details', $dataArr);
    }

}
