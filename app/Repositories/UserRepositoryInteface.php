<?php

namespace App\Repositories;

interface UserRepositoryInterface {

    public function setUserDefaultBrandId($user_id);

    public function checkUserLogin($email, $password);
}
