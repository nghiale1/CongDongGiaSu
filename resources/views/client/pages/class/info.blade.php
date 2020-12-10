@push('css')
<style>
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
    <p>
        <div class="review">
            <span class="star-white">

                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span class="star-yellow" style="width:{{$lop->danhgia['dem']['trungbinh']*20}}%">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
            </span>
        </div>

        {{$lop->danhgia['tong']}} đánh giá
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
                        <input type="text" name="" id="autocomplete" class="hide form-control "
                            placeholder="Thêm địa chỉ" value="{!!$tutor->gs_diachi!!}" style="height:50px;min-height:45px;background-color: #f0f2f5;
                            border: 1px solid #ccd0d5;">
                        <button class="btn-update  close-address hide" type="button">Hủy</button>
                        <button class="btn-update save-address hide" type="button">Lưu</button>
                        <span class="address"> {!!$tutor->gs_diachi!!}</span>
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
    @if(\Auth::user()->kiemTraLopHoc($lop->l_id))
    <p class="inp-intro">
        {!!$tutor->gs_gioithieu!!}
    </p>
    @endif
</div>
@push('script')

@endpush