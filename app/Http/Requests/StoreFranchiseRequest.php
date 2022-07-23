<?php

namespace App\Http\Requests;

use App\Models\Franchise;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFranchiseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('franchise_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'short_code' => [
                'string',
                'required',
            ],
        ];
    }
}
