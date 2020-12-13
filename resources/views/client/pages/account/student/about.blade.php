@push('css')
<style>
    .name {
        font-size: 15px;
    }
</style>
@endpush
<div class="container">
    <div class="row">
        {{-- left --}}
        <div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Thông tin cá nhân</h6>
                    <a href="#" class="more"></a>
                </div>
                <div class="ui-block-content">


                    <!-- W-Personal-Info -->

                    <ul class="widget w-personal-info">
                        <li>
                            <span class="title">Ước muốn:</span>
                            <span class="text inp-wish">{{$student->hv_uocmuon}}
                            </span>
                            @if(\Auth::user()->kiemTraHocVien($student->hv_id))

                            <button class="edit" data-for="inp-wish" data-text="Thêm ước muốn của bạn"
                                data-r="Wish">Chỉnh
                                sửa</button>
                            <div class="Wish hide">
                                <form action="{{route("updateWish")}}" method="post">
                                    @csrf
                                    <textarea placeholder="Thêm ước muốn của bạn" class="tare-edit tare-wish"
                                        style="min-height:60px" name="data">{{$student->hv_uocmuon}}</textarea>
                                    <button class="btn-update  close-Wish" type="button">Hủy</button>
                                    <button class="btn-update save-wish" type="submit">Lưu</button>
                                </form>
                            </div>
                            @endif
                        </li>
                        <li>
                            <span class="title">Ngày sinh:</span>
                            <span class="text inp-birth">{{$student->hv_ngaysinh}}</span>
                            @if(\Auth::user()->kiemTraHocVien($student->hv_id))

                            <button class="edit" data-for="inp-birth" data-text="Thêm ngày sinh của bạn"
                                data-r="Birth">Chỉnh
                                sửa</button>
                            <div class="Birth hide">
                                <form action="{{route("updateBirth")}}" method="post">
                                    @csrf
                                    <input type="date" value="{{$student->hv_ngaysinh}}"
                                        placeholder="Thêm ước muốn của bạn" name="data">
                                    <button class="btn-update  close-Birth" type="button">Hủy</button>
                                    <button class="btn-update save-birth" type="submit">Lưu</button>
                                </form>
                            </div>
                            @endif

                        </li>
                        <li>
                            <span class="title">Trình độ:</span>
                            <span class="text inp-level">{{$student->hv_trinhdo}}</span>
                            @if(\Auth::user()->kiemTraHocVien($student->hv_id))

                            <button class="edit" data-for="inp-level" data-text="Thêm trình độ học vấn của bạn"
                                data-r="Level">Chỉnh
                                sửa</button>
                            <div class="Level hide">
                                <form action="{{route("updateLevel")}}" method="post">
                                    @csrf
                                    <select name="data" id="" class="form-control">

                                        @foreach ($level as $item)
                                        <option value="{{$item->dtnh_ten}}">{{$item->dtnh_ten}}</option>
                                        @endforeach
                                    </select>
                                    {{-- <textarea placeholder="Thêm ước muốn của bạn" class="tare-edit tare-wish"
                                        style="min-height:60px" name="data">{{$student->hv_trinhdo}}</textarea> --}}
                                    <button class="btn-update  close-Level" type="button">Hủy</button>
                                    <button class="btn-update save-level" type="submit">Lưu</button>
                                </form>
                            </div>
                            @endif
                        </li>
                        <li>
                            <span class="title">Học lực:</span>
                            <span class="text inp-power">{{$student->hv_hocluc}}</span>
                            @if(\Auth::user()->kiemTraHocVien($student->hv_id))

                            <button class="edit" data-for="inp-power" data-r="Power">Chỉnh
                                sửa</button>
                            <div class="Power hide">
                                <form action="{{route("updatePower")}}" method="post">
                                    @csrf
                                    <textarea placeholder="Thêm học lực của bạn" class="tare-edit tare-power"
                                        style="min-height:60px" name="data">{{$student->hv_hocluc}}</textarea>
                                    <button class="btn-update  close-Power" type="button">Hủy</button>
                                    <button class="btn-update save-power" type="submit">Lưu</button>
                                </form>
                            </div>
                            @endif

                        </li>
                        <li>
                            <span class="title">Tên trường:</span>
                            <span class="text inp-school">{{$student->hv_tentruong}}</span>
                            @if(\Auth::user()->kiemTraHocVien($student->hv_id))

                            <button class="edit" data-for="inp-school" data-r="School">Chỉnh
                                sửa</button>
                            <div class="School hide">
                                <form action="{{route("updateSchool")}}" method="post">
                                    @csrf
                                    <textarea placeholder="Thêm trường học của bạn" class="tare-edit tare-school"
                                        style="min-height:60px" name="data">{{$student->hv_tentruong}}</textarea>
                                    <button class="btn-update  close-School" type="button">Hủy</button>
                                    <button class="btn-update save-school" type="submit">Lưu</button>
                                </form>
                            </div>
                            @endif
                        </li>
                    </ul>

                    <!-- ... end W-Personal-Info -->

                </div>
            </div>
        </div>
        {{-- end left --}}
        {{-- main --}}
        <div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Danh sách khoá học</h6>
                    <a href="#" class="more"></a>
                </div>
                <div class="ui-block-content">


                    <!-- W-Personal-Info -->
                    <div class="row">
                        @forelse ($student->danhSachKhoaHoc as $item)

                        <div class="col-md-2 avatar">
                            <a href="{{route('course.intro',$item->l_id)}}" style="display: inline">

                                <div class="profile-image ">
                                    <img src="{{asset($item->l_daidien)}}" alt="{{$item->gs_hoten}}" class="avatar">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="{{route('course.intro',$item->l_id)}}" style="display: inline">

                                <h5 class="name">{{$item->gs_hoten}}</h5>
                                <h5 class="text-blue ">{{$item->gs_motangan}}</h5>
                                <br>
                            </a>
                        </div>
                        @empty
                        <div class="col-md-12">

                            <span class="pr-1">{{$student->hv_hoten}} chưa tham gia khoá học nào.
                            </span>
                        </div>
                        @endforelse
                    </div>

                    <!-- ... end W-Personal-Info -->

                </div>
            </div>
        </div>
        {{-- end main --}}
    </div>
</div>