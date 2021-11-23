<?php

namespace App\Logic\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class CategoryUpdateRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name' => 'filled|string',
        ];
    }
}