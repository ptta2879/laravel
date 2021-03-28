<?php

namespace App\Http\Controllers;

use App\DonHang;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        $data  = DonHang::with('taikhoan')->orderBy('id','DESC')->get();
        printf($data);
        return view('admin/donhang',['donhang'=>$data]);
    }
}
