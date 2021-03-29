<?php

namespace App\Http\Controllers;

use App\Kho;
use App\NhapKho;
use Illuminate\Http\Request;

class KhoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    { 
        $data = Kho::with('sanPham')->get();
        
        return view('admin/tonkho',['kho'=>$data]);
    }
    public function nhapKho()
    {
        $data = NhapKho::all();
        return view('admin/danhsachnhapkho',['nhapkho'=>$data]);
    }
    public function addKho(Request $request)
    {
        $id = $request->idloai;
        $new = Kho::find($id);
        $soluong = $request->soluong;
        $soluongcu = $new->soluong;
        $new->soluong = $soluong;
        if($new->save()){
            $nhapkho = new NhapKho();
            $nhapkho->idkho = $id;
            $nhapkho->soluong = $soluong - $soluongcu;
            $nhapkho->save();
            return redirect('admin/TonKho')->with('thanhcong','Nhập thêm số lượng thành công');
        }else{
            return redirect('admin/TonKho')->with('thatbai','Nhập thêm số lượng không thành công');
        }
    }
}
