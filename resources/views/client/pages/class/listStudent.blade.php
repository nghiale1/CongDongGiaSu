@extends('client.layouts.layout')
@section('head')
{{$lop->l_ten}}
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
        max-height: 100px;
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
                <a href="{{route('course.intro',$lop->l_id)}}">


                    <div class="content p-3">
                        <div class="row">
                            <div class="col-md-4">

                                <span class="float-right teacher-avatar"><img src="{{asset($lop->l_daidien)}}"
                                        alt="{{$lop->l_ten}}" load="lazy" style="max-height: 120px"></span>
                            </div>
                            <div class="col-md-8 p-3">

                                <h4 class="">Danh sách hoc viên của khoá học: <br> <strong>
                                        <p class="suggestion-title mr-3 mb-0 pt-3">

                                            {{$lop->l_ten}}
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
                <a href="{{route('student.profile',$item->hv_id)}}">


                    <div class="content p-3">
                        <div class="row">
                            <div class="col-md-4">

                                <span class="float-right teacher-avatar"><img src="{{asset($item->hv_hinhdaidien)}}"
                                        alt="{{$item->hv_hoten}}" load="lazy"></span>
                            </div>
                            <div class="col-md-8 p-3">

                                <h3 class=""> <strong>
                                        <p class="suggestion-title mr-3 mb-0 pt-3">
                                            {{$item->hv_hoten}}
                                        </p>
                                    </strong></h3>
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