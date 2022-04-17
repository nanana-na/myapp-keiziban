<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public function rules()
    {
        return [
            'image' => 'file|max:1600|mimes:jpeg,png,jpeg', 'group' => 'required|max:20', 'place' => 'max:30', 'date' => 'max:30', 'body'  => 'max:200', 'number' => 'exists:users,number', 'icon'
        ];
    }
    public function messages()
    {
        return [
            'group.required' => '団体名は必須です。',
            'date.required' => '曜日は必須です。',
            'time.required' => '時間は必須です。',
            'place.required' => '場所は必須です。',
            'number.required' => '学籍番号は必須です。',
            'number.exists' => '学籍番号が存在しません',
            'group.max'      => '団体名は20文字以内で記入してください。',
            'place.max'      => '場所は30文字以内で記入してください。',
            'date.max'      => '曜日は30文字以内で記入してください。',
            'body.max'      => '活動内容は200文字以内で記入してください。',
            'body.required'  => '内容は必須です。',
            'image.max' => '1.6MBを超えるファイルは添付できません。',
            'image.mimes' => '指定のファイル形式以外は添付できません。',
        ];
    }
}
