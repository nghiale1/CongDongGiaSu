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
                                        style="width: 83%;text-align:center">
                                        <input class="form-control search" type="search" name="search"
                                            placeholder="Nhập môn học" aria-label="Search" required=""
                                            id="searchSubject" style="height: 45px;">
                                        <button class="btn btn-search position-absolute" type="submit"
                                            style="top: 0px;"><span class="fa fa-search"
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
{{-- <script>
    const inventory = [
    {name: 'apples', quantity: 2},
    {name: 'bananas', quantity: 0},
    {name: 'cherries', quantity: 5}
];

function isCherries(fruit) { 
    return fruit.name === 'cherries';
}

console.log(inventory.find(isCherries)); 
// { name: 'cherries', quantity: 5 }
    $("#searchSubject").keyup(function (e) { 
        
    });
</script> --}}
@endpush