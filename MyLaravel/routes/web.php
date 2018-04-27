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

Route::get('khoahoc',function(){
	return "xin chao cac ban";
});

Route::get('thang/laravel',function(){
	echo "<h1>xin chao</h1>";
});

// truyen tham so
Route::get('hoten/{ten}',function($ten){
	echo "Ten cua ban la:".$ten;
});
Route::get('Laravel/{ngay}',function($ngay){
	echo "Ngay sinh:".$ngay;
})->where(['ngay'=>'[0-9]+']);
Route::get('dk/{gioitinh}',function($gioitinh){
	echo "gioitinh:".$gioitinh;
})->where(['gioitinh'=>'[a-zA-Z]+']);
//dinh danh 
Route::get('Route1',['as'=>'Myroute',function(){
	echo "Xin chao";
}]);
Route::get('Route2');
Route::get('goiten',function(){
	return http_redirect()->route('Myroute');
});
Route::get('quequan/{tinh}',function{
  echo "Que quan : ".$tinh;
});