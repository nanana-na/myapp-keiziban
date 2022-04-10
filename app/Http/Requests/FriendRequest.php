<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FriendRequest extends FormRequest
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
            'body' => 'required|min:3|max:30',
        ];
    }
    public function messages()
    {
        return [
            'body.required' => '内容は必須です。',
            'body.max'      => '内内容は30文字以内で記入してください。',
            'body.min'      => '内容は3文字以上で記入してください。',
        ];
    }
}
