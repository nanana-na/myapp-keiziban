<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YetRequest extends FormRequest
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
            'image' => 'required|file|max:1600|mimes:jpeg,png,jpeg', 'number' => 'required|integer|unique:users|between:16000000,22000000', 'password' => 'required|confirmed|max:30', 'password_confirmation' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'number.required' => '学籍番号は必須です',
            'number.unique' => '既に登録済みです',
            'number.between' => '学籍番号が違います',
            'number.max' => '10文字以内です',
            'password.required' => 'パスワードは必須です',
            'password.confirmed' => 'パスワードが一致しません',
            'password.max' => 'パスワードは30文字以内にしてください',
            'password_confirmation' => 'パスワードは必須です',
            'image.max' => '1.6MBを超えるファイルは添付できません。',
            'image.mimes' => '指定のファイル形式以外は添付できません。',
        ];
    }
}
