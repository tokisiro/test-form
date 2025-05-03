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

            'last_name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'gender' => 'required|in:1,2,3',
            'email' => 'required|email|max:255',
            'tel1' => 'required|digits:3',
            'tel2' => 'required|digits:4',
            'tel3' => 'required|digits:4',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'category_id' => 'required|in:1,2,3,4,5',
            'detail' => 'required|string|max:1000',
        ];
    }
        public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required.in:1,2,3' => '性別を選択してください',
            'email.required.email.max:255' => ''
            'tel1.required.digits:4' =>
            'tel2.required.digits:4' =>
            'tel3.required.digits:3' =>
            'address' =>
            'building' =>
            'category_id' =>
            'detail' =>
        ];
    }
}
