<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ct_DonHang extends Model
{
    //
    protected $table ='ct_donhang';
    public $timestamps = false;
    public function sanPham()
    {
        return $this->hasMany('App\SanPham','id','idsp');
    }
    public function donHang()
    {
        return $this->hasOne('App\DonHang','id','iddonhang');
    }
}
