<?php

namespace App\Http\Controllers;

use App\BaiViet;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        $id = $request->get('id');
        $dataBaiViet = BaiViet::find($id);
        $dataThanhVien = BaiViet::find($dataBaiViet->idtk)->thongTinThanhVien()->get();
        $dataTaiKhoan =BaiViet::find($dataBaiViet->idtk)->taiKhoan()->get();
        
        return view('blog-single',['thanhvien'=>$dataThanhVien,'baiviet'=>$dataBaiViet,'taikhoan'=>$dataTaiKhoan]);
    }
}
