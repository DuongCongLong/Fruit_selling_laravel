<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
         'title' => 'required|min:6',
         'detail' => 'required|min:6',
         'description' => 'required|min:6',
        ];
    }
    public function messages(): array
    {
        return [
         'title.required' => 'Tên bài viết bắt buộc',
         'title.min' => 'Tên ít nhất 6 ký tự',
         'detail.required' => 'Chi tiết bài viết bắt buộc',
         'detail.min' => 'Chi tiết bài viết phải có ít nhất 6 ký tự',
         'description.required' => 'Mô tả bài viết bắt buộc',
         'description.min' => 'Mô tả bài viết phải có ít nhất 6 ký tự',
        ];
    }
}
