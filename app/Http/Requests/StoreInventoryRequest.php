<?php

namespace App\Http\Requests;

use App\Models\Inventory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInventoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inventory_create');
    }

    public function rules()
    {
        return [
            'brand_name' => [
                'string',
                'required',
            ],
            'make' => [
                'string',
                'required',
            ],
            'model' => [
                'string',
                'required',
            ],
            'manufacture_year' => [
                'string',
                'required',
            ],
            'registration_year' => [
                'string',
            ],
            'transmiss' => [
                'string',
            ],
            'milage' => [
                'string',
                'required',
            ],
            'body_type' => [
                'string',
                'required',
            ],
            'no_of_doors' => [
                'string',
                'required',
            ],
            'price' => [
                'string',
                'required',
            ],
            'engine_size' => [
                'string',
            ],
            'fuel' => [
                'string',
                'required',
            ],
            'engine_type' => [
                'string',
                'required',
            ],
            // 'description' => [
            //     'longText',
            // ],
            'interior_color' => [
                'string',
                'nullable',
            ],
            'exterior_color' => [
                'string',
                'nullable',
            ],
            'pictures' => [
                'array',
                // 'required',
            ],
            // 'pictures.*' => [
            //     'required',
            // ],
        ];
    }
}
