<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThanhToanRequest;
use App\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $idtk = Auth::user()->id;
        $datauser = TaiKhoan::find($idtk);
        $tonggia = DB::table('giohang')->where('idkh','=',Auth::user()->id)->sum('gia');
        printf($tonggia);
        return view('checkout',['datauser'=>$datauser,'tonggia'=>$tonggia]);
    }
    public function taoHoaDon(ThanhToanRequest $request)
    {
        # code...

    }
}
