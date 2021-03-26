<?php

namespace App\Http\Controllers;

use App\DonHang;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductBuyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $datadonhang = DonHang::with('ctDonHang')->where('idkh',Auth::user()->id)->get();
        
        return view('productbuy',['donhang'=>$datadonhang]);

    }
    public function donHangDaMua(Request $request)
    {
        $id = $request->idsp;
        $datasp = SanPham::find($id);
        echo $datasp->tensp;
    }
}
