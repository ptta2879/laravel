<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThanhToanRequest extends FormRequest
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
            'name' => 'required|max:250',
            'fullname' => 'required|max:250',
            'email' => 'required|email|max:255',
            'phone'=>'required|min:10|max:11',
            'diachi' => 'required|max:250',
            'kieuthanhtoan'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute Không để trống',
            'max'=>':attribute Không được dài hơn :max ký tự',
            'min'=>':attribute Phải dài hơn :min ký tự',
            'email'=>':attribute không đúng định dạng',
            
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên',
            'fullname' => 'Tên Đầy Đủ',
            'email' =>'Email',
            'phone'=>'Số Điện Thoại',
            'diachi' =>'Địa Chỉ',
            'kieuthanhtoan'=>'Kiểu Thanh Toán'
        ];
    }
}
