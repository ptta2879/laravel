<?php

namespace App\Http\Controllers;

use App\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //
    public function index()
    {
       
        
            $data = BaiViet::orderBy('id','DESC')->paginate(10);
        
        
        return view('blog',['baiviet'=>$data]);
    }
    public function tag($tag)
    {
        if(isset($tag)){
            $name = urldecode($tag) ;
            
            $data = DB::table('baiviet')
                    ->join('links', 'baiviet.id', '=', 'links.idbaiviet')
                    ->join('tags','tags.id','=','links.idtags')
                    ->select('baiviet.*')->where('tags.name','=',$name)->distinct()->paginate(10);
        }
        return view('blogtag',['baiviet'=>$data]);
    }
}
