@extends('client.layouts.layout')
@section('head')
{{$tutor->gs_hoten}}
@endsection
@section('breadcrum')
Danh sách khoá học
@endsection
@push('css')
<style>
    .suggestion-avatar {
        width: 100%;
        height: 195px;
    }

    .suggestion-title {
        min-height: 60px;
        line-height: 20px;
        margin: 0 0 16px;
        overflow: hidden;
        display: block;
        text-align: left;
    }

    .teacher-avatar {
        display: contents;
    }

    .teacher-avatar img {
        width: 100%;
    }

    .hover:hover {
        /* border: 1px solid grey; */
        box-shadow: rgb(0 0 0 / 32%) 0px 0px 20px;
    }
</style>
@endpush

@section('page')
<div class="container pt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="sugg white hover">
                <a href="{{route('tutor.profile',$tutor->gs_id)}}">


                    <div class="content p-3">
                        <div class="row">
                            <div class="col-md-4">

                                <span class="float-right teacher-avatar"><img src="{{asset($tutor->gs_hinhdaidien)}}"
                                        alt="{{$tutor->gs_hoten}}" load="lazy" style="max-height: 120px"></span>
                            </div>
                            <div class="col-md-8 p-3">

                                <h4 class="">Danh sách khoá học của gia sư: <br> <strong>
                                        <p class="suggestion-title mr-3 mb-0 pt-3">

                                            {{$tutor->gs_hoten}}
                                        </p>
                                    </strong></h4>


                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-12"><br></div>
        <div class="col-md-12">
            @foreach ($list as $item)


            <div class="sugg white hover">
                <a href="{{route('course.intro',$item->l_id)}}">


                    <div class="content p-3">
                        <div class="row">
                            <div class="col-md-4">

                                <span class="float-right teacher-avatar"><img src="{{asset($item->l_daidien)}}"
                                        alt="{{$item->l_ten}}" load="lazy"></span>
                            </div>
                            <div class="col-md-8 p-3">

                                <h3 class=""> <strong>
                                        <p class="suggestion-title mr-3 mb-0 pt-3">
                                            {{$item->l_ten}}
                                        </p>
                                    </strong></h3>
                                <span>{{$tutor->gs_hoten}}</span><br>
                                <h4>

                                    {{number_format($item->l_hocphi)  }} đ
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br>
@endsection

@push('script')

@endpush