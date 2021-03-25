<?php

namespace App\Http\Controllers\Auth;


use Validator;
use App\Http\Controllers\Controller;
use App\TaiKhoan;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/Home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:250',
            'fullname' => 'required|max:250',
            'email' => 'required|email|max:255|unique:taikhoan',
            'password' => 'required|min:6|confirmed',
            'phone'=>'required|min:10|max:11',
            'diachi' => 'required|max:250'
        ],
        [
            'required'=>':attribute Không để trống',
            'max'=>':attribute Không được dài hơn :max ký tự',
            'min'=>':attribute Phải dài hơn :min ký tự',
            'unique'=>':attribute Đã có người sử dụng',
            'email'=>':attribute không đúng định dạng',
            'confirmed' => ':attribute Không trùng Khớp'
        ],
        [
            'name' => 'Tên',
            'fullname' => 'Tên Đầy Đủ',
            'email' =>'Email',
            'password' =>'Mật Khẩu',
            'phone'=>'Số Điện Thoại',
            'diachi' =>'Địa Chỉ'
        ]
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return TaiKhoan::create([
            'ten' => $data['name'],
            'hovaten' => $data['fullname'],
            'email' =>$data['email'],
            'username' => $data['email'],
            'password' => bcrypt($data['password']),
            'sdt' => $data['phone'],
            'diachi' => $data['diachi'],
            'phanquyen' => 0,
        ]);
    }
}
