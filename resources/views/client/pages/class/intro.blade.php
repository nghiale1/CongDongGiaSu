@extends('client.layouts.layout')
@section('head')
{{$lop->l_ten}}
@endsection
@section('breadcrum')
Công nghệ thông tin / {{$lop->l_ten}}
@endsection
@push('css')
<style>
    @include('client.pages.class.intro-css');

    textarea {
        resize: none;
        overflow: hidden;
        min-height: 50px !important;
        max-height: 100px;
        background-color: #e4e6eb;
    }

    .btn-hide,
    .btn-update {
        background-color: #e4e6eb;
    }

    .btn-hide:hover,
    .btn-update:hover {
        border: 1px solid #65676b;
        background-color: #9b9ea3;
    }

    .playVideo:active {
        background-color: red;
    }
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

                    @if(\Auth::check())
                    @if(\Auth::user()->kiemTraLopHoc($lop->l_id))

                    <form action="{{route('updateCourseName')}}" method="post" class="frmcourse_name hide">
                        @csrf
                        <input type="hidden" name="id" value="{{$lop->l_id}}">
                        <textarea type="hidden" placeholder="Thêm tên lớp" class="tare-edit textarea-course_name"
                            oninput="auto_grow(this)" name="data">{!!$lop->l_ten!!}</textarea>
                        <button class="btn btn-hide" data-close="course_name" type="button">Hủy</button>
                        <button class="btn btn-update" type="submit">Lưu</button>
                    </form>
                    <button class="edit course_name" data-obj="course_name"
                        data-text="Thêm thông tin giới thiệu khoá học" data-height="">Chỉnh
                        sửa</button>
                    <br>
                    @endif
                    @endif



                    <div class="course-description">{!!$lop->l_mota!!}</div>
                    @if(\Auth::check())
                    @if(\Auth::user()->kiemTraLopHoc($lop->l_id))
                    <form action="{{route('updateCourseDescription')}}" method="post"
                        class="frmcourse-description hide">
                        @csrf
                        <input type="hidden" name="id" value="{{$lop->l_id}}">
                        <textarea type="hidden" placeholder="Thêm mô tả lớp"
                            class="tare-edit textarea-course-description" oninput="auto_grow(this)"
                            name="data">{!!$lop->l_mota!!}</textarea>
                        <button class="btn btn-hide" data-close="course-description" type="button">Hủy</button>
                        <button class="btn btn-update" type="submit">Lưu</button>
                    </form>

                    <button class="edit course-description" data-obj="course-description"
                        data-text="Thêm thông tin giới thiệu khoá học" data-height="">Chỉnh
                        sửa</button>
                    <br>
                    @endif
                    @endif


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
                            <div class="student-count"><span class="teached">{{$countHV}}</span>
                                học
                                viên
                            </div>
                        </div>
                        <div class="rating-area">
                            <div class="new-tag"></div><span class="teached">{{$lop->danhgia['tong']}}</span> đánh giá
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="white ">
                <div class="sub-menu">

                    <a href="#info" class="active info">Thông tin chung</a>
                    <a href="#curriculum" class="curriculum">Giáo trình</a>
                    <a href="#teacher" class="teacher">Giảng viên</a>
                </div>
            </div>

            <br>
            <div class="white padding" id="info">

                <table class="table table-bordered">
                    <tr>
                        <td style="width:30%">Ngày bắt đầu:</td>
                        <td>{!!$lop->l_ngaybatdau !!}</td>
                    </tr>
                    <tr>
                        <td>Ngày kết thúc:</td>
                        <td>{!!$lop->l_ngayketthuc !!}</td>
                    </tr>
                    <tr>
                        <td>Số lượng học viên:</td>
                        <td>{{$lop->l_soluong}}</td>
                    </tr>
                    <tr>
                        <td>Số buổi:</td>
                        <td>{{$lop->l_sobuoi}}</td>
                    </tr>
                    <tr>
                        <td>Buổi học:</td>
                        <td>
                            @foreach ($buoihoc as $key=>$item)
                            {{$item->tgd_ten}}
                            @if ($key+1 < count($buoihoc)) , @endif @endforeach </td> </tr> <tr>
                        <td>Địa chỉ:</td>
                        <td>{{$lop->l_diachi}}</td>
                    </tr>
                </table>
            </div> <br>
            <div class="white padding">
                <p class="l_gioithieu">{!!$lop->l_gioithieu!!}</p>
                @if(\Auth::check())
                @if(\Auth::user()->kiemTraLopHoc($lop->l_id))

                <form action="{{route('updateCourseIntro')}}" method="post" class="frml_gioithieu hide">
                    @csrf
                    <input type="hidden" name="id" value="{{$lop->l_id}}">
                    <textarea type="hidden" placeholder="Thêm tên lớp" class="tare-edit textarea-l_gioithieu"
                        oninput="auto_grow(this)" name="data">{!!$lop->l_gioithieu!!}</textarea>
                    <button class="btn btn-hide" data-close="l_gioithieu" type="button">Hủy</button>
                    <button class="btn btn-update" type="submit">Lưu</button>
                </form>
                <button class="edit l_gioithieu" data-obj="l_gioithieu" data-text="Thêm thông tin giới thiệu khoá học"
                    data-height="">Chỉnh
                    sửa</button>
                @endif
                @endif

            </div>
            <br>
            <div class="white padding" id="teacher">
                @include('client.pages.class.rating')
            </div>
            <br>

            <div class="white padding" id="curriculum">
                <div class="title">
                    Giáo trình
                </div>
                <?php if (\Auth::check()): ?>
                <?php if (\Auth::user()->kiemTraGiaoDich($lop->l_id)): ?>
                <span>
                    <button type="button" class="btn" data-toggle="modal" data-target="#report" style="color: red">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    </button>

                </span>

                <?php endif ?>
                <?php endif ?>

                <!-- Modal -->
                <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="reportLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{route('course.report')}}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reportLabel">Báo cáo khoá học</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="l_id" value="{{$lop->l_id}}">
                                    <textarea name="content" id="" cols="55" rows="10"
                                        placeholder="Nội dung báo cáo"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Gửi lên quản trị
                                        viên</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="curriculum-overview">
                    <div class="curriculum-type">
                        Thể loại: <span>CNTT</span>
                    </div>
                    <div class="curriculum-lessons">
                        <div class="curriculum-lessons-number">
                            Số bài: <span>{{$countVideo}}</span>
                        </div>
                        <div class="curriculum-time">
                            Thời lượng: <span>{{$minute}}:{{$second}}</span>
                        </div>
                    </div>
                </div>
                <?php if (\Auth::check()): ?>

                <?php if (\Auth::user()->kiemTraLopHoc($lop->l_id)): ?>
                <a class="btn btn-grey inline float-md-left save" href="{{route('listHV',$lop->l_id)}}">
                    <span style="font-weight: 600;">
                        Xem danh sách học viên</span>
                </a>
                <br>
                <br>
                <?php endif ?>
                <?php endif ?>



                <div id="scrollIntoView"></div>
                <div id="video"></div>

                @include('client.pages.class.video')
                @include('client.pages.class.file')
            </div>
            <br>
            <div class="white padding" id="teacher">
                <div class="row">
                    @include('client.pages.class.info')
                </div>
            </div>
            <br>
        </div>
        <div class="col-md-4">
            @include('client.pages.class.suggestion')
        </div>
    </div>
