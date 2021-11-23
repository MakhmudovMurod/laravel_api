<?php

namespace App\Logic\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class ProductStoreRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required|string',
            'photo' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ];
    }
}