<?php

namespace App\Http\Controllers;

use App\Http\Requests\LienHeRequest;
use App\LienHe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        
        return view('contact');
    }
    public function nhanLienHe(LienHeRequest $request)
    {
        # code...
        $ten = $request->get('fullname');
        $email = $request->get('email');
        $tieude = $request->get('tieude');
        $message = $request->get('message');
        $news = new LienHe();
        $news->tendaydu =  $ten;
        $news->email = $email;
        $news->tieude = $tieude;
        $news->tinnhan = $message;
        $news->trangthai = 0;
        if($news->save()){
            return redirect('LienHe')->with('success', 'Gửi Thông Tin Thành Công');
        }else{
            return redirect('LienHe')->with('fail', 'Gửi Thông Tin Không Thành Công');
        }
        
    }
}
