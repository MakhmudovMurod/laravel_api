<?php

namespace App\Logic\Requests;

use Illuminate\Validation\Rule;
use App\Logic\Abstracts\ApiRequest;

class ProductIndexRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'search' => 'nullable|string',
        ];
    }
}