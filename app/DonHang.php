<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    //
    protected $table ='donhang';
    public $timestamps = false;
    public function ctDonHang()
    {
        # code...
        return $this->belongsTo('App/Ct_DonHang','iddonhang');
    }
    public function taiKhoan()
    {
        # code...
        return $this->hasOne('App/TaiKhoan','idkh');
    }
}
