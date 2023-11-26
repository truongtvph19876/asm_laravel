<?php

namespace Modules\Brand\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    protected $table = 'brands';
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'brand_name' => ['required', "unique:$this->table", 'min:3'],
            'status' => 'required'
        ];
    }

    public function messages()
    {
        $required = "Trường này không được để trống";
        return [
            'brand_name.required' => $required,
            'brand_name.unique' => 'Thương hiệu đã tồn tại',
            'brand_name.min' => 'Tối thiểu 3 ký tự',
            'status.required' => $required,
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
