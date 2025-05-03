<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmationRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',

            'category_id' => 'required,
            'first_name' => 'required,
            'last_name' => 'required,
            'gender' => 'required,
            'email' => 'required|email,
            'tel' => 'required|,
            'address' => 'required,
            'building' => ',
            'detail' => 'required,
        ];
    }
}
