<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreeRequest extends FormRequest
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
            'title' => 'required|max:40', 'number' => 'required|integer|max:100'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'title.max'      => '内容は40文字以内で記入してください。',
            'number.required' => '学籍番号は必須です。',
        ];
    }
}
