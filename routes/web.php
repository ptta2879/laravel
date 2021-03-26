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



Route::get('/','HomeController@index');
Route::get('/GioiThieu', 'AboutController@index');
Route::get('/Home','HomeController@index' );
Route::get('/SanPham', 'ProductController@index');
Route::get('/BaiViet', 'BlogController@index');
Route::get('/GioHang', 'CartController@index');
Route::get('/NoiDungBaiViet', 'BlogSingleController@index');
Route::get('/ThanhToan', 'CheckOutController@index');
Route::get('/ChiTietSanPham', 'ProductSingleController@index');
Route::get('/LienHe','ContactController@index' );
Route::get('/logout',function(){
    Auth::logout();
    return redirect()->back()->withInput();
} );
Route::get('/GioHangAjax','CartController@cartAjax');
Route::get('/AddGioHang', 'CartController@themSanPham');
Route::get('/AddGioHangChiTiet', 'CartController@themSanPhamChiTiet');
Route::get('/XoaGioHang', 'CartController@xoaGioHang');
Route::get('/TinhTien', 'CartController@tinhTien');
Route::get('/HangDaMua', 'ProductBuyController@index');
Route::get('/DonHangDaMua', 'ProductBuyController@donHangDaMua');
Route::post('/NhanLienHe','ContactController@nhanLienHe' );
Route::post('/HoaDon','CheckOutController@taoHoaDon' );
Auth::routes();


