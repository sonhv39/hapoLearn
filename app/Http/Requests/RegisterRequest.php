<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|unique:users|string|max:32|min:6',
            'password' => 'required|max:32|min:6',
            'email' => 'email|unique:users|required',
            'confirm_password' => 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui lòng điền username!!!',
            'username.max' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'username.min' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'username.unique' => 'username đã tồn tại',
            'password.required' => 'Vui lòng điền password!!!',
            'password.max' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'password.min' => 'độ dài không hợp lệ(từ 8-32 kí tự)',
            'confirm_password.same' => 'mật khẩu không khớp',
            'email.email' => 'sai định dạng email',
            'email.unique' => 'password đã tồn tại'
        ];
    }
}
