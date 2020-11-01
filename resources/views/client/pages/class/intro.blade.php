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


                    <div class="course-description">{{$lop->l_mota}}</div>
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
                            <div class="new-tag"></div><span class="teached"></span> đánh giá
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

                <p class="l_gioithieu">{!!$lop->l_gioithieu!!}</p>
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
            </div>
            <br>
            <div class="white padding" id="curriculum">
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




                <div id="video">
                </div>

                <button class="edit" data-for="" data-text="Thêm mô tả" data-height="">Chỉnh sửa</button>
                <div class="curriculum-lesson-container">
                    <div class="curriculum-chapter-container">
                        @foreach ($lesson as $item)

                        <button class="btn" type="button" data-toggle="collapse" data-target="#collapse-container-1"
                            aria-expanded="false" aria-controls="collapse-container-1"
                            style="width:100%;padding:0px;height: 60px;">
                            <div class="curriculum-chapter">
                                <div class="chapter-name text-left"><span style="color: red;z-index: 999;"><i
                                            class="fa fa-times" aria-hidden="true"></i>&nbsp;</span>{{$item->c_ten}}
                                </div>
                                <div class="chappter-lesson-count">4 Bài<div class="collapse-icon collapse-down"
                                        toggle-target="collapse-container-1"></div>
                                </div>
                            </div>
                        </button>

                        <div class="collapse" id="collapse-container-1" style="">
                            <br>
                            @foreach ($item->video as $item2)

                            <a href="#" class="playVideo" data-src="{{$item2->v_duongdan}}">
                                <div class="chappter-lesson">
                                    <div class="lesson-name-container">

                                        <img alt="1: Khóa học lập trình ReactJS tại ZendVN"
                                            src="{{asset('client/img/ezgif.com-gif-maker.png')}}" width="24"
                                            height="24">
                                        <div class="lesson-name">{{$item2->v_ten}}</div>
                                    </div>
                                    <div class="lesson-timer">{{$item2->v_dodai}}</div>
                                </div>
                                <div class="separate-line"></div>
                            </a>
                            @endforeach
                            <button type="button" class="btn btn-info btnUploadVideo" data-toggle="modal"
                                data-target="#exampleModal1" data-lesson="{{$item->c_id}}">
                                Thêm video
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
            <div class="white padding" id="teacher">
                <div class="row">
                    @include('client.pages.class.info')
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

<!-- Modal Upload file-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tải tệp lên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('uploadVideo')}}" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="lesson" id="lessonUpload">
                        <div class="file-loading">
                            <label for="input-res-1">Tải file
                            </label>
                            <input id="input-res-1" name="file" type="file" multiple style="display: none">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="uploadImage">Upload</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
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
                $('#video')[0].scrollIntoView();
            // window.scrollTo(0, document.getElementById('video').offsetTop - document.getElementsByClassName('header')[0].offsetHeight);
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.btnUploadVideo').click(function (e) { 
            e.preventDefault();
            let lesson=$(this).attr('data-lesson');
            $('#lessonUpload').val(lesson);
        });
    });
</script>

@endpush