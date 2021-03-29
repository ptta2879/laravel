<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    //
    protected $table ='kho';
    public $timestamps = false;
    public function sanPham()
    {
        return $this->hasOne('App\SanPham','idkho');
    }
    public function nhapKho()
    {
        return $this->hasMany('App\NhapKho','idkho');
    }
}
