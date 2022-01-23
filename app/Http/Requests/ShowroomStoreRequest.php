<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowroomStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:500'],
            'location' => ['required', 'string', 'max:500'],
            'phone_number' => ['required', 'string', 'max:200'],
            'email' => ['required', 'email', 'max:100'],
            'admin_name' => ['required', 'string'],
            'admin_email' => ['required', 'string'],
            'logo.*' => [
                'required',
            ],
        ];
    }
}
