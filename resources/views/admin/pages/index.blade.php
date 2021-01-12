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
                            Số gia sư trong năm
                        </div>
                        <div class="card-body">
                            <!-- line chart -->
                            {{-- <div class="container"> --}}
                            <canvas id="gs" width="400px" height=""></canvas>
                            {{-- </div> --}}
                            <!-- //line chart -->
                        </div>
                        <div class="card-footer text-muted chart-grid__footer">
                            Cập nhật lần cuối: {{Date('H:i:s')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-2 chart-grid">
                    <div class="card text-center card_border">
                        <div class="card-header chart-grid__header">
                            Số học viên trong năm
                        </div>
                        <div class="card-body">
                            <!-- line chart -->
                            {{-- <div class="container"> --}}
                            <canvas id="hv" width="400px" height=""></canvas>

                            {{-- </div> --}}
                            <!-- //line chart -->
                        </div>
                        <div class="card-footer text-muted chart-grid__footer">
                            Cập nhật lần cuối: {{Date('H:i:s')}}
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
@push('script')
{{-- gs --}}
<script>
    var gs = document.getElementById('gs');
    var myChart = new Chart(gs, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4','Tháng 5','Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'],
            datasets: [{
                label: 'Số lượng gia sư mới trong năm 2020',
                data: ["{{$tkgs[1]}}","{{$tkgs[2]}}","{{$tkgs[3]}}","{{$tkgs[4]}}","{{$tkgs[5]}}","{{$tkgs[6]}}","{{$tkgs[7]}}","{{$tkgs[8]}}","{{$tkgs[9]}}","{{$tkgs[10]}}","{{$tkgs[11]}}","{{$tkgs[12]}}"],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    gs.height = 337;
</script>
<script>
    var hv = document.getElementById('hv');
    var myChart = new Chart(hv, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4','Tháng 5','Tháng 6','Tháng 7','Tháng 8','Tháng 9','Tháng 10','Tháng 11','Tháng 12'],
            datasets: [{
                label: 'Số lượng học viên mới trong năm 2020',
                data: ["{{$tkhv[1]}}","{{$tkhv[2]}}","{{$tkhv[3]}}","{{$tkhv[4]}}","{{$tkhv[5]}}","{{$tkhv[6]}}","{{$tkhv[7]}}","{{$tkhv[8]}}","{{$tkhv[9]}}","{{$tkhv[10]}}","{{$tkhv[11]}}","{{$tkhv[12]}}"],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    hv.defaults.global.legend.display = false;
    hv.height = 337;
</script>
@endpush