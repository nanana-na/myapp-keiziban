<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminupRequest extends FormRequest
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
            'name' => 'required|unique:users|unique:yets|min:2|max:12', 'password' => 'confirmed|max:15', 'password_confirmation',
        ];
    }
    public function messages()
    {
        return [
            'number.required' => '学籍番号は必須です',
            'number.unique' => '学籍番号が登録済みです',
            'name.unique' => 'ユーザー名が既に登録済みです',
            'number.between' => '学籍番号が違います',
            'number.max' => '10文字以内です',
            'password.confirmed' => 'パスワードが一致しません',
            'password.max' => 'パスワードは15文字以内にしてください',
            'password_confirmation' => 'パスワードは必須です',
        ];
    }
}
