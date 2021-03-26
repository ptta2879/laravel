<?php

namespace App\Http\Controllers;

use App\DonHang;
use App\GioHang;
use App\Http\Requests\ThanhToanRequest;
use App\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $idtk = Auth::user()->id;
        $datauser = TaiKhoan::find($idtk);
        $tonggia = DB::table('giohang')->where('idkh','=',Auth::user()->id)->sum('gia');
        
        return view('checkout',['datauser'=>$datauser,'tonggia'=>$tonggia]);
    }
    public function taoHoaDon(ThanhToanRequest $request)
    {
        # code...
        $fullname = $request->get('fullname');
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $diachi = $request->get('diachi');
        $kieuthanhtoan = $request->get('kieuthanhtoan');
        $tonggia = DB::table('giohang')->where('idkh','=',Auth::user()->id)->sum('gia');
        $news = new DonHang();
        $news->idkh = Auth::user()->id;
        $news->hovaten = $fullname;
        $news->ten = $name;
        $news->diachi = $diachi;
        $news->tonggia = $tonggia;
        $news->sdt = $phone;
        $news->loaithanhtoan =$kieuthanhtoan;
        $news->email =$email;
        $news->trangthai = 0;
        $news->trangthaigiaohang=0;
        if($news->save()){
            $iddonhang = $news->id;
            $datagiohang = GioHang::where('idkh',Auth::user()->id)->get();
            foreach($datagiohang as $val){
                $idsp = $val->idsp;
                $soluong = $val->soluong;
                $gia = $val->gia;
                DB::insert('insert into ct_donhang (iddonhang, idsp,gia,soluong) values (?, ?,?,?)', [$iddonhang, $idsp,$gia,$soluong]);
            }
           if(GioHang::where('idkh',Auth::user()->id)->delete()) {
               return redirect('Home')->with('thanhconghoadon','Tạo đơn hàng thành công');
           }
        }
    }
}
