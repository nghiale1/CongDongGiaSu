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
        <div class="col-md-9">
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
                        @if ($tutor->gs_toado)
                        <hr>
                        @include('client.pages.account.tutor.map')
                        @endif
                        <hr>
                        @include('client.pages.account.tutor.rating')


                    </div>
                </div>
            </div>


        </div>
        {{-- <div class="col1" style="    width: 2%;"></div> --}}
        <div class="col-md-3">
            @if (\Auth::check())
            @if (\Auth::user()->hasRole('HocVien'))

            <div class="white pad20 chat">
                @include('client.pages.account.tutor.chat')

            </div>
            @endif
            @endif
        </div>
    </div>
</div>
<br>
@endsection

@push('script')
{{-- <script
    src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&amp;libraries=places&amp;callback=initAutocomplete"
    type="text/javascript">
</script> --}}
<script>
    $(document).ready(function() {
$("#lat_area").addClass("d-none");
$("#long_area").addClass("d-none");
});
</script>
<script>
    // $(document).ready(function () {
    
    //     google.maps.event.addDomListener(window, 'load', initialize);
    //     function initialize() {
    //         var input = document.getElementById('autocomplete');
    //         var autocomplete = new google.maps.places.Autocomplete(input);
    //         autocomplete.addListener('place_changed', function() {
    //             var place = autocomplete.getPlace();
    //             $('#latitude').val(place.geometry['location'].lat());
    //             $('#longitude').val(place.geometry['location'].lng());
    //             // --------- show lat and long ---------------
    //             $("#lat_area").removeClass("d-none");
    //             $("#long_area").removeClass("d-none");
    //         });
    //     }
    // });
</script>
@endpush