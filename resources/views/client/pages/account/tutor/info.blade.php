@push('css')
<style>
    a.save {
        color: #542eff;
    }

    a.save:hover {
        background-color: rgb(253 200 0);
    }

    .teached {
        background-color: #32cf3a;
        padding: 0 4px 1px 4px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        margin-right: 3px;
    }

    .frame-avatar {
        width: 150px;
        height: 150px;
        overflow: hidden;
    }

    .avatar {
        min-width: 100%;
        min-height: 100%;
    }

    .btn-grey {
        background-color: #f5f4f7;
        color: #542eff;
    }

    .edit {
        color: #542eff;
        background-color: transparent;
        border: 0;
        padding: 5px 10px;
    }

    .edit:hover {
        background-color: #0000000d;
        border-radius: 0.25rem;
    }

    .edit-address {
        color: #542eff;
        background-color: transparent;
        border: 0;
        padding: 5px 10px;
    }

    .edit-address:hover {
        background-color: #0000000d;
        border-radius: 0.25rem;
    }

    .tare-edit {
        width: 100%;
        height: auto;
        overflow-y: auto;
        resize: none;
        background-color: #f0f2f5;
        border: 1px solid #ccd0d5;
        border-radius: 6px;
        font-size: 15px;
        padding: 8px;
    }

    .btn-update {
        display: inline-block;
        background-color: #f0f2f5;
        border: 0;
        padding: 7px 12px;
        margin-right: 5px;
        border-radius: 0.25rem;
        font-size: 15px;
    }

    .hide {
        display: none;
    }

    /* .show {
        display: block;
    } */
</style>
@endpush
<div class="col-md-3 frame-avatar">
    <img src="{{asset($tutor->gs_hinhdaidien)}}" alt="" class="avatar">
</div>
<div class="col-md-9 baseline">
    <h4 class="inline">{!!$tutor->gs_hoten!!}</h4>
    {{-- <span class="h5" style="float: right;">40.000/giờ</span> --}}
    <h5 class="font-weight-light inp-intro">
        {!!$tutor->gs_motangan!!}
    </h5>
    <button class="edit" data-for="inp-intro">Chỉnh sửa</button>
    <p>
        <div class="review">
            <span class="star-white">

                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span class="star-yellow" style="width:100%">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
            </span>
        </div>

        75 đánh giá
    </p>
    <table>
        <tr>
            <td class="text-center">
                <span class="teached">10</span>
            </td>
            <td>
                <p class="teached-class">

                    lớp đã dạy
                </p>
            </td>
        </tr>
        <tr>
            <td class="text-center">
                <i class="fa fa-map-marker" aria-hidden="true" style="color: #32cf3a"></i>
            </td>
            <td>
                <p>
                    <b>
                        <input type="text" name="" id="autocomplete" class="hide form-control "
                            placeholder="Thêm địa chỉ" value="{!!$tutor->gs_diachi!!}" style="height:50px;min-height:45px;background-color: #f0f2f5;
                            border: 1px solid #ccd0d5;">
                        <button class="btn-update  close-address hide" type="button">Hủy</button>
                        <button class="btn-update save-address hide" type="button">Lưu</button>
                        <span class="address"> {!!$tutor->gs_diachi!!}</span>
                        <button class="edit-address" data-for="address" data-text="Thêm địa chỉ"
                            data-position="address">Chỉnh
                            sửa</button>
                    </b>
                </p>
            </td>
        </tr>
    </table>

    <a class="btn btn-grey inline float-md-right save">
        <span style="font-weight: 600;">
            <i class="fa fa-bookmark-o" aria-hidden="true" style="font-weight: 600;"></i> Lưu thông
            tin</span>
    </a>

</div>
<div class="col-md-12 intro">
    <h5>Giới thiệu</h5>
    <p class="inp-des">
        {!!$tutor->gs_gioithieu!!}
    </p>
    <button class="edit" data-for="inp-des" data-text="Thêm mô tả về bạn" data-position="intro">Chỉnh
        sửa</button>
</div>
@push('script')
<script>
    $(document).ready(function () {
            $('.edit').click(function (e) { 
                e.preventDefault();
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
                
                $('.'+obj).html(data);
                $(this).hide();
                $('.'+obj).append(btn);
                var elem= $(this);
                
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
                            console.log(response);
                            let dataNew=data;
                            $(elem).show();
                            $('.'+obj).html(dataNew);
                        },
                        error:function (e) {
                            console.log(e);
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
                            console.log(response);
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
                            console.log(e);
                        }
                    });
                });
                
            });
    });
</script>

@endpush