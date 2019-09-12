<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use DB;
class sanpham extends Model
{
    //
    protected $table = "sanpham";
    public $timestamps=false;
    public function category(){
        return $this->belongsTo('App\category','id_MaLoai','id');
    }
}
