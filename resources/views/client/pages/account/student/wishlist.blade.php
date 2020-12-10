@extends('client.pages.account.student.layout')
@section('head')
{{$student->hv_hoten}}
@endsection
@section('breadcrum')
Danh sách gia sư yêu thích
@endsection
@push('css')
<style>

</style>

@endpush

@section('content')
<div class="container">

    @foreach ($yeuthich as $item)

    <div class="border white">
        <a href="{{route('tutor.profile',$item->gs_id)}}" class="tutor-card">
            <div class="tutor">

                <div class="row">
                    <div class="col-md-2 avatar">

                        <div class="profile-image ">
                            <img src="{{asset($item->gs_hinhdaidien)}}" alt="{{$item->gs_hoten}}">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5 class="name">{{$item->gs_hoten}}</h5>
                        <h4 class="text-blue ">{{$item->gs_motangan}}</h4>
                        <br>
                        <p class="text-gray ">
                            {{$item->descrip}}
                            <span class="text-nowrap" style="color: #017acd">xem thêm</span>
                        </p>
                    </div>
                    <div class="col-md-3" style="border-left: 1px solid #d8d6d6;">
                        <table class="table table-borderless tutor-card-stats">
                            <tr>
                                <td>
                                    <div class="rate">

                                        <h5>

                                            {{number_format($item->gs_mucluong)}}<span class="hour">
                                                đ/giờ</span>
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
    @endforeach

</div>
@endsection