<?php

namespace App\Http\Controllers;

use App\BaiViet;
use App\Http\Requests\ThemBaiVietRequest;
use App\Links;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        return view('admin/suabaiviet',['thongtinbaiviet'=>$data]);
    }
    public function suaBaiViet(Request $request)
    {
        $id = $request->id;
        $tieude = $request->tieude;
        $noidung= $request->noidung;
        $tags = $request->tags;
        $tomtat = $request->tomtat;
        DB::delete('delete from links where idbaiviet = ?', [$id]);
        $news = BaiViet::find($id);
        if($request->hasFile('hinhbaiviet')){
            $hinh = $request->hinhbaiviet;
            $newname = 'baivietnew-'.$id.'.jpg';
            $news->tieude= $tieude;
            $news->noidung= $noidung;
            $news->tomtat = $tomtat;
            $news->tags = $tags;
            if($news->save()){
                $arrTag = explode(",",$tags);
                foreach($arrTag as $tag){
                $tag = trim($tag);
                $result = Tags::where('name',$tag)->count();
                if($result > 0){
                    $data = Tags::where('name',$tag)->first();
                    $idtags = $data->id;
                }else{
                    $tableTag = new Tags();
                    $tableTag->name = $tag;
                    $tableTag->save();
                    $idtags = $tableTag->id;
                }
                $link = new Links();
                $link->idbaiviet = $id;
                $link->idtags = $idtags;
                $link->save();
                }
 
                if($hinh->move('images',$newname)){
                    return redirect('admin/BaiViet')->with('suathanhcong','Sửa bài viết thành công');
                }else{
                    return redirect('admin/BaiViet')->with('file','hình up không thành công');
                }
            }
        }else{
            $id = $request->id;
            $tieude = $request->tieude;
            $noidung= $request->noidung;
            $news->tomtat = $tomtat;
            $tags = $request->tags;
            DB::delete('delete from links where idbaiviet = ?', [$id]);
            $news = BaiViet::find($id);
            $news->tieude= $tieude;
            $news->noidung= $noidung;
            $news->tags = $tags;
            if($news->save()){
                $arrTag = explode(",",$tags);
                foreach($arrTag as $tag){
                $tag = trim($tag);
                $result = Tags::where('name',$tag)->count();
                if($result > 0){
                    $data = Tags::where('name',$tag)->first();
                    $idtags = $data->id;
                }else{
                    $tableTag = new Tags();
                    $tableTag->name = $tag;
                    $tableTag->save();
                    $idtags = $tableTag->id;
                }
                $link = new Links();
                $link->idbaiviet = $id;
                $link->idtags = $idtags;
                $link->save();
                }
                    return redirect('admin/BaiViet')->with('suathanhcong','Sửa bài viết thành công');
            }
        }
    }
    public function addBaiViet(ThemBaiVietRequest $request)
    {
        $idtk = Auth::user()->id;
        $tieude = $request->tieude;
        $noidung= $request->noidung;
        $tomtat = $request->tomtat;
        $hinhbaiviet = $request->hinhbaiviet;
        $tags = $request->tags;
        $news = new BaiViet();
        $news->idtk = $idtk;
        $news->tieude = $tieude;
        $news->noidung = $noidung;
        $news->tomtat = $tomtat;
        $news->tags = $tags;
        if($news->save()){
            $idbaiviet = $news->id;
            $arrTag = explode(",",$tags);
            foreach($arrTag as $tag){
                $tag = trim($tag);
                $result = Tags::where('name',$tag)->count();
                if($result > 0){
                    $data = Tags::where('name',$tag)->first();
                    $idtags = $data->id;
                }else{
                    $tableTag = new Tags();
                    $tableTag->name = $tag;
                    $tableTag->save();
                    $idtags = $tableTag->id;
                }
                $link = new Links();
                $link->idbaiviet = $idbaiviet;
                $link->idtags = $idtags;
                $link->save();
            }
            $tenmoi = 'baivietnew-'.$idbaiviet.'.jpg';
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
