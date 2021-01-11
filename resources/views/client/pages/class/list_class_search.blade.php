@extends('client.layouts.layout')
@section('head')
Cộng đồng gia sư | Danh sách lớp
@endsection
@section('breadcrum')
Danh sách lớp
@endsection
@push('css')
<style>
    small,
    .small {
        font-size: 80% !important;
        font-weight: 100 !important;
        color: #8c8c8c !important;
    }

    .hidden {
        display: none;
    }

    @include('client.pages.class.list-css');
</style>

@endpush

@section('page')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-3 opensan">
            <h4 class="title" style="font-weight: 300;">Lọc kết quả</h4>
            <br>
            <div class="medium-hide">
                <label class="title" for="sort">Sắp xếp theo</label>
                <form action="{{route('search')}}" method="get" id="frmSort">
                    <input type="hidden" name="chuyen_mon" value="{{$chuyen_mon}}">
                    <input type="hidden" name="ngay_thu" value="{{$ngay_thu}}">
                    <select name="sort" id="sort" class="form-control">
                        <option value="1" @if($keySearch['sort']=='1' ) selected @endif>
                            Theo tên
                        </option>
                        <option value="2" @if($keySearch['sort']=='2' ) selected @endif>
                            Học phí thấp
                        </option>
                        <option value="3" @if($keySearch['sort']=='3' ) selected @endif>
                            Học phí cao
                        </option>
                        <option value="4" @if($keySearch['sort']=='4' ) selected @endif>
                            Đánh giá
                        </option>
                    </select>
                </form>
            </div>


            <br>
            <div class="voice">
                <form action="{{route('search')}}" method="get" id="frmVoice">
                    <input type="hidden" name="chuyen_mon" value="{{$chuyen_mon}}">
                    <input type="hidden" name="ngay_thu" value="{{$ngay_thu}}">
                    <label for="" class="title">Giọng nói</label>

                    <div>
                        <input class="hide medium-show-inline-block voice" type="checkbox" id="south" name="voice[]"
                            required="required" value="Nam" @if (in_array("Nam", $keySearch['voice'])) checked @endif>
                        <label class="hide medium-show-inline-block voice" for="south">Miền Nam</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block voice" type="checkbox" id="central" name="voice[]"
                            required="required" value="Trung" @if (in_array("Trung", $keySearch['voice'])) checked
                            @endif>
                        <label class="hide medium-show-inline-block voice" for="central">Miền Trung</label>
                    </div>
                    <div>
                        <input class="hide medium-show-inline-block voice" type="checkbox" id="northern" name="voice[]"
                            required="required" value="Bắc" @if (in_array("Bắc", $keySearch['voice'])) checked @endif>
                        <label class="hide medium-show-inline-block voice" for="northern">Miền Bắc</label>
                    </div>
                </form>


            </div>

            <br>
            <div class="weeksday">
                <form action="{{route('search')}}" method="get" id="frmVoice">
                    <input type="hidden" name="chuyen_mon" value="{{$chuyen_mon}}">
                    <input type="hidden" name="ngay_thu" value="{{$ngay_thu}}">
                    <label class="title" for="availability-selection">Thời gian dạy</label>

                    <div>
                        <label class="hide medium-show-inline-block days mondays" data-value="monday">Thứ hai</label>
                        <input class="hide medium-show-inline-block days mondays" data-value="monday" type="checkbox">
                        <br>
                        <small>
                            <input class="hidden medium-show-inline-block monday day" data-value="monday"
                                type="checkbox" name="schedule[]" @if (in_array(1, $keySearch['schedule'])) checked
                                @endif value=1>
                            <label class="hidden medium-show-inline-block label-monday day" data-value="monday">Sáng,
                            </label>
                            <input class="hidden medium-show-inline-block monday day" data-value="monday"
                                type="checkbox" name="schedule[]" @if (in_array(8, $keySearch['schedule'])) checked
                                @endif value=8>
                            <label class="hidden medium-show-inline-block label-monday day" data-value="monday">Chiều,
                            </label>
                            <input class="hidden medium-show-inline-block monday day" data-value="monday"
                                type="checkbox" name="schedule[]" @if (in_array(15, $keySearch['schedule'])) checked
                                @endif value=15>
                            <label class="hidden medium-show-inline-block label-monday day"
                                data-value="schedule[]">Tối</label>
                        </small>
                    </div>
                    <div>
                        <label class="hide medium-show-inline-block days tuesdays" data-value="tuesday">Thứ ba</label>
                        <input class="hide medium-show-inline-block days tuesdays" data-value="tuesday" type="checkbox">
                        <br>
                        <small>
                            <input class="hidden medium-show-inline-block tuesday day" data-value="tuesday"
                                type="checkbox" name="schedule[]" @if (in_array(2, $keySearch['schedule'])) checked
                                @endif value=2>
                            <label class="hidden medium-show-inline-block label-tuesday day" data-value="tuesday">Sáng,
                            </label>
                            <input class="hidden medium-show-inline-block tuesday day" data-value="tuesday"
                                type="checkbox" name="schedule[]" @if (in_array(9, $keySearch['schedule'])) checked
                                @endif value=9>
                            <label class="hidden medium-show-inline-block label-tuesday day" data-value="tuesday">Chiều,
                            </label>
                            <input class="hidden medium-show-inline-block tuesday day" data-value="tuesday"
                                type="checkbox" name="schedule[]" @if (in_array(16, $keySearch['schedule'])) checked
                                @endif value=16>
                            <label class="hidden medium-show-inline-block label-tuesday day"
                                data-value="tuesday">Tối</label>
                        </small>
                    </div>
                    <div>
                        <label class="hide medium-show-inline-block days websdays" data-value="websday">Thứ tư</label>
                        <input class="hide medium-show-inline-block days websdays" data-value="websday" type="checkbox">
                        <br>
                        <small>
                            <input class="hidden medium-show-inline-block websday day" data-value="websday"
                                type="checkbox" name="schedule[]" @if (in_array(3, $keySearch['schedule'])) checked
                                @endif value=3>
                            <label class="hidden medium-show-inline-block label-websday day" data-value="websday">Sáng,
                            </label>
                            <input class="hidden medium-show-inline-block websday day" data-value="websday"
                                type="checkbox" name="schedule[]" @if (in_array(10, $keySearch['schedule'])) checked
                                @endif value=10>
                            <label class="hidden medium-show-inline-block label-websday day" data-value="websday">Chiều,
                            </label>
                            <input class="hidden medium-show-inline-block websday day" data-value="websday"
                                type="checkbox" name="schedule[]" @if (in_array(17, $keySearch['schedule'])) checked
                                @endif value=17>
                            <label class="hidden medium-show-inline-block label-websday day"
                                data-value="websday">Tối</label>
                        </small>
                    </div>
                    <div>
                        <label class="hide medium-show-inline-block days thurdays" data-value="thurday">Thứ năm</label>
                        <input class="hide medium-show-inline-block days thurdays" data-value="thurday" type="checkbox">
                        <br>
                        <small>
                            <input class="hidden medium-show-inline-block thurday day" data-value="thurday"
                                type="checkbox" name="schedule[]" @if (in_array(4, $keySearch['schedule'])) checked
                                @endif value=4>
                            <label class="hidden medium-show-inline-block label-thurday day" data-value="thurday">Sáng,
                            </label>
                            <input class="hidden medium-show-inline-block thurday day" data-value="thurday"
                                type="checkbox" name="schedule[]" @if (in_array(11, $keySearch['schedule'])) checked
                                @endif value=11>
                            <label class="hidden medium-show-inline-block label-thurday day" data-value="thurday">Chiều,
                            </label>
                            <input class="hidden medium-show-inline-block thurday day" data-value="thurday"
                                type="checkbox" name="schedule[]" @if (in_array(18, $keySearch['schedule'])) checked
                                @endif value=18>
                            <label class="hidden medium-show-inline-block label-thurday day"
                                data-value="thurday">Tối</label>
                        </small>
                    </div>
                    <div>
                        <label class="hide medium-show-inline-block days fridays" data-value="friday">Thứ sáu</label>
                        <input class="hide medium-show-inline-block days fridays" data-value="friday" type="checkbox">
                        <br>
                        <small>
                            <input class="hidden medium-show-inline-block friday day" data-value="friday"
                                type="checkbox" name="schedule[]" @if (in_array(5, $keySearch['schedule'])) checked
                                @endif value=5>
                            <label class="hidden medium-show-inline-block label-friday day" data-value="friday">Sáng,
                            </label>
                            <input class="hidden medium-show-inline-block friday day" data-value="friday"
                                type="checkbox" name="schedule[]" @if (in_array(12, $keySearch['schedule'])) checked
                                @endif value=12>
                            <label class="hidden medium-show-inline-block label-friday day" data-value="friday">Chiều,
                            </label>
                            <input class="hidden medium-show-inline-block friday day" data-value="friday"
                                type="checkbox" name="schedule[]" @if (in_array(19, $keySearch['schedule'])) checked
                                @endif value=19>
                            <label class="hidden medium-show-inline-block label-friday day"
                                data-value="friday">Tối</label>
                        </small>
                    </div>
                    <div>
                        <label class="hide medium-show-inline-block days saturdays" data-value="saturday">Thứ
                            bảy</label>
                        <input class="hide medium-show-inline-block days saturdays" data-value="saturday"
                            type="checkbox">
                        <br>
                        <small>
                            <input class="hidden medium-show-inline-block saturday day" data-value="saturday"
                                type="checkbox" name="schedule[]" @if (in_array(6, $keySearch['schedule'])) checked
                                @endif value=6>
                            <label class="hidden medium-show-inline-block label-saturday day"
                                data-value="saturday">Sáng,
                            </label>
                            <input class="hidden medium-show-inline-block saturday day" data-value="saturday"
                                type="checkbox" name="schedule[]" @if (in_array(13, $keySearch['schedule'])) checked
                                @endif value=13>
                            <label class="hidden medium-show-inline-block label-saturday day"
                                data-value="saturday">Chiều,
                            </label>
                            <input class="hidden medium-show-inline-block saturday day" data-value="saturday"
                                type="checkbox" name="schedule[]" @if (in_array(20, $keySearch['schedule'])) checked
                                @endif value=20>
                            <label class="hidden medium-show-inline-block label-saturday day"
                                data-value="saturday">Tối</label>
                        </small>
                    </div>
                    <div>
                        <label class="hide medium-show-inline-block days sundays" data-value="sunday">Chủ nhật</label>
                        <input class="hide medium-show-inline-block days sundays" data-value="sunday" type="checkbox">
                        <br>
                        <small>
                            <input class="hidden medium-show-inline-block sunday day" data-value="sunday"
                                type="checkbox" name="schedule[]" @if (in_array(7, $keySearch['schedule'])) checked
                                @endif value=7>
                            <label class="hidden medium-show-inline-block label-sunday day" data-value="sunday">Sáng,
                            </label>
                            <input class="hidden medium-show-inline-block sunday day" data-value="sunday"
                                type="checkbox" name="schedule[]" @if (in_array(14, $keySearch['schedule'])) checked
                                @endif value=14>
                            <label class="hidden medium-show-inline-block label-sunday day" data-value="sunday">Chiều,
                            </label>
                            <input class="hidden medium-show-inline-block sunday day" data-value="sunday"
                                type="checkbox" name="schedule[]" @if (in_array(21, $keySearch['schedule'])) checked
                                @endif value=21>
                            <label class="hidden medium-show-inline-block label-sunday day"
                                data-value="sunday">Tối</label>
                        </small>
                    </div>
                    <button type="submit" class="btn btn-outline-primary p-1 pr-2 pl-2">Tìm</button>
                </form>

            </div>

            <br>

            <div class="gender">

                <label class="title" for="gender">Giới tính</label>
                <form action="{{route('search')}}" method="get" id="frmGender">
                    <input type="hidden" name="chuyen_mon" value="{{$chuyen_mon}}">
                    <input type="hidden" name="ngay_thu" value="{{$ngay_thu}}">
                    <select id="gender" class="form-control" name="gender" id="gender">
                        <option value="">Không phân biệt</option>
                        <option value="Nam" @if($keySearch['gender']=='Nam' ) selected @endif>Nam</option>
                        <option value="Nữ" @if($keySearch['gender']=='Nữ' ) selected @endif>Nữ</option>
                    </select>
                </form>
                <br>
            </div>

            <div class="level-student">
                <label class="title" for="level"><strong>Trình độ học viên</strong></label>
                <form action="{{route('search')}}" method="get" id="frmLevel">
                    <input type="hidden" name="chuyen_mon" value="{{$chuyen_mon}}">
                    <input type="hidden" name="ngay_thu" value="{{$ngay_thu}}">
                    <select class="form-control" id="level" name="level">
                        <option value=19 @if($keySearch['level']==19 ) selected @endif>
                            Bất kỳ
                        </option>
                        <option value=20 @if($keySearch['level']==20 ) selected @endif>
                            Mầm non
                        </option>
                        <option value=21 @if($keySearch['level']==21 ) selected @endif>
                            Cấp 1
                        </option>
                        <option value=22 @if($keySearch['level']==22 ) selected @endif>
                            Cấp 2
                        </option>
                        <option value=23 @if($keySearch['level']==23 ) selected @endif>
                            Cấp 3
                        </option>
                        <option value=24 @if($keySearch['level']==24 ) selected @endif>
                            Đại học/Cao đẳng
                        </option>
                        <option value=25 @if($keySearch['level']==25 ) selected @endif>
                            Khác
                        </option>
                    </select>
                </form>
            </div>

        </div>

        <div class="col-md-9 ">

            <div class="flex">
                <div class=" mt-auto mb-auto mr-auto">
                    <h5 class="light-header" style="">
                        <strong>{{count($tutor)}} kết quả</strong> phù hợp với bạn
                    </h5>
                </div>
                <div class="flex">
                    <label class=" mt-auto ml-auto" for="desktop-sort">Sắp xếp: &nbsp;</label>
                    <div>
                        <form action="{{route('search')}}" method="get" id="frmSort">
                            <input type="hidden" name="chuyen_mon" value="{{$chuyen_mon}}">
                            <input type="hidden" name="ngay_thu" value="{{$ngay_thu}}">
                            <select id="desktop-sort" class="form-control" name="sort">
                                <option value="1" @if($keySearch['sort']=='1' ) selected @endif>
                                    Theo tên
                                </option>
                                <option value="2" @if($keySearch['sort']=='2' ) selected @endif>
                                    Học phí thấp
                                </option>
                                <option value="3" @if($keySearch['sort']=='3' ) selected @endif>
                                    Học phí cao
                                </option>
                                <option value="4" @if($keySearch['sort']=='4' ) selected @endif>
                                    Đánh giá
                                </option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <br>

            @foreach ($tutor as $item)

            <div class="border white">
                <a href="{{route('tutor.profile',$item->gs_id)}}" class="tutor-card">
                    <div class="tutor">

                        <div class="row">
                            <div class="col-md-2 avatar">

                                <div class="profile-image ">
                                    <img src="{{asset($item->gs_hinhdaidien)}}" alt="{{$item->gs_hoten}}">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5 class="name">{{$item->gs_hoten}}</h5>
                                <h4 class="text-blue ">{{$item->gs_motangan}}</h4>
                                <br>
                                <p class="text-gray ">
                                    {{$item->descrip}}
                                    <span class="text-nowrap" style="color: #017acd">xem thêm</span>
                                </p>
                            </div>
                            <div class="col-md-3" style="border-left: 1px solid #d8d6d6;">
                                <table class="table table-borderless tutor-card-stats">
                                    <tr>
                                        <td>
                                            <div class="rate">

                                                <h5>

                                                    {{number_format($item->gs_mucluong)}}<span class="hour">
                                                        đ/giờ</span>
                                                </h5>
                                            </div>
                                        </td>
                                    <tr>

                                        <td>
                                            <div class="review" style="    font-size: 14px;">
                                                <span class="star-white">

                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <span class="star-yellow"
                                                        style="width:{{$item->danhgia['dem']['trungbinh']*20}}%">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <span class="review_text" style="font-size: 14px">

                                                <strong>{{$item->danhgia['dem']['trungbinh']}}</strong>
                                                <span class="text-gray">({{$item->danhgia['tong']}})</span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <span class="teached">{{$item->lopDaDay}}</span>

                                            <span class="teached-class">

                                                lớp đã dạy
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <i class="fa fa-map-marker" aria-hidden="true" style="color: #32cf3a"></i>

                                            <span>
                                                <b>

                                                    <span class="address">Hiệp Bình Chánh, Thủ Đức</span>
                                                </b>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>
