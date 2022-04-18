<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'number' => 'required|unique:users|unique:yets|between:0,24000000', 'password' => 'required|confirmed|max:15', 'password_confirmation' => 'required', 'password_confirmation' => 'required', 'name' => 'required|unique:users|unique:yets',
        ];
    }
    public function messages()
    {
        return [
            'number.required' => '学籍番号は必須です',
            'number.unique' => '学籍番号が既に登録済みです',
            'name.unique' => 'ユーザー名が既に登録済みです',
            'number.between' => '学籍番号が違います',
            'number.max' => '10文字以内です',
            'password.required' => 'パスワードは必須です',
            'password.confirmed' => 'パスワードが一致しません',
            'password.max' => 'パスワードは15文字以内にしてください',
            'password_confirmation' => 'パスワードは必須です',
        ];
    }
}
