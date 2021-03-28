<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemBaiVietRequest extends FormRequest
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
            //
            'tieude' => 'required',
            'noidung' => 'required',
            'hinhbaiviet' => 'required|image',
            
        ];
    }
    public function messages()
    {
        return [
            'max'=>':attribute Quá Dài',
            'required'=>':attribute Không để trống',
            'numeric'=>':attribute Phải là số',
            'image'=>':attribute Phải là hình'
        ];
    }
    public function attributes()
    {
        return [
            'tieude' => 'Tiêu Đề',
            'noidung' => 'Nội Dung',
            'hinhbaiviet' =>'Mô tả',
        ];
    }
}
