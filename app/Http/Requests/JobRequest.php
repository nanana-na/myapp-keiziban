<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'image' => 'file|max:2500|mimes:jpeg,png,jpeg', 'company' => 'required|max:30', 'money' => 'required|max:100', 'place'  => 'required|max:30', 'work_content'  => 'required', 'feature', 'call', 'apply'  => 'required', 'period' => 'required',
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
