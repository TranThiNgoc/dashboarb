<?php

namespace App\Http\Controllers;

use App\cart;
use Illuminate\Http\Request;
use App\sanpham;
//use Cart;
use App\Http\Requests;
use Session;

class CartController extends Controller
{

    public function getIndex(){

        $sanphams=sanpham::all();
        return view('page.giohang',['sanphams'=>$sanphams]);
    }

    public function getAddtocart($id, Request $request)
    {
        $sanpham = sanpham::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new cart($oldCart);
        $cart->add($sanpham, $sanpham->id);

        $request->session()->put('cart', $cart);
//        dd($request->session()->get('cart'));
        return redirect()->route('san-pham-shop');
        //      if($request->SoLuong){


//          $qty=$request->SoLuong;
//      }else{
//          $qty=1;
//      }
//
//      $cart=['id'=>$id,'name'=>$sanpham->Ten,'quantity'=>$qty,'price'=>$sanpham->DonGia,'options'=>['img'=>$sanpham->HinhAnh]];
//     echo $cart;
//      die;
//            dd(Cart::content());
        // return view('page.giohang',compact('cart'));
     //   return back()->with('thongbao', 'Đã mua hàng' . $sanpham->Ten . 'Thành Công');
//    public function addCart(Request $req){
////        $sanp= sanpham::where('id',$req->id)->first();
////        return view('page.giohang',compact('sanp'));
//
//
//    }
    }

    public  function getDeleteCart($id){
      $oldCart=Session::has('cart') ? Session::get('cart'):null;
      $cart=new Cart($oldCart);
     $cart->clearcart($id);
    // $cart->delete();
      //  $cart->clearcart();
        Session::put('cart',$cart);
        return redirect()->route('shoppingCart');

    }

    public function getCart(){
        if(!Session::has('cart')){
            return view ('page.shopping_cart');
        }
        $oldCart=Session::get('cart');
        $cart=new cart($oldCart);
        return view('page.shopping_cart',['sanphams' =>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    public  function getCheckout(){

        if(!Session::has('cart')){
            return view ('page.shopping_cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('page.checkout',['total'=>$total]);
    }
}
