<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonHangController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('loginadmin');
    }
    public function index()
    {
        return view('admin/donhang');
    }
}