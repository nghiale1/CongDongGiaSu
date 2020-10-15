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

Route::view('/dang-nhap', 'client.pages.account.login')->name('account.login_view');
Route::post('/xu-ly-dang-nhap', 'AccountController@login')->name('account.login');
Route::get('/dang-xuat', 'AccountController@logout')->name('account.logout');
Route::view('/dang-ky', 'client.pages.account.register')->name('account.register');
Route::post('/xet-dang-ky', 'AccountController@signup')->name('account.signup');


// tìm lớp
//ajax linh vuc
Route::get('/lay-linh-vuc', 'SearchController@get_linhvuc')->name('search.get_linhvuc');
//chuyên môn
Route::get('/buoc-1/chuyen-mon',  'SearchController@step1')->name('search.step1');
Route::get('/buoc-2/doi-tuong-nguoi-hoc',  'SearchController@step2')->name('search.step2');
//đối tượng
Route::get('/buoc-3/thoi-gian-day',  'SearchController@step3')->name('search.step3');
Route::get('/tim-khoa-hoc',  'SearchController@match')->name('search.match');

// Route::get('/khoa-hoc/', 'SearchController@result')->name('search.result');

Route::view('/trang-ca-nhan', 'client.pages.account.student.profile');
Route::view('/trang-ca-nhan2', 'client.pages.account.tutor.profile');

Route::get('/gia-su/{id}', 'PageController@tutor')->name('tutor.profile');
Route::get('/khoa-hoc/{id}', 'PageController@course')->name('course.intro');

Route::group(['prefix' => ''], function () {
    Route::get('/', 'PageController@index')->name('home');
    Route::view('/tim-lop', 'client.pages.post');
    Route::view('/tim-gia-su', 'client.pages.find_tutor');
    Route::view('/tim-lop', 'client.pages.find_class');
    Route::view('/dang-ky-gia-su', 'client.pages.register_tutor');
    Route::group(['prefix' => '/hop-dong'], function () {
        Route::view('/mau-gia-su', 'client.pages.model_contract');
        Route::view('/thue-gia-su', 'client.pages.contract');
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

Route::get('/get_subject', 'DomController@getSubject')->name('getSubject');
Route::post('/changeStatusSchedule', 'TutorController@changeStatusSchedule')->name('changeStatusSchedule');
Route::post('/changeIntro', 'TutorController@changeIntro')->name('changeIntro');
Route::post('/changeDes', 'TutorController@changeDes')->name('changeDes');
Route::post('/changeAddress', 'TutorController@changeAddress')->name('changeAddress');
Route::post('/addSchool', 'TutorController@addSchool')->name('addSchool');
Route::post('/changeSchool', 'TutorController@changeSchool')->name('changeSchool');
Route::post('/removeSchool', 'TutorController@removeSchool')->name('removeSchool');

Route::post('/addDegree', 'TutorController@addDegree')->name('addDegree');
Route::post('/changeDegree', 'TutorController@changeDegree')->name('changeDegree');
Route::post('/removeDegree', 'TutorController@removeDegree')->name('removeDegree');

Route::post('/addSubject', 'TutorController@addSubject')->name('addSubject');



Route::get('/profiles/getSuggestCities', 'TutorController@getSuggestCities');
Route::get("auto-complete", "GoogleController@index");