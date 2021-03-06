<?php

namespace App\Http\Controllers;

use App\BaiViet;
use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SanPham::with('loaiSanPham')->where('trangthai','=',0)->paginate(8);
        $dataloai = LoaiSanPham::all();
        $databaiviet = BaiViet::orderBy('id','DESC')->paginate(4);
        
        return view('index',['sanpham' => $data,'loaisanpham1'=>$dataloai,'baiviet'=>$databaiviet]);
    }
}
