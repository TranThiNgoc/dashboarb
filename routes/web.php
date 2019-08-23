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
//Route::get('Dashbroad',function (){
  // return view('admin.Layout');
//}) ;
Route::get('test',function (){
   return view ('testt');
});
Route::get('post',function(){

    return view('post');

});
//Route::get('category',function(){
//return view ('category');
//});

//Route::get('layout',[
//	'as' =>'trang-chu',
//	'uses'=>'Pagecontroller@getIndex'
//]);
Route::get('listsp',[
    'as'=> 'san-pham',
    'uses'=>'Pagecontroller@getlistsp'
]);
//Route::get('loaisp',[
//   'as'=> 'category',
 //   'uses'=>'Pagecontroller@getcategory'
//]);
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

//Route::get('Dashbroad',function (){
  //  echo "Bạn đã dang nhap";
//});//-> middleware('adminLogout');
Route::get('lienket',function(){
 $data = App\sanpham::find(1)->category->toArray();
 var_dump($data);
});
Route::get('lienketloaisp',function(){
    $data = App\category::find(1)->sanpham->toArray();
    var_dump($data);
});
Route::get('thu',function (){
    $category=App\category::find(1);
    foreach ($category->sanpham as $sanpham)
    {
        echo $sanpham->Ten."<br>";
    }

});
//
Route::get('dbsanpham',function (){
    $data=DB::table('sanpham')->get();
  foreach ($data as $row){
      foreach ($row as $key =>$value) {
        //  echo $key.":".$value."<br>";
          echo ("<tr>
			<td> $key</td><br>
			<td> $value</td>
		</tr>");

      }
      echo "<hr>";
  }
});

//
Route::get('dbsp',function (){
    $data=DB::table('sanpham')->select(['id','Ten','MieuTa'])->where('id',2)->get();//where('id',"=",2)->get();
    foreach ($data as $row){
        foreach ($row as $key =>$value) {
            echo $key.":".$value."<br>";
             //   echo ("<tr>
             //   <td> $key</td><br>
              //  <td> $value</td>
		//</tr>");

        }
        echo "<hr>";
    }
});
