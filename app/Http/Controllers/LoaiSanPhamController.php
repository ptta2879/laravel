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
    public function addLoaiSanPham(Request $request)
    {
        $tenloai = $request->tenloai;
        $new = new LoaiSanPham();
        $new->tenloai = $tenloai;
        if($new->save()){
            return redirect('admin/LoaiSanPham')->with('themthanhcong','Thêm Thành Công');
        }else{
            return redirect('admin/LoaiSanPham')->with('themfail','Thêm Không Thành Công');
        }
    }
    public function deleteLoaiSanPham(Request $request)
    {
        $id = $request->id;
        $news = LoaiSanPham::find($id);
        if($news->delete()){
            echo 'thanhcong';
        }
        else{
            echo 'thatbai';
        }
    }
}
