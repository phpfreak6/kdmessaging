<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];

    public function brand() {
        return $this->hasOne('App\Brand', 'id', 'brand_id');
    }

    static function updateUser($user_id, $dataArr) {
        return User::where('id', '=', $user_id)->update($dataArr);
    }

    static function insertUser($dataArr) {
        return User::insertGetId($dataArr);
    }

}
