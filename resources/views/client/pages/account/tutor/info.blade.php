@push('css')
<style>
    .inp-fee {
        display: contents;
    }

    @include('client.pages.account.tutor.info-css');
</style>
@endpush
<div class="col-md-3 frame-avatar">
    <img src="{{asset($tutor->gs_hinhdaidien)}}" alt="" class="avatar">
</div>
<div class="col-md-9 baseline">
    <h4 class="inline">{!!$tutor->gs_hoten!!}</h4>
    {{-- <span class="h5" style="float: right;">40.000/giờ</span> --}}
    <h5 class="font-weight-light inp-des">
        {!!$tutor->gs_motangan!!}
    </h5>
    @if(\Auth::check())
    @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
    <button class="edit" data-for="inp-des" data-text="Thêm mô tả ngắn về bạn" data-position="des">Chỉnh sửa</button>
    @endif
    @endif
    <p>
        <div class="review">
            <span class="star-white">

                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span class="star-yellow" style="width:{{$tutor->danhgia['dem']['trungbinh']*20}}%">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
            </span>
        </div> {{$tutor->danhgia['dem']['trungbinh']}} ({{$tutor->danhgia['tong']}} đánh giá)
    </p>
    <table>
        <tr>
            <td class="text-center">
                <span class="teached">{{$tutor->solop}}</span>
            </td>
            <td>
                <p class="teached-class">

                    lớp đã dạy
                </p>
            </td>
        </tr>
        <tr>
            <td class="text-center align-top">
                <i class="fa fa-map-marker" aria-hidden="true" style="color: #32cf3a"></i>
            </td>
            <td>
                <p>
                    <b>
                        <span class="address"> {!!$tutor->gs_diachi!!}</span>
                        @if(\Auth::check())
                        @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
                        <input type="text" name="" id="autocomplete" class="hide form-control "
                            placeholder="Thêm địa chỉ" value="{!!$tutor->gs_diachi!!}" style="height:50px;min-height:45px;background-color: #f0f2f5;
                            border: 1px solid #ccd0d5;">
                        <button class="btn-update  close-address hide" type="button">Hủy</button>
                        <button class="btn-update save-address hide" type="button">Lưu</button>
                        <button class="edit-address" data-for="address" data-text="Thêm địa chỉ"
                            data-position="address">Chỉnh
                            sửa</button>
                        @endif
                        @endif
                    </b>
                </p>
            </td>
        </tr>
    </table>

    <a class="btn btn-grey inline float-md-right save" @if(\Auth::check())
        @if(!\Auth::user()->kiemTraGiaSu($tutor->gs_id))
        href="{{route('wishlist.store',$tutor->gs_id)}}" @endif @endif>
        <span style="font-weight: 600;">
            <i class="fa fa-bookmark-o" aria-hidden="true" style="font-weight: 600;"></i> Lưu thông
            tin</span>
    </a>

</div>
<div class="col-md-12 intro">
    <table class="table table-bordered">
        <tr>
            <td>Giọng nói</td>
            <td>
                <p class="inp-voice">
                    {!!($tutor->gs_giongnoi)!!}
                </p> @if(\Auth::check())
                @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
                <button class="edit" data-for="inp-voice" data-text="Thêm thông tin về chi phí dạy" data-type="voice"
                    data-position="voice">Chỉnh
                    sửa</button>
                @endif
                @endif
            </td>
        </tr>
        <tr>
            <td>Năm sinh</td>
            <td>
                <p class="inp-birth">
                    {!!($tutor->gs_namsinh)!!}
                </p> @if(\Auth::check())
                @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
                <button class="edit" data-for="inp-birth" data-text="Thêm thông tin về chi phí dạy" data-type="birth"
                    data-position="birth">Chỉnh
                    sửa</button>
                @endif
                @endif
            </td>
        </tr>
        <tr>
            <td>Phí dạy</td>
            <td>
                <p class="inp-fee">
                    {!!number_format($tutor->gs_mucluong)!!}
                </p>
                <span>/ buổi</span> @if(\Auth::check())
                @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
                <button class="edit" data-for="inp-fee" data-text="Thêm thông tin về chi phí dạy"
                    data-position="fee">Chỉnh
                    sửa</button>
                @endif
                @endif
            </td>
        </tr>
    </table>



    <h5>Giới thiệu</h5>
    <p class="inp-intro">
        {!!$tutor->gs_gioithieu!!}
    </p>
    @if(\Auth::check())
    @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
    <button class="edit" data-for="inp-intro" data-text="Thêm thông tin giới thiệu về bạn" data-position="intro">Chỉnh
        sửa</button>
    @endif
    @endif
