<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sanpham',function ( $table ){
            $table ->increments('id');
            $table -> string ('Ten');
            $table ->integer('id_MaLoai');
            $table ->integer(' DonGia');
            $table ->integer('SoLuong');
            $table ->String('HinhAnh');
            $table ->String('MieuTa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('sanpham');
    }
}
