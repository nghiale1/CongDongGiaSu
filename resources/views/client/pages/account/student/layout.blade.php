@extends('client.layouts.layout')

@push('css')
<style>
    .w3l-about-breadcrum {
        display: none;
    }

    .svg {

        border-radius: 50%;
        border-radius: 100%;
        width: 50px;
        height: 50px;
        line-height: 50px;
        padding: 0;
    }

    .svg img {
        color: white;
        width: 23px;
    }

    #Capa_1 {
        fill: red;
    }

    @include('client.pages.account.student.profile-css');

    author-thumb img {
        border-radius: 100%;
        overflow: hidden;
        display: block;
        width: 100%;
    }
</style>

@endpush

@section('page')

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                {{-- {{dd(Request::segment(2))}} --}}
                <input type="hidden" id="id" value="{{Request::segment(2)}}">
                <div class="top-header">
                    <div class="top-header-thumb">
                        <img loading="lazy" src="{{asset($student->hv_hinhnen)}}" alt="">
                    </div>

                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="{{route('student.profile',$student->hv_id)}}">Trang cá nhân</a>
                                    </li>
                                    <li>
                                        <a href="{{route('course.suggestion')}}">Gợi ý</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="control-block-button">
                                <a href="#" class="btn btn-control bg-blue" style="padding: 0!important;">
                                    <div class="svg" style="background-color: #046ee5;">

                                        <img src="{{asset('\client\svg\chat.svg')}}" alt="chat">
                                    </div>
                                </a>

                                <a href="{{route('student.wishlist')}}" class="btn btn-control bg-purple"
                                    style="padding: 0!important;">
                                    <div class="svg" style="background-color: #f7c68b;">

                                        <img src="{{asset('\client\svg\heart_full.svg')}}" alt="gia sư yêu thích">
                                        {{-- <img src="\client\svg\heart.svg" alt=""> --}}
                                    </div>
                                </a>

                                <a href="{{route('student.tutorNear',$student->hv_id)}}"
                                    class="btn btn-control bg-purple" style="padding: 0!important;">
                                    <div class="svg" style="background-color: #e9eaee;">

                                        <img src="{{asset('\client\svg\location.svg')}}" alt="gia sư gần bạn">
                                        {{-- <img src="\client\svg\heart.svg" alt=""> --}}
                                    </div>
                                </a>


                            </div>
                            <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="{{route('student.tutorNear',$student->hv_id)}}">Gia sư gần bạn</a>
                                    </li>
                                    <li>
                                        <a href="">Khóa học</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-header-author">
                        <a href="#" class="author-thumb">
                            <img loading="lazy" src="{{asset($student->hv_hinhdaidien)}}" alt="{{$student->hv_hoten}}">
                        </a>
                        <div class="author-content">
                            <a href="#" class="h4 author-name">{{$student->hv_hoten}}</a>
                            {{-- <div class="country">San Francisco, CA</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')

@endsection

@push('script')
@endpush