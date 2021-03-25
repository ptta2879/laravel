<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhapKho extends Model
{
    //
    protected $table ='nhapkho';
    public $timestamps = false;
    public function kho()
    {
        return $this->hasOne('App\kho','idkho');
    }
}
