<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\category;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        view()->composer( 'testt',function ($view){
           $loai_sp=category::all();
//           if(Session('cart')){
//               $oldCart=Session::get('cart');
//               $cart=new Cart($oldCart);
//           }
           $view->with('loai_sp',$loai_sp,'cart');
         //   $view->with(['loai_sp',$loai_sp,'cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
//           cart->item,''
        });
    }
}
