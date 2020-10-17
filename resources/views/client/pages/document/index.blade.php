@extends('client.layouts.layout')
@section('head')
Tài liệu gia sư

@endsection
@section('breadcrum')
Gia sư / Tài liệu gia sư
@endsection
@push('css')
@include('client.layouts.upload')
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

        <div class="col-md-3">
            <div class="folder">
                <a href="{{route('document.tutor.into',$item->tmgs_slug)}}" class="btn btn-outline-dark mt-1 mb-1"
                    style="width: 100%;" id="right-click" data-id="{{ $item->tmgs_id   }}">
                    <h5 style="font-size: 12px;padding:5px; ">
                        <i class="fa fa-folder" aria-hidden="true"></i> {{ $item->tmgs_ten }}
                    </h5>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@push('script')
@include('client.pages.document.script')
@endpush