<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AskRequest extends FormRequest
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
            'friend_id' => 'required|integer', 'user_id' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'friend_id.required' => '不具合の場合はご連絡ください',
            'friend_id.integer' => '不具合の場合はご連絡ください',
            'user_id.required' => '不具合の場合はご連絡ください',
            'user_id.integer' => '不具合の場合はご連絡ください',
        ];
    }
}
