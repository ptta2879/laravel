<?php

namespace App\Http\Controllers;

use App\BaiViet;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $data = BaiViet::orderBy('id','DESC')->paginate(20);
        return view('blog',['baiviet'=>$data]);
    }
}
