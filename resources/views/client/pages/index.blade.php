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
                                    <form class="form-inline position-relative my-2 my-lg-0"
                                        style="width: 83%;text-align:center" method="get"
                                        action="{{route('search.step1')}}">
                                        {{-- @csrf --}}
                                        <input class="form-control search" list="browsers" name="search"
                                            placeholder="Nhập môn học" aria-label="Search" required=""
                                            autocomplete="off" id="searchSubject" style="height: 45px;">
                                        <datalist id="browsers">
                                            @foreach ($linhvuc as $item)
                                            <option data-value="{{$item->lv_id}}" value="{{$item->lv_ten}}"></option>
                                            @endforeach
                                        </datalist>
                                        <input type="hidden" name="linh_vuc" id="linhvuc">
                                        <button class="btn btn-search position-absolute" type="submit" style="top: 0px;"
                                            id="btnSearchSubject"><span class="fa fa-search"
                                                aria-hidden="true"></span></button>


                                    </form>


                                    {{-- <h5>Vì thế hệ tương lai!</h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="">Xem thêm</a> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">
                                    <h5>Explore The World Of Our Graduates</h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">
                                    <h5>Exceptional People, Exceptional Care</h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">
                                    <h5>Explore The World Of Our Graduates</h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="">Read
                                        More</a>
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
<script>
    $(document).ready(function () {
        
        $('#searchSubject').keyup(function (e) { 
            var value = $('#searchSubject').val();
            $('#linhvuc').val($('#browsers [value="' + value + '"]').data('value'));
            $('#btnSearchSubject').click();
        });
        var inp = document.querySelector('input');
        inp.addEventListener('input', function() {
        var value = this.value;
        var opt = [].find.call(this.list.options, function(option) {
            return option.value === value;
        });
        if(opt) {
            this.value = opt.textContent;
        }
        });
        
    });
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