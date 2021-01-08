@extends('admin.layouts.layout')
@section('head')
Trang chủ
@endsection
@section('page')

<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Trang chủ</a></li>
            </ol>
        </nav>

        <!-- statistics data -->
        <div class="statistics">
            <div class="row">
                <div class="col-xl-6 pr-xl-2">
                    <div class="row">
                        <div class="col-sm-6 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-user"> </i>
                                <h3 class="text-primary number">{{$countGS}}</h3>
                                <p class="stat-text">Gia sư</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-users"> </i>
                                <h3 class="text-secondary number">{{$countHV}}</h3>
                                <p class="stat-text">Học viên</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 pl-xl-2">
                    <div class="row">
                        <div class="col-sm-6 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-laptop-phone"> </i>
                                <h3 class="text-success number">{{$countLH}}</h3>
                                <p class="stat-text">Lớp học</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-chart-bars"> </i>
                                <h3 class="text-danger number">{{$countGD}}</h3>
                                <p class="stat-text">Giao dịch</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //statistics data -->

        <!-- charts -->
        <div class="chart">
            <div class="row">
                <div class="col-lg-6 pr-lg-2 chart-grid">
                    <div class="card text-center card_border">
                        <div class="card-header chart-grid__header">
                            Bar Chart
                        </div>
                        <div class="card-body">
                            <!-- bar chart -->
                            <div id="container">
                                <canvas id="barchart"></canvas>
                            </div>
                            <!-- //bar chart -->
                        </div>
                        <div class="card-footer text-muted chart-grid__footer">
                            Updated 2 hours ago
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-2 chart-grid">
                    <div class="card text-center card_border">
                        <div class="card-header chart-grid__header">
                            Line Chart
                        </div>
                        <div class="card-body">
                            <!-- line chart -->
                            <div id="container">
                                <canvas id="linechart"></canvas>
                            </div>
                            <!-- //line chart -->
                        </div>
                        <div class="card-footer text-muted chart-grid__footer">
                            Updated just now
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- //content -->
</div>
<!-- main content end-->
@endsection