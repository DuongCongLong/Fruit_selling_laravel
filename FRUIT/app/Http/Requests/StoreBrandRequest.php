<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
         'description' => 'required|min:6',
        ];
    }
    public function messages(): array
    {
        return [
         'name.required' => 'Tên thương hiệu bắt buộc',
         'name.min' => 'Tên ít nhất 6 ký tự',
         'description.required' => 'Mô tả thương hiệu bắt buộc',
         'description.min' => 'Mô tả thương hiệu phải có ít nhất 6 ký tự',
        ];
    }
}
