<?php

namespace App\Logic\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class UserUpdateRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name' => 'filled|string',
            'email' => 'filled|email|unique:users,email',
            'phone_number' => 'filled|string|unique:users,phone_number',
            'password' => 'filled|string|min:8',
        ];
    }
}