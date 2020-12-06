<?php
Route::view('/a', 'admin.pages.index');
Route::view('/about', 'client.pages.about');
Route::view('/contact', 'client.pages.contact');
Route::view('/dang-nhap', 'client.pages.account.login')->name('account.login_view');
Route::post('/xu-ly-dang-nhap', 'AccountController@login')->name('account.login');
Route::get('/dang-xuat', 'AccountController@logout')->name('account.logout');
Route::view('/dang-ky', 'client.pages.account.register')->name('account.register');
Route::post('/xet-dang-ky', 'AccountController@signup')->name('account.signup');

Route::group(['middleware' => ['hocVien']], function () {
    Route::post('/danh-gia/{gs_id}', 'StudentController@rating')->name('rating');
    Route::get('/trang-ca-nhan/{id}', 'StudentController@profile')->name('student.profile');
    
    // update info student
    Route::post('/cap-nhat-uoc-muon', 'StudentController@updateWish')->name('updateWish');
    Route::post('/cap-nhat-ngay-sinh', 'StudentController@updateBirth')->name('updateBirth');
    Route::post('/cap-nhat-trinh-do', 'StudentController@updateLevel')->name('updateLevel');
    Route::post('/cap-nhat-hoc-luc', 'StudentController@updatePower')->name('updatePower');
    Route::post('/cap-nhat-truong-hoc', 'StudentController@updateSchool')->name('updateSchool');

    Route::get('/gia-su-gan-ban/{id}', 'StudentController@tutorNear')->name('student.tutorNear');
});

Route::group(['middleware' => ['giaSu']], function () {

    Route::get('/gia-su/them-khoa-hoc', 'TutorController@addClass')->name('tutor.addClass');
    Route::post('/gia-su/them-khoa-hoc', 'TutorController@addClassStore')->name('tutor.addClassStore');

    Route::post('/cap-nhat-ten-khoa-hoc','TutorController@updateCourseName')->name('updateCourseName');
    Route::post('/cap-nhat-mo-ta-khoa-hoc','TutorController@updateCourseDescription')->name('updateCourseDescription');
    Route::post('/cap-nhat-gioi-thieu-khoa-hoc','TutorController@updateCourseIntro')->name('updateCourseIntro');
    Route::post('/them-video','TutorController@uploadVideo')->name('uploadVideo');


    
    Route::group(['prefix' => '/tai-lieu-gia-su'], function () {
        Route::get('/tài-lieu/{id}', 'DocumentTutorController@index')->name('document.tutor.index');
        Route::get('/thu-muc/{slug}', 'DocumentTutorController@into')->name('document.tutor.into');
        Route::post('/tao-thu-muc', 'DocumentTutorController@createFolder')->name('document.tutor.createFolder');
        Route::post('/upload-tai-lieu', 'DocumentTutorController@upload')->name('document.tutor.upload');
        Route::get('/nen/{id}',  'DocumentTutorController@zip')->name('document.tutor.zip');
    });

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
});

// tìm lớp
Route::group(['prefix' => ''], function () {
    //ajax linh vuc
    Route::get('/lay-linh-vuc', 'SearchController@get_linhvuc')->name('search.get_linhvuc');
    //chuyên môn
    Route::get('/buoc-1/chuyen-mon',  'SearchController@step1')->name('search.step1');
    Route::get('/buoc-2/doi-tuong-nguoi-hoc',  'SearchController@step2')->name('search.step2');
    
    Route::get('/khoa-hoc/{l_id}', 'PageController@course')->name('course.intro');
    Route::get('/gia-su/{id}', 'PageController@tutor')->name('tutor.profile');
    //đối tượng
    Route::get('/buoc-3/thoi-gian-day',  'SearchController@step3')->name('search.step3');
    Route::get('/tim-khoa-hoc',  'SearchController@match')->name('search.match');
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

Route::group(['middleware' => ['admin']], function () {
    
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
});

Route::group(['middleware' => ['login']], function () {
    Route::post('dang-ky-khoa-hoc/{l_id}','ClassController@regist')->name('class.regist');
    Route::group(['prefix' => '/payment'], function ()
    {
        Route::post('/VNPay/{l_id}', ['uses' => 'ClassController@VNPay', 'as' => 'VNPay']);
        Route::get('/return-vnpay', ['uses' => 'ClassController@return', 'as' => 'return']);
    });
});

Route::get('/get_subject', 'DomController@getSubject')->name('getSubject');
Route::get("auto-complete", "GoogleController@index");
Route::view('/404', 'client.pages.404')->name('404');