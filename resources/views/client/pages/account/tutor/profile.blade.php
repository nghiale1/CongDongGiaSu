@extends('client.layouts.layout')
@section('head')
{{$tutor->gs_hoten}}
@endsection
@section('breadcrum')
Giới thiệu
@endsection
@push('css')
<style>
    @include('client.pages.account.tutor.profile-css');
</style>
@endpush

@section('page')
<div class="container pt-3">
    <div class="row ">
        <div class="col-md-8">
            <div class="white pad20">
                <div class="row">
                    @include('client.pages.account.tutor.info')
                    <div class="col-md-12">
                        <hr>

                        @include('client.pages.account.tutor.educa')
                        <hr>

                        {{-- @include('client.pages.account.tutor.job')
                        <hr> --}}
                        @include('client.pages.account.tutor.degree')
                        <hr>

                        @include('client.pages.account.tutor.schedule')
                        <hr>

                        @include('client.pages.account.tutor.subject')
                        <hr>
                        @include('client.pages.account.tutor.rating')


                    </div>
                </div>
            </div>


        </div>
        {{-- <div class="col1" style="    width: 2%;"></div> --}}
        <div class="col-md-4">
            <div class="white pad20 chat">
                @include('client.pages.account.tutor.chat')

            </div>
        </div>
    </div>
</div>
<br>
@endsection

@push('script')
@endpush