@extends('client.layouts.layout')
@section('head')
Lập trình ReactJS cho người mới bắt đầu
@endsection
@section('breadcrum')
Công nghệ thông tin / Lập trình ReactJS cho ngư...
@endsection
@push('css')
<style>
    @include('client.pages.class.intro-css');
</style>
@endpush

@section('page')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="white padding">
                <div class="banner-course-info">
                    <h2 class="course_name">{{$lop->l_ten}}</h2>
                    <br>
                    <div class="course-description">{{$lop->l_mota}}</div>
                    <br>
                    <div class="author-area">
                        <a class="author-info" href="/teacher/luu-truong-hai-lan-1370">
                            <div class="author-image"
                                style="background: url(https://d1nzpkv5wwh1xf.cloudfront.net/320/k-5768aeb1047c995f75fdbf6b/20190822-/12111956_912297545472766_7911.jpg) no-repeat center/cover;">
                            </div>
                            <div class="author-name"><b>{{$lop->giasu->gs_hoten}}</b></div>
                        </a>
                        <div class="student-info">
                            <div class="student-icon"
                                style="background: url(https://edumall.vn/static/version1600623380/frontend/Edumall/winstrike/vi_VN/images/person-black.png) no-repeat center;">
                            </div>
                            <div class="student-count"><span class="teached">745</span> học viên</div>
                        </div>
                        <div class="rating-area">
                            <div class="new-tag"></div><span class="teached">20</span> đánh giá
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="white ">
                <div class="sub-menu">

                    <a href="" class="active">Thông tin chung</a>
                    <a href="">Giáo trình</a>
                    <a href="">Giảng viên</a>
                </div>
            </div>
            <br>
            <div class="white padding">
                <p>{!!$lop->l_gioithieu!!}</p>
            </div>
            <br>
            <div class="white padding">
                <div class="title">
                    Giáo trình
                </div>
                <div class="curriculum-overview">
                    <div class="curriculum-type">
                        Thể loại: <span>CNTT</span>
                    </div>
                    <div class="curriculum-lessons">
                        <div class="curriculum-lessons-number">
                            Số bài: <span>62</span>
                        </div>
                        <div class="curriculum-time">
                            Thời lượng: <span></span>
                        </div>
                    </div>
                </div>
                <div class="curriculum-lesson-container">
                    <div class="curriculum-chapter-container">
                        <div class="curriculum-chapter">
                            <div class="chapter-name">Chương 1: GIỚI THIỆU KHÓA HỌC </div>
                            <div class="chappter-lesson-count">4 Bài<div class="collapse-icon collapse-down"
                                    toggle-target="collapse-container-1"></div>
                            </div>
                        </div>
                        <div class="chapter-lessons collapse-container-1" style="display: block;">
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="1: Khóa học lập trình ReactJS tại ZendVN"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 1: Khóa học lập trình ReactJS tại ZendVN</div>
                                </div>
                                <div class="lesson-timer">15:10</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="2: ReactJS cơ bản"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 2: ReactJS cơ bản</div>
                                </div>
                                <div class="lesson-timer">03:36</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="3: ReactJS thông tin cần biết"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 3: ReactJS thông tin cần biết</div>
                                </div>
                                <div class="lesson-timer">07:37</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="4: Cài đặt môi trường học tập"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 4: Cài đặt môi trường học tập</div>
                                </div>
                                <div class="lesson-timer">07:17</div>
                            </div>
                        </div>
                        <div class="curriculum-chapter">
                            <div class="chapter-name">Chương 2: NỘI DUNG</div>
                            <div class="chappter-lesson-count">56 Bài<div class="collapse-icon collapse-down"
                                    toggle-target="collapse-container-2"></div>
                            </div>
                        </div>
                        <div class="chapter-lessons collapse-container-2" style="display: none;">
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="1: Tìm hiểu ReactJS phần 1"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 1: Tìm hiểu ReactJS phần 1</div>
                                </div>
                                <div class="lesson-timer">09:41</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="2: Tìm hiểu ReactJS phần 2"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 2: Tìm hiểu ReactJS phần 2</div>
                                </div>
                                <div class="lesson-timer">08:50</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="3: Tìm hiểu ReactJS phần 3"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 3: Tìm hiểu ReactJS phần 3</div>
                                </div>
                                <div class="lesson-timer">06:38</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="4: Tìm hiểu ReactJS phần 4"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 4: Tìm hiểu ReactJS phần 4</div>
                                </div>
                                <div class="lesson-timer">04:51</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="5: Tích hợp Bootstrap"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 5: Tích hợp Bootstrap</div>
                                </div>
                                <div class="lesson-timer">07:07</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="6: Xây dựng App Component"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 6: Xây dựng App Component</div>
                                </div>
                                <div class="lesson-timer">12:19</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="7: Xây dựng Course Component"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 7: Xây dựng Course Component</div>
                                </div>
                                <div class="lesson-timer">08:07</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="8: Xây dựng Lesson Component"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 8: Xây dựng Lesson Component</div>
                                </div>
                                <div class="lesson-timer">10:13</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="9: Tìm hiểu JSX"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 9: Tìm hiểu JSX</div>
                                </div>
                                <div class="lesson-timer">11:46</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="10: Sử dụng Props - Phần 1"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 10: Sử dụng Props - Phần 1</div>
                                </div>
                                <div class="lesson-timer">10:00</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="11: Sử dụng Props - Phần 2"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 11: Sử dụng Props - Phần 2</div>
                                </div>
                                <div class="lesson-timer">07:17</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="12: Sử dụng JSX Foreach"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 12: Sử dụng JSX Foreach</div>
                                </div>
                                <div class="lesson-timer">14:05</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="13: Sử dụng Event"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 13: Sử dụng Event</div>
                                </div>
                                <div class="lesson-timer">09:04</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="14: Sử dụng Ref"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 14: Sử dụng Ref</div>
                                </div>
                                <div class="lesson-timer">11:11</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="15: Sử dụng State"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 15: Sử dụng State</div>
                                </div>
                                <div class="lesson-timer">12:20</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="16: Tìm hiểu LifeCycle - Phần 1"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 16: Tìm hiểu LifeCycle - Phần 1</div>
                                </div>
                                <div class="lesson-timer">11:49</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="17: Tìm hiểu LifeCycle - Phần 2"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 17: Tìm hiểu LifeCycle - Phần 2</div>
                                </div>
                                <div class="lesson-timer">06:07</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="18: Hệ thống kiến thức và mở rộng"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 18: Hệ thống kiến thức và mở rộng</div>
                                </div>
                                <div class="lesson-timer">03:15</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="19: Xây dựng Project TodoList"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 19: Xây dựng Project TodoList</div>
                                </div>
                                <div class="lesson-timer">05:57</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="20: Xây dựng và tích hợp giao diện - Phần 1"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 20: Xây dựng và tích hợp giao diện - Phần 1</div>
                                </div>
                                <div class="lesson-timer">10:02</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="21: Xây dựng và tích hợp giao diện - Phần 2"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 21: Xây dựng và tích hợp giao diện - Phần 2</div>
                                </div>
                                <div class="lesson-timer">07:51</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="22: Phân chia Component - Phần 1"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 22: Phân chia Component - Phần 1</div>
                                </div>
                                <div class="lesson-timer">10:31</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="23: Phân chia Component - Phần 2"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 23: Phân chia Component - Phần 2</div>
                                </div>
                                <div class="lesson-timer">06:42</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="24: Hiển thị danh sách các Item - Mock data 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 24: Hiển thị danh sách các Item - Mock data 01</div>
                                </div>
                                <div class="lesson-timer">08:11</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="25: Hiển thị danh sách các Item - Mock data 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 25: Hiển thị danh sách các Item - Mock data 02</div>
                                </div>
                                <div class="lesson-timer">08:01</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="26: Hiển thị danh sách các Item - uuid"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 26: Hiển thị danh sách các Item - uuid</div>
                                </div>
                                <div class="lesson-timer">07:09</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="27: Hiển thị danh sách các Item - Show Level"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 27: Hiển thị danh sách các Item - Show Level</div>
                                </div>
                                <div class="lesson-timer">10:42</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="28: Xây dựng Form Toggle - Add Task"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 28: Xây dựng Form Toggle - Add Task</div>
                                </div>
                                <div class="lesson-timer">08:37</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="29: Xây dựng Form Toggle - Close Form"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 29: Xây dựng Form Toggle - Close Form</div>
                                </div>
                                <div class="lesson-timer">05:29</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="30: Xây dựng Form Toggle - Form Cancel"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 30: Xây dựng Form Toggle - Form Cancel</div>
                                </div>
                                <div class="lesson-timer">04:57</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="31: Xây dựng chức năng Search - State strSearch 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 31: Xây dựng chức năng Search - State strSearch 01
                                    </div>
                                </div>
                                <div class="lesson-timer">13:46</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="32: Xây dựng chức năng Search - State strSearch 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 32: Xây dựng chức năng Search - State strSearch 02
                                    </div>
                                </div>
                                <div class="lesson-timer">04:55</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="33: Xây dựng chức năng Search - State strSearch 03"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 33: Xây dựng chức năng Search - State strSearch 03
                                    </div>
                                </div>
                                <div class="lesson-timer">07:53</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="34: Xây dựng chức năng Search - Search 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 34: Xây dựng chức năng Search - Search 01</div>
                                </div>
                                <div class="lesson-timer">04:50</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="35: Xây dựng chức năng Search - Search 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 35: Xây dựng chức năng Search - Search 02</div>
                                </div>
                                <div class="lesson-timer">13:14</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="36: Xây dựng chức năng Sort - Show Sort"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 36: Xây dựng chức năng Sort - Show Sort</div>
                                </div>
                                <div class="lesson-timer">11:55</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="37: Xây dựng chức năng Sort - Handle Sort"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 37: Xây dựng chức năng Sort - Handle Sort</div>
                                </div>
                                <div class="lesson-timer">08:37</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="38: Xây dựng chức năng Sort - Sort"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 38: Xây dựng chức năng Sort - Sort</div>
                                </div>
                                <div class="lesson-timer">06:55</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="39: Xây dựng chức năng Delete - Part 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 39: Xây dựng chức năng Delete - Part 01</div>
                                </div>
                                <div class="lesson-timer">05:39</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="40: Xây dựng chức năng Delete - Part 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 40: Xây dựng chức năng Delete - Part 02</div>
                                </div>
                                <div class="lesson-timer">07:21</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="41: Xây dựng chức năng Add - Form Text"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 41: Xây dựng chức năng Add - Form Text</div>
                                </div>
                                <div class="lesson-timer">06:32</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="42: Xây dựng chức năng Add - Form Select"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 42: Xây dựng chức năng Add - Form Select</div>
                                </div>
                                <div class="lesson-timer">07:00</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="43: Xây dựng chức năng Add - Form Radio"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 43: Xây dựng chức năng Add - Form Radio</div>
                                </div>
                                <div class="lesson-timer">04:54</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="44: Xây dựng chức năng Add - Form Checkbox"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 44: Xây dựng chức năng Add - Form Checkbox</div>
                                </div>
                                <div class="lesson-timer">03:26</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="45: Xây dựng chức năng Add - Add 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 45: Xây dựng chức năng Add - Add 01</div>
                                </div>
                                <div class="lesson-timer">09:04</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="46: Xây dựng chức năng Add - Add 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 46: Xây dựng chức năng Add - Add 02</div>
                                </div>
                                <div class="lesson-timer">06:22</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="47: Xây dựng chức năng Edit - Part 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 47: Xây dựng chức năng Edit - Part 01</div>
                                </div>
                                <div class="lesson-timer">10:41</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="48: Xây dựng chức năng Edit - Part 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 48: Xây dựng chức năng Edit - Part 02</div>
                                </div>
                                <div class="lesson-timer">05:12</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="49: Xây dựng chức năng Edit - Part 03"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 49: Xây dựng chức năng Edit - Part 03</div>
                                </div>
                                <div class="lesson-timer">10:45</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="50: Xây dựng chức năng Edit - Part 04"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 50: Xây dựng chức năng Edit - Part 04</div>
                                </div>
                                <div class="lesson-timer">06:55</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="51: Xây dựng chức năng Edit - Part 05"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 51: Xây dựng chức năng Edit - Part 05</div>
                                </div>
                                <div class="lesson-timer">07:04</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="52: Sử dụng LocalStorage - Part 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 52: Sử dụng LocalStorage - Part 01</div>
                                </div>
                                <div class="lesson-timer">14:17</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="53: Sử dụng LocalStorage - Part 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 53: Sử dụng LocalStorage - Part 02</div>
                                </div>
                                <div class="lesson-timer">07:25</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="54: Tối ưu ứng dụng - Full Video"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 54: Tối ưu ứng dụng - Full Video</div>
                                </div>
                                <div class="lesson-timer">10:18</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="55: Publish ứng dụng - Part 01"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 55: Publish ứng dụng - Part 01</div>
                                </div>
                                <div class="lesson-timer">13:35</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="56: Publish ứng dụng - Part 02"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 56: Publish ứng dụng - Part 02</div>
                                </div>
                                <div class="lesson-timer">06:35</div>
                            </div>
                            <div class="separate-line"></div>
                        </div>
                        <div class="curriculum-chapter">
                            <div class="chapter-name">Chương 3: KẾT THÚC KHÓA HỌC </div>
                            <div class="chappter-lesson-count">2 Bài<div class="collapse-icon collapse-down"
                                    toggle-target="collapse-container-3"></div>
                            </div>
                        </div>
                        <div class="chapter-lessons collapse-container-3" style="display: none;">
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img
                                        alt="1: Hệ thống kiến thức và mở rộng - Full Video"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 1: Hệ thống kiến thức và mở rộng - Full Video</div>
                                </div>
                                <div class="lesson-timer">03:37</div>
                            </div>
                            <div class="separate-line"></div>
                            <div class="chappter-lesson">
                                <div class="lesson-name-container"><img alt="2: Xem thêm videos về Lập trình ReactJS"
                                        src="http://dvkhfbm6djrbs.cloudfront.net/5be57a4be2e9ab000ba3a5b6/5d43f62ce1af2a00128ed897/ezgif.com-gif-maker.png"
                                        width="24" height="24">
                                    <div class="lesson-name">Bài 2: Xem thêm videos về Lập trình ReactJS</div>
                                </div>
                                <div class="lesson-timer">00:54</div>
                            </div>
                            <div class="separate-line"></div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="white padding">
                <div class="row">
                    @include('client.pages.account.info')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="white">
                <h3>Các khóa học tương tự</h3>
            </div>
        </div>
    </div>
</div>


@endsection

@push('script')

@endpush