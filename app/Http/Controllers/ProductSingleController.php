<?php

namespace App\Http\Controllers;

use App\SanPham;
use Illuminate\Http\Request;

class ProductSingleController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        $id = $request->get('id');
        $data = SanPham::find($id);
        $datasoluong = SanPham::find($id)->kho()->get();
        
        return view('product-single',['sanpham'=>$data,'soluong'=>$datasoluong]);
    }
}
