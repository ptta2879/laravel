<?php

namespace App\Http\Controllers;

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
        return view('admin/loaisanpham');
    }
    public function themLoaiSanPham()
    {
        # code...
        return view('admin/themloaisanpham');
    }
}
