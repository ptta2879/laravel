<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    //
    protected $table ='links';
    public $timestamps = false;
    public function baiViet()
    {
        return $this->hasMany('App\BaiViet','id','idbaivet');
    }
    public function tags()
    {
        return $this->hasMany('App\Tags','id','idtags');
    }
}
