@extends('client.layouts.layout')
@section('head')
Cộng đồng gia sư | Thêm lớp
@endsection
@section('breadcrum')
Trang cá nhân / Thêm lớp
@endsection
@push('css')
<style>
    .choice {
        background-color: blue;

        /* content: '<img src="{{asset("/client/svg/greenTick.svg")}}" alt="" class="green-tick">';
        display: inline-block;
        width: 10px;
        height: 20px; */

    }

    .btn-secondary {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>
@endpush

@section('page')
<br>
<div class="container">

    <div class="row ">
        <div class="col-md-9 white m-auto">
            <h2 class="m-3 text-center">Thêm thông tin lớp học mới</h2>
            <form action="{{route('tutor.addClassStore')}}" method="post" enctype="multipart/form-data">
                @csrf

                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <td>&nbsp;</td>
                            <td>Thứ 2</td>
                            <td>Thứ 3</td>
                            <td>Thứ 4</td>
                            <td>Thứ 5</td>
                            <td>Thứ 6</td>
                            <td>Thứ 7</td>
                            <td class="pl-0 pr-0">Chủ nhật</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="text-left"><img src="{{asset('/client/svg/morning.svg')}}" alt=""> Sáng</td>
                            @for($i=1;$i<8;$i++) @if($tutor->chitietlichdays[$i-1]->ctld_trangthai=='Ranh')

                                <td class="square" data-type="free" data-id="{{$i}}">
                                    {{-- <green-tick></green-tick> --}}
                                </td>

                                @else

                                <td class="busy square" data-type="busy" data-id="{{$i}}"></td>

                                @endif

                                @endfor

                        </tr>
                        <tr>
                            <td class="text-left"><img src="{{asset('/client/svg/afternoon.svg')}}" alt="">Chiều</td>
                            @for($i=8;$i<15;$i++) @if($tutor->chitietlichdays[$i-1]->ctld_trangthai=='Ranh')

                                <td class="square" data-type="free" data-id="{{$i}}">
                                    {{-- <green-tick></green-tick> --}}
                                </td>

                                @else

                                <td class="busy square" data-type="busy" data-id="{{$i}}"></td>

                                @endif

                                @endfor

                        </tr>
                        <tr>
                            <td class="text-left"><img src="{{asset('/client/svg/evening.svg')}}" alt="">Tối</td>
                            @for($i=15;$i<22;$i++)@if($tutor->chitietlichdays[$i-1]->ctld_trangthai=='Ranh')

                                <td class="square" data-type="free" data-id="{{$i}}">
                                    {{-- <green-tick></green-tick> --}}
                                </td>

                                @else

                                <td class="busy square" data-type="busy" data-id="{{$i}}"></td>

                                @endif

                                @endfor
                        </tr>
                    </tbody>
                </table>
                <br>
                <select name="ctcm" id="cm_id" class="form-control">
                    @foreach ($doituong as $item)

                    <option value="{{$item->ctcm_id}}">{{$item->cm_ten}} - {{$item->dtnh_ten}}</option>
                    @endforeach
                </select>
                <br>
                <input type="text" class="form-control" name="l_ten" placeholder="Tên khóa học">
                <br>
                <input type="file" class="form-control" name="avatar" placeholder="Ảnh đại diện" required>
                <br>
                <input type="number" min="0" name="l_soluong" id="" class="form-control"
                    placeholder="Số lượng học viên">
                <br>
                <input type="number" min="0" name="l_sobuoi" id="" class="form-control" placeholder="Số buổi"
                    onKeyUp="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0';}">
                <br>
                <input type="number" min="0" step="1000" name="l_hocphi" id="" class="form-control"
                    placeholder="Học phí"
                    onKeyUp="if(this.value>100000000){this.value='100000000';}else if(this.value<0){this.value='0';}">
                <br>
                <input type="date" name="l_ngaybatdau" id="" class="form-control" placeholder="Ngày bắt đầu">
                <br>
                <input type="date" name="l_ngayketthuc" id="" class="form-control"
                    placeholder="Ngày hoàn thành khóa học">
                <br>
                <input type="text" name="l_diachi" id="autocomplete" class="form-control" placeholder="Địa chỉ">
                <br>
                <textarea name="l_gioithieu" id="" cols="30" rows="10" class="form-control tiny"
                    placeholder="Giới thiệu khóa học"></textarea>
                <br>
                <textarea name="l_mota" id="" cols="30" rows="10" class="form-control tiny" maxlength="191"
                    placeholder="Mô tả khóa học"></textarea>
                <br>
                <button type="button" class="btn btn-secondary">Hủy</button>
                <button type="submit" class="btn btn-success">Tạo</button>
                <br>
            </form>
            <br>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $('.square').click(function (e) { 
        e.preventDefault();
        let type=$(this).attr('data-type');
        let id=$(this).attr('data-id');
        if(type=='free' || type=='busy'){
            $(this).attr('data-type', 'new');
            $(this).addClass('choice');
            $(this).html('<input type="hidden" name="lich[]" value="'+id+'">');
        }
        if(type=='new'){
            $(this).attr('data-type', 'free');
            $(this).removeClass('choice');
            // $(this).html('<img src="{{asset("/client/svg/greenTick.svg")}}" alt="" class="green-tick">');
        }
    });
</script>

<script
    src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&amp;libraries=places&amp;callback=initAutocomplete"
    type="text/javascript">
</script>

<script>
    google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
        });
    }
</script>
@endpush