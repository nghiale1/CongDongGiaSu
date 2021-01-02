@extends('admin.layouts.layout')
@section('head')
Báo cáo chưa xữ lý
@endsection
@push('css')
<style>
    .tooltip {
        position: relative;
        display: inline-block;
        opacity: 1;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: 150%;
        left: 50%;
        margin-left: -60px;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent black transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }
</style>
@endpush
@section('page')

<!-- main content start -->
<div class="main-content">
    <br>
    <br>
    <!-- content -->
    <table class="table table-striped  table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên lớp</th>
                <th>Tên học viên báo cáo</th>
                <th>Tên gia sư</th>
                <th>Nội dung báo cáo</th>
                <th>Thời gian</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($report as $key=>$item)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->l_ten}}</td>
                <td>{{$item->hv_hoten}}</td>
                <td>{{$item->gs_hoten}}</td>
                <td>{{$item->bc_noidung}}</td>
                <td>{{date('d-m-Y H:i:s', strtotime($item->bc_ngaytao))}}</td>
                <td>
                    <a href="{{route('dashboard.protectCourse',$item->bc_id)}}" class="">
                        <span class="tooltip">

                            <i class="fa fa-hand-paper" aria-hidden="true"></i>
                            <span class="tooltiptext">Từ chối báo cáo</span>
                        </span>
                    </a>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <a href="{{route('course.intro',$item->l_id)}}" target="__blank" class="tooltip">

                        <i class="fa fa-info" aria-hidden="true"></i><span class="tooltiptext">Chi tiết khoá học</span>
                    </a>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <a href="{{route('dashboard.removeCourse',$item->l_id)}}" style="color: red" class="tooltip">
                        <i class="fa fa-times" aria-hidden="true"></i><span class="tooltiptext">Xoá khoá học</span>
                    </a>
                </td>
            </tr>
            @endforeach
            <tr>
        </tbody>
    </table>
    <!-- //content -->
</div>
<!-- main content end-->
@endsection