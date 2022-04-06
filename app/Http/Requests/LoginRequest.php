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
            'username' => 'required|string|max:32|min:8',
            'password' => 'required|max:32|min:8'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui lòng điền username!!!',
            'username.max' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'username.min' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'password.required' => 'Vui lòng điền password!!!',
            'password.max' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'password.min' => 'độ dài không hợp lệ(từ 8-32 kí tự)'
        ];
    }
}
