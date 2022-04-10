<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|unique:users|unique:yets|min:2|max:10',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前は必須です',
            'name.unique' => '既に登録済みです',
            'name.max' => '10文字以内です',
            'name.min' => '2文字以上です',
        ];
    }
}
