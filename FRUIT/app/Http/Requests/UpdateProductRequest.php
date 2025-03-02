<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'detail' => 'required|min:6',
            'description' => 'required|min:6',
            'price' => 'required|numeric|min:1',
            'pricesale' => 'required|numeric|min:1',
            'qty' => 'required|numeric|min:1',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên sản phẩm bắt buộc',
            'name.min' => 'Tên sản phẩm phải có ít nhất 6 ký tự',
            'detail.required' => 'Chi tiết sản phẩm bắt buộc',
            'detail.min' => 'Chi tiết sản phẩm phải có ít nhất 6 ký tự',
            'description.required' => 'Mô tả sản phẩm bắt buộc',
            'description.min' => 'Mô tả sản phẩm phải có ít nhất 6 ký tự',
            'price.required' => 'Giá sản phẩm bắt buộc',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'price.min' => 'Giá sản phẩm phải lớn hơn 0',
            'pricesale.required' => 'Giá khuyến mãi bắt buộc',
            'pricesale.numeric' => 'Giá khuyến mãi phải là số',
            'pricesale.min' => 'Giá khuyến mãi phải lớn hơn 0',
            'qty.required' => 'Số lượng sản phẩm bắt buộc',
            'qty.numeric' => 'Số lượng sản phẩm phải là số',
            'qty.min' => 'Số lượng sản phẩm phải lớn hơn 0',
        ];
    }
}
