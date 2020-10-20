@extends('client.layouts.layout')
@section('head')
Tài liệu gia sư

@endsection
@section('breadcrum')
Gia sư / Tài liệu gia sư
@endsection
@push('css')
@include('client.layouts.upload')
<style>
    a.down {
        position: absolute;
        top: 22 %;
        right: 10%;
        z-index: 9999;
    }
</style>
@endpush

@section('page')

<div class="container">
    <div class="row" style="margin-bottom: 20px;" id="right-click-bg">
        <div class="col-md-12">

            <h1 class="text-center">Thư mục môn học đã tạo</h1>
            <p style="border-top: 2px solid blue;"></p>
        </div>
        <div class="col-md-12">

            <br>
            <br>
        </div>
        @foreach ($doc as $item)

        @include('client.pages.document.folder')
        @endforeach
    </div>
</div>

@endsection

@push('script')
@include('client.pages.document.script')
@endpush