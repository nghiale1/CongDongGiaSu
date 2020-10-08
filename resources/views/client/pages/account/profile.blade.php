@extends('client.layouts.layout')
@section('head')
James Spiegel
@endsection
@section('breadcrum')
Giới thiệu
@endsection
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

    @include('client.pages.account.profile-css');

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

                <div class="top-header">
                    <div class="top-header-thumb">
                        <img loading="lazy" src="hand-read-board-underwater-blackboard-training-797673-pxhere.com.jpg"
                            alt="">
                    </div>

                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    {{-- <li>
                                        <a href="02-ProfilePage.html" class="active">Dòng thời gian</a>
                                    </li> --}}
                                    <li>
                                        <a href="05-ProfilePage-About.html">Cá nhân</a>
                                    </li>
                                    <li>
                                        <a href="06-ProfilePage.html">Học vấn</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="control-block-button">
                                <a href="#" class="btn btn-control bg-blue" style="padding: 0!important;">
                                    <div class="svg" style="background-color: #38a9ff;">

                                        <img src="\client\svg\chat.svg" alt="">
                                    </div>
                                </a>

                                <a href="#" class="btn btn-control bg-purple" style="padding: 0!important;">
                                    <div class="svg" style="background-color: #f7c68b;">

                                        <img src="\client\svg\heart_full.svg" alt="">
                                        {{-- <img src="\client\svg\heart.svg" alt=""> --}}
                                    </div>
                                </a>

                                <a href="#" class="btn btn-control bg-purple" style="padding: 0!important;">
                                    <div class="svg" style="background-color: #fdc800;">

                                        <img src="\client\svg\rating.svg" alt="">
                                        {{-- <img src="\client\svg\heart.svg" alt=""> --}}
                                    </div>
                                </a>


                            </div>
                            <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    {{-- <li>
                                        <a href="07-ProfilePage-Photos.html">Hình ảnh</a>
                                    </li> --}}
                                    <li>
                                        <a href="09-ProfilePage-Videos.html">Lớp dạy</a>
                                    </li>
                                    <li>
                                        <a href="09-ProfilePage-Videos.html">Đánh giá</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-header-author">
                        <a href="02-ProfilePage.html" class="author-thumb">
                            <img loading="lazy"
                                src="hand-read-board-underwater-blackboard-training-797673-pxhere.com.jpg" alt="author">
                        </a>
                        <div class="author-content">
                            <a href="02-ProfilePage.html" class="h4 author-name">James Spiegel</a>
                            <div class="country">San Francisco, CA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('client.pages.account.about') --}}
@include('client.pages.account.timeline')

@endsection

@push('script')

@endpush