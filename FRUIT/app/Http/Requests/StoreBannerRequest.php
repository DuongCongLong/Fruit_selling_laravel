<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
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
         'name' => 'required|min:6',
         'link' => 'required|min:3'
        ];
    }
    public function messages(): array
    {
        return [
         'name.required' => 'Tên banner bắt buộc',
         'name.min' => 'Tên ít nhất 6 ký tự',
         'link.required' => 'Tên liên kết bắt buộc',
         'link.min' => 'Tên ít nhất 3 ký tự'
        ];
    }
}
