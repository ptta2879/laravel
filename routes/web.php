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
Route::get('/admin/Home', 'AdminController@index');
Route::get('/admin', 'AdminController@index')->middleware('loginadmin');
Route::get('/admin/login', 'LoginController@index');
Route::post('/admin/login', 'LoginController@loginAdmin');
Route::get('/admin/BaiViet', 'BaiVietController@index');
Route::get('/admin/ThemBaiViet', 'BaiVietController@themBaiViet');
Route::get('/admin/TonKho', 'KhoController@index');
Route::get('/admin/NhapKho', 'KhoController@nhapKho');
Route::get('/admin/LienHe', 'LienHeController@index');
Route::get('/admin/LoaiSanPham', 'LoaiSanPhamController@index');
Route::get('/admin/ThemLoaiSanPham', 'LoaiSanPhamController@themLoaiSanPham');
Route::get('/admin/SanPham', 'SanPhamController@index');
Route::get('/admin/ThemSanPham', 'SanPhamController@themSanPham');

Auth::routes();


