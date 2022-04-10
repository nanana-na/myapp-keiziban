<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FriendmessageRequest extends FormRequest
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
            'body' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return [
            'body.required' => '内容は必須です。',
            'body.max'      => '内容は40文字以内で記入してください。',
        ];
    }
}
