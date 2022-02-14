<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inventory_id' => [
                'integer',
                'required',
            ],
            'price' => [
                'integer',
                'required',
            ],
            'customer_name' => [
                'string',
                'required',
            ],
            'customer_phone_number' => [
                'string',
                'required'
            ],
            'customer_email' => [
                'email',
            ],
            'customer_address' => [
                'string',
            ],
            'payment_method' => [
                'string',
                'required',
            ],
            'payment_status' => [
                'string'
            ],
            'note' => [
                'text',
            ],
            'sold_by_id' => [
                'integer',
                'required',
            ],
        ];
    }
}
