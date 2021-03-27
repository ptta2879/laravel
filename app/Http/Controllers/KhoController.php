<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        return view('admin/tonkho');
    }
    public function nhapKho()
    {
        return view('admin/danhsachnhapkho');
    }
}
