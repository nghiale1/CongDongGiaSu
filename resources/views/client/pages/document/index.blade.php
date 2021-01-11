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
<br>
<div class="container">
    <div class="white p-4">
        <div class="row" style="margin-bottom: 20px;" id="right-click-bg">
            <div class="col-md-12">

                <br>
            </div>
            @foreach ($doc as $item)

            @include('client.pages.document.folder')
            @endforeach
        </div>
    </div>
</div>

@endsection

@push('script')
@include('client.pages.document.script')
@endpush