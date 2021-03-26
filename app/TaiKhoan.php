<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable 
{
    //
    use Notifiable;
    protected $table ='taikhoan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username','password', 'email','hovaten','ten','sdt','diachi' ,'phanquyen',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function baiViet()
    {
        return Model::hasMany('App\BaiViet','idtk');
    }
    public function donHang()
    {
        return Model::hasMany('App\DonHang','idkh');
    }
    public function gioHang()
    {
        return Model::hasOne('App\GioHang','idkh','id');
        
    }
}
