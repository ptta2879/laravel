<?php

namespace App\Http\Controllers;

use App\DonHang;
use App\SanPham;
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
        $data  = DonHang::with('taiKhoan','ctDonHang')->orderBy('id','DESC')->get();
        
        return view('admin/donhang',['donhang'=>$data]);
    }
    public function ctDonHang(Request $request)
    {
        $idsp = $request->idsp;
        $datasp = SanPham::find($idsp);
        echo $datasp->tensp;
    }
    public function thayDoiTrangThai(Request $request)
    {
        $id = $request->id;
        $trangthai= $request->trangthai;
        $new = DonHang::find($id);
        $new->trangthai = $trangthai;
        if($new->save()){
            echo 'success'; 
        }else{
            echo 'false';
        }
    }
}
