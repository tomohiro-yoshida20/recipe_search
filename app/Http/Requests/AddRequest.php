<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            //
            'category' => 'required',
            'day' => 'required|min:1',
            'money' => 'required|min:1'
        ];
    }

    public function attributes()
    {
        return [
            'category' => 'カテゴリー',
            'day' => '日付',
            'money' => '金額',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute は必須です。',
        ];
    }
}
