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
        return $this->hasOne('App\TaiKhoan','id');
        # code...
    }
    public function thongTinThanhVien()
    {
        return $this->hasOne('App\ThongTinThanhVien','idtk','idtk');
    }
    
}
