<?php

namespace App\Http\Controllers;

use App\LienHe;
use Illuminate\Http\Request;

class LienHeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        $data = LienHe::all();
        return view('admin/lienhe',['lienhe'=>$data]);
    }
    public function trangThai(Request $request)
    {
        
        $id = $request->id;
        $trangthai=$request->giatri;
        $new = LienHe::find($id);
        $new->trangthai= $trangthai; 
        if($new->save()){
            echo 'success';
        }else{
            echo 'false';
        }
    }
}
