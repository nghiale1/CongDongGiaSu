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


Route::view('/a', 'admin.pages.index');
Route::view('/about', 'client.pages.about');
Route::view('/contact', 'client.pages.contact');
Route::view('/dang-nhap', 'client.pages.account.login');
Route::view('/dang-ky', 'client.pages.account.register');
Route::view('/trang-ca-nhan', 'client.pages.account.profile');
Route::view('/trang-ca-nhan2', 'client.pages.account.profile2');
Route::view('/danh-sach', 'client.pages.list_class');
Route::group(['prefix' => ''], function () {
    Route::view('/', 'client.pages.index');
    Route::view('/tim-lop', 'client.pages.post');
    Route::view('/tim-gia-su', 'client.pages.find_tutor');
    Route::view('/tim-lop', 'client.pages.find_class');
    Route::view('/dang-ky-gia-su', 'client.pages.register_tutor');
    Route::group(['prefix' => '/hop-dong'], function () {
        Route::view('/mau-gia-su', 'client.pages.contract_model');
        Route::view('/lam-gia-su', 'client.pages.contract');
    });
});
Route::group(['prefix' => 'dashboard'], function () {
    Route::group(['prefix' => 'gia-su'], function () {
    });
    Route::group(['prefix' => 'phu-huynh'], function () {
    });
    
    Route::group(['prefix' => 'ban-tin'], function () {
    });
    Route::group(['prefix' => 'hoc-sinh'], function () {
    });
    Route::group(['prefix' => 'lop-hoc'], function () {
    });
    Route::group(['prefix' => 'thong-ke'], function () {
    });
});
