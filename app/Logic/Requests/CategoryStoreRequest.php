<?php

namespace App\Logic\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class CategoryStoreRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }
}