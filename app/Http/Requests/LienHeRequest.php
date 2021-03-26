<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LienHeRequest extends FormRequest
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
            'fullname'=>'required|max:250',
            'email' => 'required|email|max:255',
            'tieude'=> 'required|max:250',
            'message' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute Không để trống',
            'max'=>':attribute Quá Dài',
            'unique'=>':attribute Đã có người sử dụng',
            'email'=>':attribute không đúng định dạng',
        ];
    }
    public function attributes()
    {
        return [
            'fullname' => 'Tên Đầy Đủ',
            'email' =>'Email',
            'tieude' =>'Tiêu Đề',
            'message'=>'Tin Nhắn'
        ];
    }
}
