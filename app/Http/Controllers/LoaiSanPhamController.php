<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        $data = LoaiSanPham::all();
        return view('admin/loaisanpham',['loaisanpham'=>$data]);
    }
    public function themLoaiSanPham()
    {
        # code...
        return view('admin/themloaisanpham');
    }
    public function suaLoai(Request $request)
    {
        $id = $request->idloai;
        $tenloai = $request->tenloai;
        $news = LoaiSanPham::find($id);
        $news->tenloai = $tenloai;
        if($news->save()){
            return redirect('admin/LoaiSanPham')->with('suathanhcong','Sửa Thành Công');
        }
        else{
            return redirect('admin/LoaiSanPham')->with('suafail','Sửa Không Thành Công');
        }
    }
}
