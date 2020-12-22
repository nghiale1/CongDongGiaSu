@extends('client.pages.account.student.layout')
@section('head')
{{$student->hv_hoten}}
@endsection
@section('breadcrum')
Gợi ý khoá học
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


@section('content')
<br>
<div class="container">
    <div class="ml-3 mr-3">

        @if ($yeuthich->isNotEmpty())
        <div class="row white">
            <div class="col-md-12 mt-3">
                <h4>Khoá học của gia sư yêu thích</h4><br>
            </div>


            @foreach ($yeuthich as $item)
            <div class="col-md-3 mb-4">

                <div class="sugg white hover">
                    <a href="{{route('course.intro',$item->l_id)}}">
                        <img src="{{asset($item->l_daidien)}}" alt="{{$item->l_ten}}" load="lazy"
                            class="suggestion-avatar rounded-top pb-1">
                        <strong>
                            <p class="suggestion-title ml-3 mr-3">
                                {{$item->l_ten}}
                            </p>
                        </strong>

                        <div class="content pl-3 pr-3 pb-3">
                            <div class="row">
                                <div class="col-md-4">

                                    <span class="float-right teacher-avatar"><img src="{{asset($item->gs_hinhdaidien)}}"
                                            alt=""></span>
                                </div>
                                <div class="col-md-8">

                                    <span class=""> Lê Minh Nghĩa</span><br>
                                    <span>

                                        {{number_format($item->l_hocphi)  }} đ
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        @endif
        @if ($goiy->isNotEmpty())
        <div class="row white">
            <div class="col-md-12 mt-3">
                <h4>Khoá học gợi ý</h4><br>
            </div>
            @foreach ($goiy as $item)
            <div class="col-md-3 mb-4">

                <div class="sugg white hover">
                    <a href="{{route('course.intro',$item->l_id)}}">
                        <img src="{{asset($item->l_daidien)}}" alt="{{$item->l_ten}}" load="lazy"
                            class="suggestion-avatar rounded-top pb-1">
                        <strong>
                            <p class="suggestion-title  ml-3 mr-3">
                                {{$item->l_ten}}
                            </p>
                        </strong>
                        <div class="content pl-3 pr-3 pb-3">
                            <div class="row">
                                <div class="col-md-4">

                                    <span class="float-right teacher-avatar"><img src="{{asset($item->gs_hinhdaidien)}}"
                                            alt=""></span>
                                </div>
                                <div class="col-md-8">

                                    <span class=""> Lê Minh Nghĩa</span><br>
                                    <span>

                                        {{number_format($item->l_hocphi)  }} đ
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection