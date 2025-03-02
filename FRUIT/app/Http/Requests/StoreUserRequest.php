<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:6|max:255',
            'phone' => 'required|regex:/^0[0-9]{9,10}$/', // Số điện thoại Việt Nam
            'email' => 'required|email|max:255',
            'address' => 'required|min:6|max:255',
            'username' => 'required|min:6|max:255',
        ];
    }

    /**
     * Get the custom error messages for validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Tên người dùng bắt buộc',
            'name.min' => 'Tên phải có ít nhất 6 ký tự',
            'name.max' => 'Tên không được vượt quá 255 ký tự',
            'phone.required' => 'Số điện thoại bắt buộc',
            'phone.regex' => 'Số điện thoại không hợp lệ. Số điện thoại phải bắt đầu bằng 0 và có từ 10 đến 11 chữ số',
            'email.required' => 'Email bắt buộc',
            'email.email' => 'Email không hợp lệ',
            'email.max' => 'Email không được vượt quá 255 ký tự',
            'address.required' => 'Địa chỉ bắt buộc',
            'address.min' => 'Địa chỉ phải có ít nhất 6 ký tự',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự',
            'username.required' => 'Tên đăng nhập bắt buộc',
            'username.min' => 'Tên đăng nhập phải có ít nhất 6 ký tự',
            'username.max' => 'Tên đăng nhập không được vượt quá 255 ký tự',
            'username.unique' => 'Tên đăng nhập đã tồn tại trong hệ thống',
        ];
    }
}
