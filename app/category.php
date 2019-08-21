<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = "category";
    public $timestamps=false;
    public function sanpham(){
        return $this->hasMany('App\sanpham','id_MaLoai','id');
    }
}
