<?php

namespace App\Http\Controllers;

use App\BaiViet;
use App\Http\Requests\ThemBaiVietRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BaiVietController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        $data = BaiViet::with('taiKhoan')->orderBy('id','DESC')->get();
        return view('admin/baiviet',['baiviet'=>$data]);
    }
    public function themBaiViet()
    {
        return view('admin/thembaiviet');
    }
    public function suaBaiVietView(Request $request)
    {
        $id = $request->id;
        $data = BaiViet::find($id);
        return view('admin\suabaiviet',['thongtinbaiviet'=>$data]);
    }
    public function suaBaiViet(Request $request)
    {
        $id = $request->id;
        $tieude = $request->tieude;
        $noidung= $request->noidung;
        $news = BaiViet::find($id);
        if($request->hasFile('hinhbaiviet')){
            $hinh = $request->hinhbaiviet;
            $newname = 'baiviet-'.$id.'.jpg';
            $news->tieude= $tieude;
            $news->noidung= $noidung;
            if($news->save()){
                if($hinh->move('images',$newname)){
                    return redirect('admin/BaiViet')->with('suathanhcong','Sửa bài viết thành công');
                }else{
                    return redirect('admin/BaiViet')->with('file','hình up không thành công');
                }
            }
        }else{
            return redirect('admin/BaiViet')->with('fail','Sửa không thành công');
        }
    }
    public function addBaiViet(ThemBaiVietRequest $request)
    {
        $idtk = Auth::user()->id;
        $tieude = $request->tieude;
        $noidung= $request->noidung;
        $hinhbaiviet = $request->hinhbaiviet;
        $news = new BaiViet();
        $news->idtk = $idtk;
        $news->tieude = $tieude;
        $news->noidung = $noidung;
        if($news->save()){
            $idbaiviet = $news->id;
            $tenmoi = 'baiviet-'.$idbaiviet.'.jpg';
            if($hinhbaiviet->move('images',$tenmoi)){
                return redirect('admin/BaiViet')->with('success','Thêm bài viết thành công');
            }else{
                return redirect('admin/BaiViet')->with('file','Hình up không thành công');
            }
        }else{
            return redirect('admin/BaiViet')->with('sanphamfail','Bài viết không thêm được');
        }
    }
}
