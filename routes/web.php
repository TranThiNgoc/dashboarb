<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hoclaravel',function (){
    return   "Chao mung ban den voi khoa hoc lap trih";
});
Route::get('sayhello/{stn}/{sth}',function ($stn,$sth){
    $tong=$stn+$sth;
    return $tong;
});
//Route::group(['prefix' => 'Dashbroad','middleware' => 'adminLogout' ],function (){
Route::get('Dashbroad',function (){
   return view('admin.Layout');
}) ;

Route::get('post',function(){

    return view('post');

});
Route::get('category',function(){
return view ('category');
});

Route::get('layout',[
	'as' =>'trang-chu',
	'uses'=>'Pagecontroller@getIndex'
]);
Route::get('loaisanpham',[
	'as'=> 'loai-san-pham',
	'uses'=>'Pagecontroller@getLoaiSp'
]);
//auth
Route::get('dangnhap',function (){
    return view('dangnhap');
});
Route::post('login','AuthController@login') -> name('login');
//Route::get('layout','Pagecontroller@getIndex')->middleware ('Checklogout');

Route::get('Dashbroad',function (){
  //  echo "Bạn đã dang nhap";
})-> middleware('adminLogout');