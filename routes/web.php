<?php
Route::view('/about', 'client.pages.about');
Route::view('/contact', 'client.pages.contact');
Route::group(['middleware' => ['unLogin']], function () {
    Route::view('/dang-nhap', 'client.pages.account.login')->name('account.login_view');
    Route::post('/xu-ly-dang-nhap', 'AccountController@login')->name('account.login');
    Route::get('/dang-ky', 'AccountController@register')->name('account.register');
    Route::post('/xet-dang-ky', 'AccountController@signup')->name('account.signup');
});

Route::get('/dang-xuat', 'AccountController@logout')->name('account.logout');

Route::group(['middleware' => ['hocVien']], function () {
    Route::post('/danh-gia/{gs_id}', 'StudentController@rating')->name('rating');

    // update info student
    Route::post('/cap-nhat-uoc-muon', 'StudentController@updateWish')->name('updateWish');
    Route::post('/cap-nhat-ngay-sinh', 'StudentController@updateBirth')->name('updateBirth');
    Route::post('/cap-nhat-trinh-do', 'StudentController@updateLevel')->name('updateLevel');
    Route::post('/cap-nhat-hoc-luc', 'StudentController@updatePower')->name('updatePower');
    Route::post('/cap-nhat-truong-hoc', 'StudentController@updateSchool')->name('updateSchool');

    Route::get('/gia-su-gan-ban', 'StudentController@tutorNear')->name('student.tutorNear');

    Route::get('/goi-y-khoa-hoc', 'CourseController@suggestion')->name('course.suggestion');
    Route::post('bao-cao', 'CourseController@report')->name('course.report');
    Route::get('/gia-su-yeu-thich', 'StudentController@wishlist')->name('student.wishlist');
});

Route::group(['middleware' => ['giaSu']], function () {
    Route::get('/danh-sach-tin-nhan', 'ChatController@listMessage')->name('tutor.listMessage');
    Route::get('/tin-nhan', 'ChatController@message')->name('tutor.message');
    Route::get('/tin-nhan-lop', 'ChatController@messageClass')->name('tutor.messageClass');
    Route::get('/gia-su/them-khoa-hoc', 'TutorController@addClass')->name('tutor.addClass');
    Route::post('/gia-su/them-khoa-hoc', 'TutorController@addClassStore')->name('tutor.addClassStore');

    Route::post('/cap-nhat-ten-khoa-hoc', 'TutorController@updateCourseName')->name('updateCourseName');
    Route::post('/cap-nhat-mo-ta-khoa-hoc', 'TutorController@updateCourseDescription')->name('updateCourseDescription');
    Route::post('/cap-nhat-gioi-thieu-khoa-hoc', 'TutorController@updateCourseIntro')->name('updateCourseIntro');
    Route::post('/them-video', 'TutorController@uploadVideo')->name('uploadVideo');
    Route::post('/them-chuong-moi', 'DocumentTutorController@createFolderClass')->name('tutor.class.createFolder');
    Route::post('/them-tap-tin', 'DocumentTutorController@createFileClass')->name('tutor.class.createFile');
    Route::get('/xoa-tap-tin', 'DocumentTutorController@deleteFileClass')->name('tutor.class.deleteFile');
    Route::get('/xoa-tap-video', 'DocumentTutorController@deleteVideoClass')->name('tutor.class.deleteVideoClass');
    Route::get('/xoa-chương', 'DocumentTutorController@deleteFolderClass')->name('tutor.class.deleteFolderClass');

    Route::group(['prefix' => '/tai-lieu-gia-su'], function () {
        Route::get('/tai-lieu/{id}', 'DocumentTutorController@index')->name('document.tutor.index');
        Route::get('/thu-muc/{slug}', 'DocumentTutorController@into')->name('document.tutor.into');
        Route::post('/tao-thu-muc', 'DocumentTutorController@createFolder')->name('document.tutor.createFolder');
        Route::post('/upload-tai-lieu', 'DocumentTutorController@upload')->name('document.tutor.upload');
        Route::get('/xoa-tai-lieu', 'DocumentTutorController@delete')->name('document.tutor.delete');
        Route::get('/nen/{id}', 'DocumentTutorController@zip')->name('document.tutor.zip');
    });

    Route::post('/changeLatLng', 'TutorController@changeLatLng')->name('changeLatLng');
    Route::post('/changeFee', 'TutorController@changeFee')->name('changeFee');
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

    Route::get('/danh-sach-hoc-vien/{l_id}', 'TutorController@listHV')->name('listHV');

});

