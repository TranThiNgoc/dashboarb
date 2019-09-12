<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use App\sanpham;
use DB;
use Cart;
use Auth;

class Pagecontroller extends Controller
{
    public function getIndex(){
//        dd(Cart::content());
//        $sanpham=DB::table('sanpham')->select('id','Tên','TênTL','HinhAnh','DonGia','SoLuong','MieuTa')->orderBy('id','DESC')->skip(0)-take(4)->get();
    	return view('page.List_sanpham');
    }
   public function getLoaiSp($type){
        $sp_theoloai=sanpham::where('id_MaLoai',$type)->get();

        $category=category::all();
        $loai_sp=category::where('id',$type)->first();
   	return view('page.loai_sanpham',['category'=>$category],compact('sp_theoloai','loai_sp'));
    }
    public function getlistsp(){
//        $sanpham=DB::table('sanpham')->select('id','Tên','TênTL','HinhAnh','DonGia','SoLuong','MieuTa')->orderBy('id','DESC')->skip(0)-take(4)->get();
//        return view('page.List_Product',compact('sanpham'));
        $sanpham=sanpham::all();
        return view('page.List_Product',['sanpham'=>$sanpham]);
    }
    public function getChitiet(Request $req){
        $sanp= sanpham::where('id',$req->id)->first();
        return view('page.chitiet_sanpham',compact('sanp'));
    }
//    public function addcartt(Request $req){
//        $sanpp= sanpham::where('id',$req->id)->first();
//        return view('page.chitiet_sanpham',compact('sanpp'));
//    }
   // public function getcategory(){
    //    $category=category::all();
     //   return view ('page.loai_sanpham',['category'=>$category]);
   // }

}
