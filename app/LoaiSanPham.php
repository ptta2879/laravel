<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    //
    protected $table ='loaisanpham';
    public $timestamps = false;
    public function sanPham()
    {
        return $this->hasMany('App\SanPham','idsp');
    }
}
