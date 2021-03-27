<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        return view('admin/baiviet');
    }
    public function themBaiViet()
    {
        return view('admin/thembaiviet');
    }
}
