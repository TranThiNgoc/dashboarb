<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use App\sanpham;

class Pagecontroller extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }
   public function getLoaiSp(){
        $category=category::all();
   	return view('page.loai_sanpham',['category'=>$category]);
    }
    public function getlistsp(){
        $sanpham=sanpham::all();
        return view('page.List_Product',['sanpham'=>$sanpham]);
    }
   // public function getcategory(){
    //    $category=category::all();
     //   return view ('page.loai_sanpham',['category'=>$category]);
   // }

}
