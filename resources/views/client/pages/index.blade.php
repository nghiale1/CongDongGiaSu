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
    <div class="companies20-content">

        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">

                                    <form class="position-relative my-2 my-lg-0" style="width: 83%;text-align:center"
                                        method="get" action="{{route('search')}}">
                                        <input class="form-control search" type="search" placeholder="Tìm kiếm..."
                                            name="search" aria-label="Search" required="" style="height: 45px;">
                                        {{-- @csrf --}}
                                        {{-- <select class="selectpicker search" data-live-search="true" name="chuyen_mon"
                                            placeholder="Nhập môn học" data-width="100%">
                                            @foreach ($chuyenmon as $item)

                                            <option data-tokens="{{$item->cm_id}}" value="{{$item->cm_ten}}">
                                        {{$item->cm_ten}}</option>
                                        @endforeach
                                        </select>
                                        <button class="btn btn-search position-absolute" type="submit" style="top: 0px;"
                                            id="btnSearchSubject"><span class="fa fa-search"
                                                aria-hidden="true"></span></button> --}}



                                        {{-- <input class="form-control search" list="browsers" name="chuyen_mon"
                                            placeholder="Nhập môn học" aria-label="Search" required=""
                                            autocomplete="off" id="searchSubject" style="height: 45px;">
                                        <datalist id="browsers">
                                            @foreach ($chuyenmon as $item)
                                            <option data-value="{{$item->cm_id}}" value="{{$item->cm_ten}}"></option>
                                        @endforeach
                                        </datalist>
                                        <input type="hidden" name="linh_vuc" id="linhvuc"> --}}
                                        <button class="btn btn-search position-absolute" type="submit" style="top: 0px;"
                                            id="btnSearchSubject"><span class="fa fa-search"
                                                aria-hidden="true"></span></button>


                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </li>
            </div>

        </div>
    </div>

    </div>

    <!-- /main-slider -->
</section>
@endsection

@push('script')
<link rel="stylesheet" href="{{asset('bootstrap-select-1.13.14/css/bootstrap-select.min.css')}}">
<script src="{{asset('bootstrap-select-1.13.14/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('bootstrap-select-1.13.14/js/i18n/defaults-vi_VN.min.js')}}"></script>
<!-- Latest compiled and minified CSS -->
<script>
    function modifications() {
  $('.selectpicker option:selected').remove();
  $('.selectpicker').selectpicker('refresh');
}
</script>
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: true,
          responsiveClass: true,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 1,
              nav: true
            },
            1000: {
              items: 1,
              nav: true
            }
          }
        })
      })
</script>

@endpush