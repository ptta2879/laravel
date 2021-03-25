<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    //
    protected $table ='giohang';
    public $timestamps = false;
    public function taiKhoan()
    {
        return $this->hasOne('App\TaiKhoan');
    }
    public function sanPham()
    {
        return $this->hasMany('App\SanPham','id');
    }
}
