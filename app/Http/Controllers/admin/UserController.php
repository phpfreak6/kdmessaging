<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\admin\MasterController;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Brand;
use Hash;
use DB;

/* Requests */
use App\Http\Requests\AdminLoginUserRequest;

class UserController extends MasterController {

    protected $User_model;

    public function __construct() {
        $this->User_model = new User();
    }

    public function index(Request $request) {
        $dataArr['title'] = 'Manage Users';
        return view('admin/users/index', $dataArr);
    }

    public function getUsersDatatable(Request $request) {
        return datatables()->of(
                                DB::table('users')
                                ->leftJoin('brands', 'brands.id', '=', 'users.brand_id')
                                ->select('users.id', 'users.email', 'users.first_name', 'users.last_name', 'users.admin', 'brands.brand_name')
                                ->get())
                        ->addIndexColumn()
                        ->addColumn('full_name', function ($query) {
                            return $query->first_name . ' ' . $query->last_name;
                        })
                        ->addColumn('type', function ($query) {
                            if ($query->admin == 1) {
                                return '<span class="label label-sm label-success arrowed arrowed-right">Admin</span>';
                            }
                            return '<span class="label label-sm label-primary arrowed arrowed-right">User</span>';
                        })
                        ->rawColumns(['type'])
                        ->make(true);
    }

    public function user(Request $request, $user_id = NULL) {
        if ($request->isMethod('post')) {
            $postArr = $request->except('_token');
            $postArr['admin'] = !empty($postArr['admin']) ? $postArr['admin'] : 0;
            if (!empty($postArr['password'])) {
                $postArr['password'] = Hash::make($postArr['password']);
            } else {
                unset($postArr['password']);
            }
            if (!empty($postArr['id'])) {
                if (empty($postArr['brand_id'])) {
                    $postArr['brand_id'] = NULL;
                }
                User::updateUser($postArr['id'], $postArr);
                return redirect('admin/users/index')->with('success', 'User Updated Successfully');
            } else {
                User::insertUser($postArr);
                return redirect('admin/users/index')->with('success', 'User Saved Successfully');
            }
        }
        $dataArr['title'] = 'Add/Edit User';
        $dataArr['userArr'] = User::where([['id', '=', $user_id]])->first();
        $dataArr['brandListArr'] = Brand::getBrandsDropdown();
        return view('admin/users/user', $dataArr);
    }

    public function dashboard() {
        $dataArr['title'] = 'Admin Dashboard'; // Set Title
        return view('admin/admin_users/dashboard', $dataArr);
    }

    public function login() {
        $dataArr['title'] = 'Admin Login'; // Set Page Title
        return view('admin/admin_users/login', $dataArr);
    }

    public function checkUserlogin(AdminLoginUserRequest $request) {
        $dataArr = $request->validated();
        if (Auth::attempt(['email' => $dataArr['email'], 'password' => $dataArr['password']])) {
            return redirect('/admin/dashboard')->with('success', 'Welcome');
        }
        return redirect('/admin')->with('error', 'Incorrect credentials');
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin')->with('success', 'Logout successfully');
    }

    public function changePassword(Request $request) {
        if ($request->isMethod('post')) {
            $user = $this->User_model::where('email', auth()->user()->email)->first();
            $user->password = Hash::make($request->new_password);
            $user->save();
            Auth::logout();
            return redirect('/admin')->with('success', 'Password changed successfully! Please login again.');
        }
        $dataArr['title'] = 'Change Password';
        return view('admin/admin_users/change_password', $dataArr);
    }

    public function checkEmailExists(Request $request) {
        $email = $request->email;
        $id = $request->id;
        if (!empty($request->id)) {
            $count = User::where([['email', '=', $email]])->whereNotIn('id', [$id])->count();
        } else {
            $count = User::where([['email', '=', $email]])->count();
        }
        if ($count > 0) {
            echo json_encode(FALSE);
            die;
        } else {
            echo json_encode(TRUE);
            die;
        }
    }

    public function deleteUser(Request $request) {
        if (!empty(User::where('id', '=', $request->id)->delete())) {
            echo '1';
            die;
        } else {
            echo '0';
            die;
        }
    }

}
