@extends('client.layouts.layout')
@section('page')
@push('css')
<style>
    section.w3l-about-breadcrum {
        display: none;
    }
</style>
@endpush

@include('client.layouts.home')
@include('client.layouts.feature')
@include('client.layouts.about')
@include('client.layouts.course')
@include('client.layouts.form12')
@include('client.layouts.specifications')
@include('client.layouts.testimonials')
@include('client.layouts.news')
@endsection