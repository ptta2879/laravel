<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        return view('admin/sanpham');
    }
    public function themSanPham()
    {
        return view('admin/themsanpham');
    }
}
