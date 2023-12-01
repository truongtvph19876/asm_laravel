<?php

namespace Modules\Order\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'recipient_name' => [
                'required',
                'min:2'
            ],
            'recipient_phone' => [
                'required',
                'regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/'
            ],
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'detail_address' => 'required',
            'product_id' => 'required',
        ];
    }

    public function messages()
    {
        $required = "Trường này không được để trống";
        return [
            'recipient_name' => [
                'required' => $required,
                'min' => 'Tối thiểu 2 ký tự'
            ],
            'recipient_phone' => [
                'required' => $required,
                'regex' => 'Số điện thoại không hợp lệ',
            ],
            'city' => $required,
            'district' => $required,
            'ward' => $required,
            'detail-address' => $required,
            'product_id' => $required,
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
