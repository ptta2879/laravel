<?php

namespace App\Http\Controllers;

use App\GioHang;
use App\SanPham;
use App\Kho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        # code...
        $data = GioHang::with('sanpham')->get();
        $tonggia = DB::table('giohang')->where('idkh','=',Auth::user()->id)->sum('gia');
        
        return view('cart',['giohang'=>$data,'tonggia'=>$tonggia]);
    }
    public function cartAjax()
    {
        $idkh = Auth::user()->id;
        $data = GioHang::with('sanpham')->where('idkh',$idkh)->get();
        $output ='';
        foreach($data as  $val){
            $output .= '<div class="dropdown-item d-flex align-items-start" href="#"><div class="img" style="background-image: url(images/prod-'. $val->idsp .'.jpg);"></div>';
            foreach($val->sanpham as $vall){
                $output .= '<div class="text pl-3">
                            <h4> '. $vall->tensp .'</h4>';
            }
            $output .= '<p class="mb-0"><a href="#" class="price">'.$val->gia.'</a><span class="quantity ml-3">Số Lượng: '. $val->soluong .'</span></p></div></div>';
        }
        echo $output;
    }
    public function themSanPham(Request $request)
    {
        $idsp = $request->get('id');
        $checkSanPham = GioHang::where('idsp',$idsp)->count();
        $gia = SanPham::find($idsp)->gia;
        $datasoluong =SanPham::find($idsp)->kho()->get();
        $soluong =$datasoluong[0]->soluong;
        $idkho = $datasoluong[0]->id;
        $soluongnew=$soluong-1;
        $return = 0;
        if($checkSanPham !=0 ){
            $return = 1;
        }elseif($soluong > 0){
            $news = new GioHang();
            $news->idkh = Auth::user()->id;
            $news->idsp = $idsp;
            $news->soluong = 1;
            $news->gia = $gia;
            $news->save();
            $khoNews = Kho::find($idkho);
            $khoNews->soluong = $soluongnew;
            $khoNews->save();

        }else{
            $return =  2;
        }
        
        echo $return;
    }
    public function themSanPhamChiTiet(Request $request)
    {   
        # code...
        $idsp = $request->get('id');
        $soluongGet = $request->get('soluong');
        $checkSanPham = GioHang::where('idsp',$idsp)->count();
        $gia = SanPham::find($idsp)->gia;
        $datasoluong =SanPham::find($idsp)->kho()->get();
        $soluong =$datasoluong[0]->soluong;
        $idkho = $datasoluong[0]->id;
        $soluongnew=$soluong-$soluongGet;
        $return = 0;
        if($checkSanPham !=0 ){
            $return = 1;
        }elseif($soluong > 0){
            if($soluongGet < $soluong){
                $news = new GioHang();
                $news->idkh = Auth::user()->id;
                $news->idsp = $idsp;
                $news->soluong = $soluongGet;
                $news->gia = $gia * $soluongGet;
                $news->save();
                $khoNews = Kho::find($idkho);
                $khoNews->soluong = $soluongnew;
                $khoNews->save();
            }else{
                $return = 3;
            }
            

        }else{
            $return =  2;
        }
        
        echo $return;
    }
    public function xoaGioHang(Request $request)
    {
        # code...
        $id = $request->get('id');
       
        $news = GioHang::find($id);
        $news->delete();
    }
    public function tinhTien(Request $request)
    {
        $id= $request->get('id');
        $soluong= $request->get('soluong');
        $gia = SanPham::find(GioHang::find($id)->idsp)->gia;
        $news = GioHang::find($id);
        $news->soluong = $soluong;
        $news->gia = $gia * $soluong;
        $news->save();
    }
}
