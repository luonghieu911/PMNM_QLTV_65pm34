<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDanhMucRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'TenDM' => 'required',
            'MaDM' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'TenDM.required' => 'Tên danh mục không được để trống',
            'MaDM.required' => 'Mã danh mục không được để trống',
        ];
    }
}
