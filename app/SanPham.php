<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table ='sanpham';
    public $timestamps = false;
    public function ctDonHang()
    {
        return $this->belongsTo('App\Ct_DonHang','idsp');
    }
    public function gioHang()
    {
        return $this->belongsTo('App\GioHang','idsp');
    }
    public function loaiSanPham()
    {
        return $this->hasOne('App\LoaiSanPham','id','idloai');
    }
    public function kho()
    {
        return $this->hasOne('App\Kho','id','idkho');
    }
}
