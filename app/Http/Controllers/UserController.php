<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;
use App\User;
use App\Brand;
use Hash;
use DB;

//require 'vendor/autoload.php';

class UserController extends Controller {

    private $repository;
    protected $User_model;

    public function __construct() {
        $this->User_model = new User();
        $this->repository = new UserRepository();
    }

    public function dashboard() {
        $dataArr['title'] = 'Dashboard'; // Set Page Title
        return view('frontend/users/dashboard', $dataArr);
    }

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            if ($this->repository->checkUserLogin($request->email, $request->password)) {

                if (Auth::user()->admin == 1) {
                    if (Auth::user()->brand_id == NULL) {
						$brand_id = $this->repository->setUserDefaultBrandId(Auth::user()->id); /* returns brand id */
						if($brand_id !== 'false'){
								Auth::user()->brand_id = $brand_id;
						}
                    }
                }
                return redirect('/dashboard')->with('success', 'Welcome');
            }
            return redirect('/login')->with('error', 'Incorrect credentials');
        }
        $dataArr['title'] = 'Marketer Login'; // Set Page Title
        return view('frontend/users/login', $dataArr);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout successfully');
    }

    public function changePassword(Request $request) {
        if ($request->isMethod('post')) {

            $user = $this->User_model::where('email', auth()->user()->email)->first();
            $user->password = Hash::make($request->new_password);
            $user->save();
            Auth::logout();
            return redirect('/login')->with('success', 'Password changed successfully! Please login again.');
        }
        $dataArr['title'] = 'Change Password'; // Set Page Title
        return view('frontend/users/change_password', $dataArr);
    }

    public function changeBrand(Request $request) {
        User::where('id', '=', Auth::user()->id)->update(['brand_id' => $request->brand_id]);
        return redirect('/dashboard')->with('success', 'Brand Changed Successfully');
    }

    public function setOptInOut(Request $request) {
        
    }

}
