@extends('client.layouts.layout')
@section('head')
Cộng đồng gia sư | Danh sách lớp
@endsection
@section('breadcrum')
Danh sách lớp
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('client/list_class/style.css')}}">
{{-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,600'>
<link rel='stylesheet' href='https://pennypixels.pennymacusa.com/css/1_4_1/pp.css'>
<link rel="stylesheet" href="{{asset('client/list_class/two-point-range-slider/style.css')}}"> --}}
@endpush

@section('page')
<div class="container ">
    <br>
    <div class="row">
        <div class="col-md-3 opensan">
            <h4 class="title" style="font-weight: 300;">Lọc kết quả</h4>
            <br>
            <form class="" method="get" action="/match/search">
                <div class="medium-hide">
                    <label class="title" for="sort">Sắp xếp theo</label>
                    <select name="sort" id="sort" class="form-control">
                        <option value="1" selected="">
                            Phù hợp nhất
                        </option>
                        <option value="2">
                            Giá thấp
                        </option>
                        <option value="3">
                            Giá cao
                        </option>
                        <option value="4">
                            Đánh giá
                        </option>
                    </select>
                </div>


                <br>
                <div class="voice">
                    <label for="" class="title">Giọng nói</label>

                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="south" name="south"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="south">Miền Nam</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="central" name="central"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="central">Miền Trung</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="northern" name="northern"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="northern">Miền Bắc</label>
                    </div>

                </div>

                <br>
                <div class="weeksday">
                    <label class="title" for="availability-selection">Thứ dạy</label>

                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="monday" name="monday"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="monday">Thứ 2</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="tuesday" name="tuesday"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="tuesday">Thứ 3</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="wednesday" name="wednesday"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="wednesday">Thứ 4</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="thursday" name="thursday"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="thursday">Thứ 5</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="friday" name="friday"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="friday">Thứ 6</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="saturday" name="saturday"
                            value="true" checked="">
                        <label class="hide medium-show-inline-block" for="saturday">Thứ 7</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block" type="checkbox" id="sunday" name="sunday"
                            value="true">
                        <label class="hide medium-show-inline-block" for="sunday">Chủ nhật</label>
                    </div>
                </div>

                <br>

                <div class="gender">

                    <label class="title" for="gender">Giới tính</label>
                    <select id="gender" class="form-control" name="gender">
                        <option value="none" selected="">Không phân biệt</option>
                        <option value="male">Nam</option>
                        <option value="female">Nữ</option>
                    </select><br>
                </div>
                <input type="checkbox" id="backgroundCheck" name="bc" value="true">
                <label class="title" for="backgroundCheck"><strong>Đã kiểm tra lý lịch</strong></label>
                <br>
                <br>
                <div class="level-student">
                    <label class="title" for="level"><strong>Trình độ học viên</strong></label>
                    <select class="form-control" name="level">
                        <option value="0" selected="">
                            Bất kỳ
                        </option>
                        <option value="1">
                            Tiểu học
                        </option>
                        <option value="2">
                            Trung học
                        </option>
                        <option value="3">
                            Phổ thông
                        </option>
                        <option value="4">
                            Đại học
                        </option>
                        <option value="5">
                            Khác
                        </option>
                    </select>
                </div>
            </form>

        </div>

        <div class="col-md-9 ">

            <div class="flex">
                <div class=" mt-auto mb-auto mr-auto">
                    <h5 class="light-header" style="">
                        <strong>667 web tutors</strong> fit your choices
                    </h5>
                </div>
                <form class="hide " method="get" action="">
                    <div class="flex">
                        <label class=" mt-auto ml-auto" for="desktop-sort">Sắp xếp: &nbsp;</label>
                        <div>
                            <select name="desktop-sort" id="desktop-sort" class="form-control">
                                <option value="1" selected="">
                                    Phù hợp nhất
                                </option>
                                <option value="2">
                                    Giá thấp
                                </option>
                                <option value="3">
                                    Giá cao
                                </option>
                                <option value="4">
                                    Đánh giá
                                </option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <br>


            <div class="border white">
                <a href="" class="tutor-card">
                    <div class="tutor">

                        <div class="row">
                            <div class="col-md-2 avatar">

                                <div class="profile-image ">
                                    <img src="https://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ad7d5bff-f685-4e5f-9d23-1a36957c43cc.jpg"
                                        alt="Jonathan S.'s Photo">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5 class="name">Jonathan S.</h5>
                                <h4 class="text-blue ">An experienced C# Programmer with a passion
                                    for
                                    teaching.</h4>
                                <p class="text-gray ">
                                    In the past, I completed two certifications in <b>Web</b> Design. My first
                                    certification
                                    is
                                    the HTML5 and CSS3 Specialist. My second certification is in User Interface Design.
                                    Both
                                    of
                                    these...
                                    <span class="text-blue text-nowrap">read more</span>
                                </p>
                            </div>
                            <div class="col-md-3" style="border-left: 1px solid #d8d6d6;">
                                <table class="table table-borderless tutor-card-stats">
                                    <tr>
                                        <td>
                                            <div class="rate">

                                                <h5>

                                                    $55<span class="hour">/hour</span>
                                                </h5>
                                            </div>
                                        </td>
                                    <tr>

                                        <td>
                                            <div class="review" style="    font-size: 14px;">
                                                <span class="star-white">

                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <span class="star-yellow" style="width:50%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <span class="review_text" style="font-size: 14px">

                                                <strong>5.0</strong>
                                                <span class="text-gray">(255)</span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <span class="teached">10</span>

                                            <span class="teached-class">

                                                lớp đã dạy
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <i class="fa fa-map-marker" aria-hidden="true" style="color: #32cf3a"></i>

                                            <span>
                                                <b>

                                                    <span class="address">Hiệp Bình Chánh, Thủ Đức</span>
                                                </b>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="border white">
                <a href="" class="tutor-card">
                    <div class="tutor">

                        <div class="row">
                            <div class="col-md-2 avatar">

                                <div class="profile-image ">
                                    <img src="https://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ad7d5bff-f685-4e5f-9d23-1a36957c43cc.jpg"
                                        alt="Jonathan S.'s Photo">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5 class="name">Jonathan S.</h5>
                                <h4 class="text-blue ">An experienced C# Programmer with a passion
                                    for
                                    teaching.</h4>
                                <p class="text-gray ">
                                    In the past, I completed two certifications in <b>Web</b> Design. My first
                                    certification
                                    is
                                    the HTML5 and CSS3 Specialist. My second certification is in User Interface Design.
                                    Both
                                    of
                                    these...
                                    <span class="text-blue text-nowrap">read more</span>
                                </p>
                            </div>
                            <div class="col-md-3" style="border-left: 1px solid #d8d6d6;">
                                <table class="table table-borderless tutor-card-stats">
                                    <tr>
                                        <td>
                                            <div class="rate">

                                                <h5>

                                                    $55<span class="hour">/hour</span>
                                                </h5>
                                            </div>
                                        </td>
                                    <tr>

                                        <td>
                                            <div class="review" style="    font-size: 14px;">
                                                <span class="star-white">

                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <span class="star-yellow" style="width:50%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <span class="review_text" style="font-size: 14px">

                                                <strong>5.0</strong>
                                                <span class="text-gray">(255)</span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <span class="teached">10</span>

                                            <span class="teached-class">

                                                lớp đã dạy
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <i class="fa fa-map-marker" aria-hidden="true" style="color: #32cf3a"></i>

                                            <span>
                                                <b>

                                                    <span class="address">Hiệp Bình Chánh, Thủ Đức</span>
                                                </b>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<br>
@endsection

@push('script')
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('client/list_class/two-point-range-slider/script.js')}}"></script> --}}

@endpush