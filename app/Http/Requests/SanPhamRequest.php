<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
            'tensp' => 'required|max:250',
            'gia' => 'required|numeric',
            'mota' => 'required',
            'nguongoc'=>'required',
            'gioithieu' => 'required',
            'soluong'=>'required|numeric',
            'hinhsanpham'=>'required|image',
            'idloai'=>'required'
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
            'tensp' => 'Tên Sản Phẩm',
            'gia' => 'Giá',
            'mota' =>'Mô tả',
            'nguongoc'=>'Nguồn Gốc',
            'gioithieu' =>'Giới Thiệu',
            'hinhsanpham'=>'Hình sản phẩm',
            'soluong'=>'Số lượng',
            'idloai'=>'Loại sản phẩm'
        ];
    }
}