// tìm lớp
Route::group(['prefix' => ''], function () {
    //ajax linh vuc
    Route::get('/lay-linh-vuc', 'SearchController@get_linhvuc')->name('search.get_linhvuc');
    Route::get('/buoc-1/chuyen-mon', 'SearchController@step1')->name('search.step1');
    Route::get('/buoc-1/doi-tuong-nguoi-hoc', 'SearchController@step2')->name('search.step2');
    Route::get('/buoc-2/thoi-gian-day', 'SearchController@step3')->name('search.step3');
    Route::get('/tim-khoa-hoc', 'SearchController@match')->name('search.match');

    Route::get('/tim-kiem', 'SearchController@search')->name('search');

    Route::get('/khoa-hoc/{l_id}', 'PageController@course')->name('course.intro');
    Route::get('/gia-su/{id}', 'PageController@tutor')->name('tutor.profile');
    Route::get('/', 'PageController@index')->name('home');
    Route::view('/tim-lop', 'client.pages.post');
    Route::view('/tim-gia-su', 'client.pages.find_tutor');
    Route::view('/tim-lop', 'client.pages.find_class');
    Route::view('/dang-ky-gia-su', 'client.pages.register_tutor');
    Route::get('/danh-sach-khoa-hoc/{gs_id}', 'TutorController@listClass')->name('listClass');
    Route::group(['prefix' => '/hop-dong'], function () {
        Route::view('/mau-gia-su', 'client.pages.model_contract');
        Route::view('/thue-gia-su', 'client.pages.contract');
    });
});

Route::group(['middleware' => ['admin']], function () {

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'AdminController@index')->name('dashboard.index');

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
            Route::get('gia-su', 'AdminController@tkGS')->name('dashboard.tkGS');
            Route::get('gia-su-lua-chon', 'AdminController@tkGSChon')->name('dashboard.tkGSChon');
            Route::get('hoc-vien', 'AdminController@tkHV')->name('dashboard.tkHV');
            Route::get('hoc-vien-lua-chon', 'AdminController@tkHVChon')->name('dashboard.tkHVChon');
            Route::get('lop-hoc', 'AdminController@tkLH')->name('dashboard.tkLH');
            Route::get('lop-hoc-lua-chon', 'AdminController@tkLHChon')->name('dashboard.tkLHChon');
            Route::get('thanh-toan', 'AdminController@tkTT')->name('dashboard.tkTT');
            Route::get('thanh-toan-lua-chon', 'AdminController@tkTTChon')->name('dashboard.tkTTChon');
        });
        Route::get('mon-hoc', 'AdminController@monHoc')->name('dashboard.monHoc');
        Route::post('them-mon-hoc', 'AdminController@addMonHoc')->name('dashboard.addMonHoc');
        Route::post('cap-nhat-mon-hoc', 'AdminController@updateMonHoc')->name('dashboard.updateMonHoc');
        Route::post('xoa-mon-hoc/{id}', 'AdminController@xoaMonHoc')->name('dashboard.xoaMonHoc');

        Route::group(['prefix' => 'bao-cao'], function () {
            Route::get('/chua-xu-ly', 'AdminController@newReport')->name('dashboard.newReport');
            Route::get('/da-xu-ly', 'AdminController@report')->name('dashboard.report');
            Route::get('/xoa-khoa-hoc/{l_id}', 'AdminController@removeCourse')->name('dashboard.removeCourse');
            Route::get('/xoa-bao-cao/{bc_id}', 'AdminController@protectCourse')->name('dashboard.protectCourse');

        });
    });
});

Route::group(['middleware' => ['login']], function () {
    Route::get('/trang-ca-nhan/{id}', 'StudentController@profile')->name('student.profile');

    Route::group(['prefix' => '/tai-lieu-hoc-vien'], function () {
        Route::get('/tai-lieu/{hv_id}', 'DocumentTutorController@studentIndex')->name('document.student.index');
        Route::get('/thu-muc/{hv_id}/{slug}', 'DocumentTutorController@studentInto')->name('document.student.into');
        Route::post('/tao-thu-muc', 'DocumentTutorController@studentCreateFolder')->name('document.student.createFolder');
        Route::post('/upload-tai-lieu', 'DocumentTutorController@studentUpload')->name('document.student.upload');
        Route::get('/xoa-tai-lieu', 'DocumentTutorController@studentDelete')->name('document.student.delete');
        Route::get('/nen/{id}', 'DocumentTutorController@studentZip')->name('document.student.zip');
    });
    Route::get('yeu-thich/{gs_id}', 'StudentController@store')->name('wishlist.store');
    Route::get('bo-yeu-thich/{gs_id}', 'StudentController@destroy')->name('wishlist.destroy');
    Route::post('dang-ky-khoa-hoc/{l_id}', 'ClassController@regist')->name('class.regist');
    Route::group(['prefix' => '/payment'], function () {
        Route::post('/VNPay/{l_id}', ['uses' => 'ClassController@VNPay', 'as' => 'VNPay']);
        Route::get('/return-vnpay', ['uses' => 'ClassController@return', 'as' => 'return']);
    });
    Route::get('kiem-tra-chat', 'ChatController@checkChatGS')->name('checkChatGS');
    Route::get('kiem-tra-chat-nhom', 'ChatController@checkChatLop')->name('checkChatLop');

});
Route::get('/get_subject', 'DomController@getSubject')->name('getSubject');
Route::get("auto-complete", "GoogleController@index");
Route::view('/404', 'client.pages.404')->name('404');
Route::post('/save', 'DomController@save')->name('save');
