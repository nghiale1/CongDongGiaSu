@extends('client.layouts.layout')
@section('head')
Cộng đồng gia sư
@endsection
@section('breadcrum')
Cộng đồng gia sư
@endsection
@push('css')
<style>
    .breadcrum-bg {
        display: none;
    }

    input::-webkit-calendar-picker-indicator {
        opacity: 0;
    }
</style>
@endpush

@section('page')
<section class="w3l-main-slider" id="home">
    <!-- main-slider -->
    <br><br>
    <center>

        <h1 style="font-size: 70px;
    font-weight: 900;">404</h1>
        <button class="btn btn-light">

            <a href="javascript:history.go(-1)">Trờ lại</a>
        </button>
    </center>
    <!-- /main-slider -->
</section>
@endsection

@push('script')

@endpush