<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IventRequest extends FormRequest
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
            'title' => 'required|max:30', 'group' => 'required|max:30', 'body' => 'required|max:100', 'place'  => 'required|max:30', 'time' => 'required|max:30', 'monney' => 'max:30', 'day' => 'required|max:20',
        ];
    }
    public function messages()
    {
        return [
            'company.required' => '会社名は必須です。',
            'money.required' => '時給は必須です。',
            'place.required' => '場所は必須です。',
            'work_content.required' => '仕事内容は必須です。',
            'apply.required' => '応募方法は必須です。',
            'period.required' => '募集期間は必須です。',
            'company.max'      => '会社名は30文字以内で記入してください。',
            'image.max' => '2.5MBを超えるファイルは添付できません。',
            'image.mimes' => '指定のファイル形式以外は添付できません。',
        ];
    }
}
