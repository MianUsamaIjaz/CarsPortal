<?php

namespace App\Http\Requests;

use App\Models\CarModel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCarModelRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('carModel_edit');
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
