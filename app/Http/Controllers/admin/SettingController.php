<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\admin\MasterController;
use App\Setting;

class SettingController extends MasterController {

    protected $User_model;

    public function __construct() {
        
    }

    public function index(Request $request) {
        if ($request->isMethod('post')) {
            if (!empty(Setting::where('id', '=', 1)->update($request->except('_token')))) {
                return redirect('admin/settings/index')->with('success', 'Settings Updated Successfully');
            } else {
                return redirect('admin/settings/index')->with('error', 'Settings Updation Failed');
            }
        }
        $dataArr['title'] = 'Configure Settings';
        $dataArr['settingArr'] = Setting::find(1);
        return view('admin/settings/index', $dataArr);
    }

    public function importantInstructions() {
        $dataArr = [];
        return view('admin/settings/important_instructions', $dataArr);
    }

}