<br>
@endsection

@push('script')
<script>
    $(document).ready(function(){
    $("#gender").on("change", function(){
        this.form.submit();
    });
    $("#level").on("change", function(){
        this.form.submit();
    });
    $("#sort").on("change", function(){
        this.form.submit();
    });
    $("#desktop-sort").on("change", function(){
        this.form.submit();
    });
    $('.voice').on("click", function(){
        if($('.voice:checked').val()!=undefined){
            this.form.submit();
        }
        return false;
        
    });
    $('.schedule').on("click", function(){
        if($('.schedule:checked').val()!=undefined){
            this.form.submit();
        }
        return false;
        
    });


    $(".days").click(function (e) { 
        var day=$(this).attr("data-value");//monday,tue,...
        var n=$( "."+day+":checked" ).length;
        if(n<3){
            $( "."+day+"" ).prop( "checked", true );
            $("."+day+"").removeClass("hidden");
            $(".label-"+day+"").removeClass("hidden");
        }else{
            $("."+day ).prop( "checked", false );
            $("."+day).addClass("hidden");
            $(".label-"+day).addClass("hidden");
        }
    });
    $( window ).on( "load", function() {
        hide('monday');
        hide('tuesday');
        hide('thurday');
        hide('friday');
        hide('websday');
        hide('saturday');
        hide('sunday');
    });
    function hide(day) { 
        var n=$( "."+day+":checked" ).length;
            if(n==0){
                $("."+day).addClass("hidden");
                $("."+day).addClass("hidden");
                $(".label-"+day+"").addClass("hidden");
            }else if(n==3){
                $("."+day+"s" ).prop( "checked", true );
                $("."+day).addClass("hidden");
                $(".label-"+day).removeClass("hidden");
            }else{
                $("."+day+"s" ).prop( "checked", false );
                $("."+day).removeClass("hidden");
                $(".label-"+day).removeClass("hidden");
    
            }

     }
    $(".day").click(function (e) { 
        var day=$(this).attr("data-value");
        var n=$( "."+day+":checked" ).length;
        if(n==0){
            $("."+day+"s" ).prop( "checked", false );
            $("."+day).addClass("hidden");
            $(".label-"+day+"").addClass("hidden");
        }else if(n==3){
            $( "."+day+"s" ).prop( "checked", true );
            $("."+day).addClass("hidden");
            
        }else{
            $( "."+day+"s" ).prop( "checked", false );

        }
    });
});
</script>
@endpush