</div>

<br>
@endsection

@push('script')
@include('client.pages.class.script')
<script>
    $(document).ready(function () {
        $('.curriculum').click(function (e) { 
            // e.preventDefault();
            $('.curriculum').removeClass('active');
            $('.info').removeClass('active');
            $('.teacher').removeClass('active');
            $(this).addClass('active');
        });
        $('.info').click(function (e) { 
            // e.preventDefault();
            $('.curriculum').removeClass('active');
            $('.info').removeClass('active');
            $('.teacher').removeClass('active');
            $(this).addClass('active');
        });
        $('.teacher').click(function (e) { 
            // e.preventDefault();
            $('.curriculum').removeClass('active');
            $('.info').removeClass('active');
            $('.teacher').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>
    function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}
</script>
<script>
    $(document).ready(function () {
        $('.btn-hide').click(function (e) { 
            e.preventDefault();
            let obj=$(this).attr('data-close');
            $('.frm'+obj).hide();
            
            $('.'+obj).show();
        });
        $('.edit').click(function (e) { 
            e.preventDefault();
            let obj=$(this).attr('data-obj');
            let height=$('.'+obj).height();
            if(height<50){
                height=50;
            }
            $('.'+obj).hide();
            $('.frm'+obj).show();
            $('.textarea-'+obj).innerHeight(height+'px');
        });
    });
</script>
<?php if (\Auth::check()): ?>
<?php if (\Auth::user()->kiemTraLopHoc($lop->l_id) || \Auth::user()->hasRole('Admin') || \Auth::user()->kiemTraGiaoDich($lop->l_id)): ?>
<script>
    $(document).ready(function () {
        $('.playVideo').click(function (e) { 
            // e.preventDefault();

            let src=$(this).attr('data-src');
            let url='{{asset(":id")}}';
            url = url.replace(':id', src);
            let data='<video width="100%" controls>';
                data+= '<source src="'+url+'" type="video/mp4">';
                data+='</video>';
                
                $('#video').html(data);
                // cuộn màn hình video
                $('html, body').animate({
                    scrollTop: $("#video").offset().top-70
                }, 1000);
        });
    });
</script>
<?php endif ?>
<?php endif ?>

@endpush