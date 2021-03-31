<?php

namespace App\Http\Controllers;

use App\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogSingleController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        $id =  $request->get('id');
        $dataBaiViet = BaiViet::find($id);
        $dataThanhVien = BaiViet::find($dataBaiViet->idtk)->thongTinThanhVien()->get();
        $dataTaiKhoan =BaiViet::find($dataBaiViet->idtk)->taiKhoan()->get();
        $dataBaiVietRecent = BaiViet::orderBy('id','DESC')->take(3)->get();
        $tags = $dataBaiViet->tags;
        $arrTags = explode(",",$tags); 
        foreach($arrTags as $tag){
            $tag = trim($tag);
            $data = DB::select('select id from tags where name = ?', [$tag]);
            foreach($data as $a){
                $dataview[] = $a->id;
            }
            
        }
        
        $datavew = array_unique($dataview);
        foreach($datavew as $val){
            $datalink = DB::select('select idbaiviet from links where idtags = ? and idbaiviet != ?', [$val,$id]);
            foreach($datalink as $b){
                $idbaiviet[] = $b->idbaiviet;
            }
        }
        $idbaiviet= array_unique($idbaiviet);
        // $idbaivietkhong = implode(",",$idbaiviet);
        $databaivietlienquan = DB::table('baiviet')->whereIn('id',$idbaiviet)->get();
        // printf($idbaivietkhong);
       
        // print_r($databaivietlienquan);
        return view('blog-single',['thanhvien'=>$dataThanhVien,'baiviet'=>$dataBaiViet,'taikhoan'=>$dataTaiKhoan,'baivietmoi'=>$dataBaiVietRecent,'baivietlienquan'=>$databaivietlienquan]);
    }
}
