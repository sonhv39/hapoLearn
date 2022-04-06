<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return false;
//    }

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
            'username.required' => 'username bắt buộc phải điền!!!',
            'username.max' or 'username.min' => 'username bắt buộc phải có độ dài từ 8 đến 32 kí tự!!!',
            'password.required' => 'password bắt buộc phải điền!!!',
            'password.max' or 'password.min' => 'password bắt buộc phải có độ dài từ 8 đến 32 kí tự!!!',
        ];
    }
}
