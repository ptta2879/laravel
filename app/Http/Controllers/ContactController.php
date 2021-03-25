<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        
        return view('contact');
    }
    public function nhanLienHe(Request $request)
    {
        # code...
        $ten = $request->get('fullname');
        $email = $request->get('email');
        $tieude = $request->get('tieude');
        $message = $request->get('message');
        
    }
}
