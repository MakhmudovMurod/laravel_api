<?php

namespace App\Logic\Auth\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class LoginRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'email' => 'email','string',
            'password' => 'required|string|max:255',
        ];
    }
}