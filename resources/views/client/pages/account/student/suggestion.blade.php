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
        width: 20%;
    }
</style>
@endpush


@section('content')
<br>
<div class="container">
    <div class="row">
        @foreach ($yeuthich as $item)
        <div class="col-md-3">

            <div class="sugg white">
                <a href="{{route('course.intro',$item->l_id)}}">
                    <img src="{{asset($item->l_daidien)}}" alt="{{$item->l_ten}}" load="lazy"
                        class="suggestion-avatar rounded-top pb-1">
                    <strong>
                        <p class="suggestion-title">
                            {{$item->l_ten}}
                        </p>
                    </strong>

                    <div class="content pl-3 pr-3">
                        <span class="float-right teacher-avatar"><img src="{{asset($item->gs_hinhdaidien)}}"
                                alt=""></span>
                        <span class=""> Lê Minh Nghĩa</span>
                    </div>
                    <div class="fee">
                        {{number_format($item->l_hocphi)  }} đ
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        @foreach ($goiy as $item)
        <div class="col-md-3">

            <div class="sugg white">
                <a href="{{route('course.intro',$item->l_id)}}">
                    <img src="{{asset($item->l_daidien)}}" alt="{{$item->l_ten}}" load="lazy"
                        class="suggestion-avatar rounded-top pb-1">
                    <strong>
                        <p class="suggestion-title">
                            {{$item->l_ten}}
                        </p>
                    </strong>

                    <div class="content pl-3 pr-3">
                        <span class="float-right teacher-avatar"><img src="{{asset($item->gs_hinhdaidien)}}"
                                alt=""></span>
                        <span class=""> Lê Minh Nghĩa</span>

                    </div>
                    <div class="fee">
                        {{number_format($item->l_hocphi)  }} đ
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>