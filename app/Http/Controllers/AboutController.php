<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $dataLoaiSanPham = LoaiSanPham::all();

        return view('about',['loaisanpham'=>$dataLoaiSanPham]);
    }
}
