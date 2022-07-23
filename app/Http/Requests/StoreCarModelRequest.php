<?php

namespace App\Http\Requests;

use App\Models\CarModel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCarModelRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('carModel_create');
    }

    public function rules()
    {
        return [
            'carModel' => [
                'string',
                'required',
            ],
        ];
    }
}
