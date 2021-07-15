<?php

namespace App\Repositories;

use App\Repositories\UserRepositoryInterface;
use App\User;
use App\Brand;
use Auth;

class UserRepository implements UserRepositoryInterface {

    public function setUserDefaultBrandId($user_id) {
        $brand_id = Brand::first()->id ?? NULL;
		if(!empty($brand_id)){
		    User::where('id', '=', $user_id)->update(['brand_id' => $brand_id]);
            return $brand_id;	
		}
		return 'false';
    }

    public function checkUserLogin($email, $password) {
        return Auth::attempt(['email' => $email, 'password' => $password]);
    }

}
