<?php

namespace App\Http\Controllers;

use App\SanPham;
use App\BaiViet;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = SanPham::with('loaisanpham')->paginate(12);
        $dataBaiViet = BaiViet::orderBy('id','DESC')->take(3)->get();
        
        return view('product',['sanpham'=>$data,'baiviet'=>$dataBaiViet]);
    }
}
