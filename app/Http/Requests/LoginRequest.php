<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lusername' => 'required|string|max:32|min:6',
            'lpassword' => 'required|max:32|min:6'
        ];
    }

    public function messages()
    {
        return [
            'lusername.required' => 'Vui lòng điền username!!!',
            'lusername.max' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'lusername.min' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'lpassword.required' => 'Vui lòng điền password!!!',
            'lpassword.max' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'lpassword.min' => 'độ dài không hợp lệ(từ 8-32 kí tự)'
        ];
    }
}
