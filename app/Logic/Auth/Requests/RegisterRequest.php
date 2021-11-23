<?php

namespace App\Logic\Auth\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class RegisterRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required','email','string',
            'phone_number' => 'required|string',
            'password' => 'required|string',
        ];
    }
}