</div>
@push('script')
<script>
    $(document).ready(function () {
            $('.edit').click(function (e) { 
                e.preventDefault();
                var type=$(this).attr('data-type');//thẻ p
                // lấy đối tượng
                var obj=$(this).attr('data-for');//thẻ p
                var position=$(this).attr('data-position');
                
                //lấy dữ liệu
                var placeholder=$(this).attr('data-text');
                var value=$('.'+obj).text();
                var height=$('.'+obj).height();
                // thay thế
                var data='<textarea placeholder="'+placeholder+'" class="tare-edit tare-'+position+'" style="height:'+(height+25)+'px;min-height:45px">'+value.trim()+'</textarea>';
                var btn='<button class="btn-update  close-'+position+'" type="button">Hủy</button><button class="btn-update save-'+position+'" type="button">Lưu</button>'
                if(type=='voice'){
                var data='<select class="form-control tare-voice" name="tare-voice"><option value="Bắc">Miền Bắc</option><option value="Trung">Miền Trung</option><option value="Nam">Miền Nam</option></select>';
                var btn='<button class="btn-update  close-'+position+'" type="button">Hủy</button><button class="btn-update save-'+position+'" type="button">Lưu</button>'
                }
                if(type=='birth'){
                var data='<input type="date" class="form-control tare-birth">';
                var btn='<button class="btn-update  close-'+position+'" type="button">Hủy</button><button class="btn-update save-'+position+'" type="button">Lưu</button>'
                }
                $('.'+obj).html(data);
                $(this).hide();
                $('.'+obj).append(btn);
                var elem= $(this);
                
                $('.save-voice').click(function (e) { 
                    e.preventDefault();
                    var data=$('.tare-voice').val();
                    // alert(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{!!route('changeVoice')!!}",
                        data: {data:data},
                        success: function (response) {
                            let dataNew=data;
                            $(elem).show();
                            $('.'+obj).html(dataNew);
                        },
                        error:function (e) {
                        }
                    });
                });
                $('.save-birth').click(function (e) { 
                    e.preventDefault();
                    var data=$('.tare-birth').val();
                    // alert(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{!!route('changeBirth')!!}",
                        data: {data:data},
                        success: function (response) {
                            let dataNew=data;
                            $(elem).show();
                            $('.'+obj).html(dataNew);
                        },
                        error:function (e) {
                        }
                    });
                });
                $('.save-fee').click(function (e) { 
                    e.preventDefault();
                    var data=$('.tare-fee').val();
                    // alert(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{!!route('changeFee')!!}",
                        data: {data:data},
                        success: function (response) {
                            let dataNew=data;
                            $(elem).show();
                            $('.'+obj).html(dataNew);
                        },
                        error:function (e) {
                        }
                    });
                });
                $('.save-intro').click(function (e) { 
                    e.preventDefault();
                    var data=$('.tare-intro').val();
                    // alert(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{!!route('changeIntro')!!}",
                        data: {data:data},
                        success: function (response) {
                            let dataNew=data;
                            $(elem).show();
                            $('.'+obj).html(dataNew);
                        },
                        error:function (e) {
                        }
                    });
                });
                $('.save-des').click(function (e) { 
                    e.preventDefault();
                    var data=$('.tare-des').val();
                    // alert(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{!!route('changeDes')!!}",
                        data: {data:data},
                        success: function (response) {
                            let dataNew=data;
                            $(elem).show();
                            $('.'+obj).html(dataNew);
                        },
                        error:function (e) {
                        }
                    });
                });
                
            });
        });
</script>
<script>
    $(document).ready(function () {
        $('.edit-address').click(function (e) { 
                e.preventDefault();
                // lấy đối tượng
                var obj=$(this).attr('data-for');//thẻ p
                var position=$(this).attr('data-position');
                
                //lấy dữ liệu
                var placeholder=$(this).attr('data-text');
                var value=$('.'+obj).text();
                var height=$('.'+obj).height();
                // thay thế
                var btn='<button class="btn-update  close-'+position+'" type="button">Hủy</button><button class="btn-update save-'+position+'" type="button">Lưu</button>'
                
                $('.edit-address').hide();
                $('.address').hide();

                $('#autocomplete').show();
                $('.close-address').removeClass('hide');
                $('.save-address').removeClass('hide');
                $('.'+obj).append(btn);
                var elem= $(this);
                
                $('.save-address').click(function (e) { 
                    e.preventDefault();
                    var data=$('#autocomplete').val();
                    // alert(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{!!route('changeAddress')!!}",
                        data: {data:data},
                        success: function (response) {
                            let dataNew=data;
                            $('.address').show();
                            $('.address').html(data);
                            $('.close-address').addClass('hide');//ẩn thanh tên
                            $('.save-address').addClass('hide');//ẩn thanh tên
                            $('#autocomplete').hide();//ẩn thanh tên
                            
                            $(elem).show();//hiện nút chỉnh sửa
                            $('.'+obj).html(dataNew);
                        },
                        error:function (e) {
                        }
                    });
                });
            });
    });
    
</script>
{{-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaaygZT7_LyyyK1fE9Wf9nsBHfJXgzXXY&region=VN&language=vi&libraries=places,geometry&callback=initMap">
</script> --}}

<script>
    // google.maps.event.addDomListener(window, 'load', initialize);
    // function initialize() {
    //     var input = document.getElementById('autocomplete');
    //     var autocomplete = new google.maps.places.Autocomplete(input);
    //     autocomplete.addListener('place_changed', function() {
    //         var place = autocomplete.getPlace();
    //         console.log(place);
    //     });
    // }
</script>

@endpush