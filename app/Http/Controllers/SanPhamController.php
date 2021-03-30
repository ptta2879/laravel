<?php

namespace App\Http\Controllers;

use App\Http\Requests\SanPhamRequest;
use App\Kho;
use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Support\Facades\File;
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
        $datasp = SanPham::with('loaiSanPham')->where('trangthai','=',0)->get();
        $dataloaisanpham = LoaiSanPham::where('trangthai','=',0)->get();
        return view('admin/sanpham',['sanpham'=>$datasp,'loaisanpham'=>$dataloaisanpham]);
    }
    public function themSanPham()
    {
        return view('admin/themsanpham');
    }
    public function sua(Request $request)
    {
        $id = $request->id;
        $datasp = SanPham::find($id);
        $dataloai = LoaiSanPham::all();
        return view('admin/suasanpham',['sanpham'=>$datasp,'loaisanpham'=>$dataloai]);
    }
    public function suaThongTin(Request $request)
    {
        $id = $request->id;
        $idloai= $request->idloai;
        $tensp = $request->tensp;
        $gia = $request->gia;
        $mota = $request->mota;
        $nguongoc = $request->nguongoc;
        $gioithieu = $request->gioithieu;
        $news = SanPham::find($id);
        if($request->hasFile('hinhsanpham')){
           $hinh = $request->hinhsanpham;
           $newname = 'sanphamnew-'.$id.'.jpg';
           $news->tensp= $tensp;
           $news->gia= $gia;
           $news->mota= $mota;
           $news->nguongoc= $nguongoc;
           $news->gioithieu= $gioithieu;
           $news->idloai= $idloai;
           if($news->save()){
                if($hinh->move('images',$newname)){
                    return redirect('admin/SanPham')->with('suathanhcong','Sửa sản phẩm thành công');
                }else{
                    return redirect('admin/SanPham')->with('file','hình up không thành công');
                }
                
            }
            else{
                return redirect('admin/SanPham')->with('fail','Sửa sản phẩm không thành công');
            }

        }else{
            $news->idloai= $idloai;
            $news->tensp= $tensp;
            $news->gia= $gia;
            $news->mota= $mota;
            $news->nguongoc= $nguongoc;
            $news->gioithieu= $gioithieu;
            if($news->save()){
                return redirect('admin/SanPham')->with('suathanhcong','Sửa sản phẩm thành công');
            }
            else{
                return redirect('admin/SanPham')->with('fail','Sửa sản phẩm không thành công');
            }
        } 
    }
    public function addSanPham(SanPhamRequest $request)
    {
        $idloai= $request->idloai;
        $tensp = $request->tensp;
        $gia = $request->gia;
        $mota = $request->mota;
        $nguongoc = $request->nguongoc;
        $gioithieu = $request->gioithieu;
        $soluong = $request->soluong;
        $hinh = $request->hinhsanpham;
        $news = new Kho();
        $news->soluong = $soluong;
        if($news->save()){
            $idkho=$news->id;
            $newsanpham = new SanPham();
            $newsanpham->idkho = $idkho;
            $newsanpham->idloai= $idloai;
            $newsanpham->tensp= $tensp;
            $newsanpham->gia= $gia;
            $newsanpham->mota= $mota;
            $newsanpham->nguongoc= $nguongoc;
            $newsanpham->gioithieu= $gioithieu;
            if($newsanpham->save()){
               $idsp = $newsanpham->id;
               $tenmoi = 'sanphamnew-'.$idsp.'.jpg';
               if($hinh->move('images',$tenmoi)){
                return redirect('admin/SanPham')->with('success','Thêm sản phẩm thành công');
               }else{
                return redirect('admin/SanPham')->with('file','Hình up không thành công');
               }
            }else{
                return redirect('admin/SanPham')->with('sanphamfail','Sản phẩm không thêm được');
            }
        }else{
            return redirect('admin/SanPham')->with('khofail','Tạo kho thất bại');
        }
    }
    public function deleteSanPham(Request $request)
    {
        # code...
        $id = $request->id;
        $news = SanPham::find($id);
        $news->trangthai = 1;
        if($news->save()){
            $namefile = 'images\sanphamnew-'.$id.'.jpg';
            if(File::delete($namefile)){
                echo 'thanhcong';
            }else{
                echo 'hinhfail';
            }
        }
        else{
            echo 'thatbai';
        }
    }
}
