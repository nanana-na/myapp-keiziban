<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
            'question_id' => 'required|integer', 'question_item_id' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'question_id.required' => '不具合の場合はご連絡ください',
            'question_id.integer' => '不具合の場合はご連絡ください',
            'question_item_id.required' => '不具合の場合はご連絡ください',
            'question_item_id.integer' => '不具合の場合はご連絡ください',
        ];
    }
}
