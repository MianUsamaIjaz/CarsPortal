<?php

namespace App\Http\Requests;

use App\Models\Car;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCarRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('car_create');
    }

    public function rules()
    {
        return [
            'manufacturer' => [
                'string',
                'required',
            ],
            'carModel' => [
                'string',
                'required',
            ],
            'year' => [
                'string',
                'required',
            ],
            'color_id' => [
                'required',
                'integer',
            ],
            'locations.*' => [
                'integer',
            ],
            'locations' => [
                'array',
            ],
        ];
    }
}
