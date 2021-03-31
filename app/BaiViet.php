<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    //
    protected $table ='baiviet';
    public $timestamps = false;
    public function taiKhoan()
    {   
        return $this->hasOne('App\TaiKhoan','id','idtk');
        # code...
    }
    public function thongTinThanhVien()
    {
        return $this->hasOne('App\ThongTinThanhVien','idtk','idtk');
    }
    public function links()
    {
        return $this->hasMany('App\Links');
    }
    public function tags()
    {
        Return $this->belongsToMany('App\Tags','links','id','id');
    }
}
