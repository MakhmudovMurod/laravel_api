<?php

namespace App\Logic\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class ProductUpdateRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'user_id' => 'filled|integer',
            'category_id' => 'filled|integer',
            'name' => 'filled|string',
            'photo' => 'filled|string',
            'description' => 'filled|string',
            'price' => 'filled|numeric',
        ];
    }
}