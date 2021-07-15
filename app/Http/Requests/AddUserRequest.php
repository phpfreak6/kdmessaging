<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ];
    }

}
