<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'product_name' => ['required', 'min:5', 'max:100'],
            'brand_id' => 'required',
            'status' => ['required'],
            'product_price' => ['required', 'numeric', 'min:1'],
            'product_quantity' => ['required', 'numeric', 'min:0'],
            'product_image' => ['required', 'mimes:jpeg,jpg,png,gif', 'max:2048'],
        ];
    }

    public function messages()
    {
        $required = "Trường này không được để trống";
        return [
            'product_name' => [
                'required' => $required,
                'min' => 'Tối thiểu 5 ký tự',
                'max' => 'Tối đa 100 ký tự'
            ],
            'brand_id' => $required,
            'status' => $required,
            'product_price' => [
                'required' => $required,
                'numeric' => 'Vui lòng nhập số',
                'min' => 'Giá tối thiểu là 1',
            ],
            'product_quantity' => [
                'required' => $required,
                'numeric' => 'Vui lòng nhập số',
                'min' => 'Số lượng tối thiểu là 0',
            ],
            'product_image' => [
                'required' => $required,
                'mimes' => 'Định dạng ảnh hợp lệ là: jpeg,jpg,png,gif',
                'max' => 'Dung lượng ảnh tối đa là 2MB',
            ]
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
