<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexContactRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' =>'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|email|unique:users,email',
            'tel' => 'required|integer|max:5',
            'address' => 'required|string',
            'building' => 'string',
            'detail' => 'string|max:120',
        ];
    }
    public function messages()
{
    return [
        'first_name.required' => '姓を入力してください',
        'first_name.required' => '姓を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
    ];
    }
}
