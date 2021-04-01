<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin/login');
    }
    public function loginAdmin(Request $request)
    {
        $data = [
            'username'=>$request->username,
            'password' => $request->password,
            'phanquyen'=>1,
        ];
        if(Auth::attempt($data)){
            return redirect('/admin/Home');
        }else{
            return redirect('/admin/login')->with('faillogin','Đăng nhập không thành công');
        }
    }
}
