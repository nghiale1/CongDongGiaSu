@extends('client.layouts.layout')
@section('breadcrum')
Đăng ký gia sư
@endsection
@push('css')
<style>
    *,
    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        margin: 0;
        /* padding: 2rem 1.5rem; */
        font: 1rem/1.5 "PT Sans", Arial, sans-serif;
        color: #5a5a5a;
    }
</style>
@endpush
@section('page')
<br>
<div class="container">
    <h2>Đăng Ký Làm Gia Sư</h2>
    <hr>
    <form action="http://www.trungtamgiasu.com/dang-ky-lam-gia-su.html" method="post" name="info_frm"
        class="form-horizontal" onsubmit="return check_info();" autocomplete="off" enctype="multipart/form-data">

        <div class="form-group">

            <label class="col-md-1 control-label"></label>

            <div class="col-md-11" style="color:#F00"> * Vui lòng cung cấp đầy đủ thông tin bên dưới để chúng tôi tiện
                liên
                lạc. </div>

        </div>
        {{-- province --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Tỉnh/Thành dạy: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <select name="tinhthanhday" class="form-control" id="tinhthanhday"
                    onchange="window.open(this.value, '_top', '')">

                    <option value="/dang-ky-lam-gia-su.html">Chọn Tỉnh/Thành</option>

                </select>

            </div>

        </div>
        {{-- gender --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Giới tính: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">
                <div class="row ">
                    <div class="col-md-6">
                        <select name="gioitinh" id="gioitinh" class="form-control">

                            <option value="0">Chọn giới tính</option>

                            <option value="1">Nam</option>

                            <option value="2">Nữ</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <select name="giongnoi" id="giongnoi" class="form-control" style="">

                            <option value="0">Chọn giọng nói</option>

                            <option value="1">Miền Nam</option>

                            <option value="2">Miền Trung</option>

                            <option value="3">Miền Bắc</option>

                        </select>
                    </div>

                </div>


            </div>

        </div>
        {{-- birth --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Ngày sinh: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7 pl-1 pr-1">
                <table class="table table-borderless m-0">
                    <tr>
                        <td>
                            <input type="text" class="dateselect" required="required" />
                        </td>
                    </tr>
                </table>
                {{-- <div class="row">
                    <div class="col-md-4">

                        <select name="ngaysinh" id="ngaysinh" class="form-control" style="">

                            <option value="0">Ngày</option>



                        </select>

                        <span>/</span>
                    </div>
                    <div class="col-md-4">

                        <select name="thangsinh" id="thangsinh" class="form-control" style="">

                            <option value="0">Tháng</option>



                        </select>

                        <span>/</span>
                    </div>
                    <div class="col-md-4">

                        <select name="namsinh" id="namsinh" class="form-control" style=" float:right;">

                            <option value="0">Năm</option>

                            <option value="1950">1950</option>

                            <option value="2003">2003</option>
                        </select>
                    </div>
                </div> --}}

            </div>

        </div>
        {{-- address --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Nguyên Quán: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <select name="noisinh" id="noisinh" class="form-control">

                    <option value="0">Tỉnh/Thành trên CMND</option>

                    <option value="1">TP. Hồ Chí Minh</option>

                </select>

            </div>

        </div>
        {{-- address --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Địa chỉ hiện tại: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" name="diachi" class="form-control" value="">

            </div>

        </div>
        {{-- mail --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Email: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" name="email" class="form-control" value="">

            </div>

        </div>
        {{-- phone --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Điện thoại: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" name="dienthoai" class="form-control" value="">
            </div>
        </div>
        {{-- card --}}
        <div class="form-group row">
            <label class="col-md-4 control-label">Ảnh thẻ: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input name="hinhthe" type="file" class="form-control">

            </div>

        </div>
        {{-- student card --}}
        <div class="form-group row">
            <label class="col-md-4 control-label">Ảnh bằng cấp hoặc thẻ sinh viên: <span
                    style="color:#FF0000">*</span></label>
            <div class="col-md-7">

                <input name="hinhbangcap" type="file" class="form-control">

            </div>

        </div>
        {{-- school --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Sinh viên (giáo viên) trường: <span
                    style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" name="truong" class="form-control" value="" placeholder="Ví dụ: Đại học Sư Phạm">

            </div>

        </div>
        {{-- major --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Ngành học: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" name="chuyennganh" class="form-control" value="">

            </div>

        </div>
        {{-- graduating --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Năm tốt nghiệp: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" name="namtotnghiep" id="namtotnghiep" class="form-control" placeholder="Ví dụ: 2010"
                    value="">

            </div>

        </div>
        {{-- position --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Hiện là: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">
                <div class="row pl-3">

                    <select name="nghenghiep" id="nghenghiep" class="form-control" style="width:45%">

                        <option value="0">Nghề nghiệp</option>

                        <option value="1">Giáo viên</option>

                        <option value="2">Sinh viên</option>
                        <option value="3">Đã tốt nghiệp</option>
                    </select>

                    <select name="trinhdo" id="trinhdo" class="form-control" style="width:45%; float:right">

                        <option value="0">Trình độ</option>

                        <option value="1">Cao Đẳng</option>

                        <option value="2">Đại Học</option>

                        <option value="3">Cử nhân</option>

                        <option value="4">Thạc sỹ</option>

                        <option value="5">Tiến sỹ</option>

                        <option value="6">Kỹ sư</option>

                        <option value="7">Bằng cấp khác</option>

                    </select>
                </div>

            </div>

        </div>
        {{-- advantage --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Ưu điểm: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <textarea name="uudiem" rows="3" class="form-control"
                    placeholder="Ví dụ: Có 3 năm kinh nghiệm dạy kèm, nhiệt tình..."></textarea>

            </div>

        </div>
        {{-- subject --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Môn dạy: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <table border="0" class="tablebox">

                    <tbody>
                        <tr>

                            <td><label><input type="checkbox" name="monday[]" id="monday" value="M1M">Toán</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M2M">Lý</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M3M">Hóa</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M4M">Văn</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M5M">Tiếng Anh</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M6M">Sinh</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M7M">Báo bài</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M8M">Sử</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M9M">Tiếng Việt</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M10M">Địa</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M11M">Vẽ</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M12M">Đàn nhạc</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M13M">Tin học</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M14M">Rèn chữ đẹp</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M15M">Tiếng Hoa</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M16M">Tiếng Nhật</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M17M">Anh văn giao tiếp</label>
                            </td>

                            <td><label><input type="checkbox" name="monday[]" value="M18M">Tiếng Hàn</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M19M">Kế toán</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M20M">Tiếng Nga</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M21M">Tiếng Pháp</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M22M">Tiếng Đức</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M23M">Tiếng Campuchia</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M24M">Tiếng Thái</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="monday[]" value="M25M">Tiếng Ý</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M26M">Môn khác</label></td>

                            <td><label><input type="checkbox" name="monday[]" value="M27M">Luyện thi đại học</label>
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>

        </div>
        {{-- level --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Lớp dạy: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <table border="0" class="tablebox">

                    <tbody>
                        <tr>

                            <td><label><input type="checkbox" name="lopday[]" id="lopday" value="L0L">Lớp lá</label>
                            </td>

                            <td><label><input type="checkbox" name="lopday[]" value="L1L">Lớp 1</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L2L">Lớp 2</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="lopday[]" value="L3L">Lớp 3</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L4L">Lớp 4</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L5L">Lớp 5</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="lopday[]" value="L6L">Lớp 6</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L7L">Lớp 7</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L8L">Lớp 8</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="lopday[]" value="L9L">Lớp 9</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L10L">Lớp 10</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L11L">Lớp 11</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="lopday[]" value="L12L">Lớp 12</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L13L">Ôn Đại Học</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L14L">Năng khiếu</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="lopday[]" value="L15L">Ngoại ngữ</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L16L">Lớp khác</label></td>

                            <td><label><input type="checkbox" name="lopday[]" value="L17L">Hệ Đại học</label></td>

                        </tr>

                    </tbody>
                </table>

            </div>

        </div>
        {{-- address --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Khu vực dạy: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <table border="0" class="tablebox">
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_1" value="K291K">Quận
                                    1</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_2" value="K292K">Quận
                                    2</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_3" value="K293K">Quận
                                    3</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_4" value="K294K">Quận
                                    4</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_5" value="K295K">Quận
                                    5</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_6" value="K296K">Quận
                                    6</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_7" value="K297K">Quận
                                    7</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_8" value="K298K">Quận
                                    8</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_9" value="K299K">Quận
                                    9</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_10" value="K300K">Quận
                                    10</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_11" value="K301K">Quận
                                    11</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_12" value="K302K">Quận
                                    12</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_13" value="K303K">Quận
                                    Thủ Đức</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_14" value="K304K">Quận
                                    Tân Phú</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_15" value="K305K">Quận
                                    Tân Bình</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_16" value="K306K">Quận
                                    Phú Nhuận</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_17" value="K307K">Quận Gò
                                    Vấp</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_18" value="K308K">Quận
                                    Bình Thạnh</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_19" value="K309K">Quận
                                    Bình Tân</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_20" value="K310K">Huyện
                                    Bình Chánh</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_21" value="K311K">Huyện
                                    Cần Giờ</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_22" value="K312K">Huyện
                                    Củ Chi</label></td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_23" value="K313K">Huyện
                                    Hóc Môn</label></td>
                            <td><label><input type="checkbox" name="khuvucday[]" id="khuvucday_24" value="K314K">Huyện
                                    Nhà Bè</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        {{-- time --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Thời gian dạy: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <table border="0" class="tablebox">

                    <tbody>
                        <tr>

                            <td><label><input type="checkbox" name="thoigianday[]" id="thoigianday" value="2S">Thứ 2 -
                                    Sáng</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="2C">Thứ 2 - Chiều</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="2T">Thứ 2 - Tối</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="thoigianday[]" value="3S">Thứ 3 - Sáng</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="3C">Thứ 3 - Chiều</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="3T">Thứ 3 - Tối</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="thoigianday[]" value="4S">Thứ 4 - Sáng</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="4C">Thứ 4 - Chiều</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="4T">Thứ 4 - Tối</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="thoigianday[]" value="5S">Thứ 5 - Sáng</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="5C">Thứ 5 - Chiều</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="5T">Thứ 5 - Tối</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="thoigianday[]" value="6S">Thứ 6 - Sáng</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="6C">Thứ 6 - Chiều</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="6T">Thứ 6 - Tối</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="thoigianday[]" value="7S">Thứ 7 - Sáng</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="7C">Thứ 7 - Chiều</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="7T">Thứ 7 - Tối</label></td>

                        </tr>

                        <tr>

                            <td><label><input type="checkbox" name="thoigianday[]" value="CNS">CN - Sáng</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="CNC">CN - Chiều</label></td>

                            <td><label><input type="checkbox" name="thoigianday[]" value="CNT">CN - Tối</label></td>

                        </tr>

                        <tr> </tr>

                    </tbody>
                </table>

            </div>

        </div>
        {{-- times --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Số buổi dạy: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">
                <div class="row pl-3">

                    <select name="sobuoiday" id="sobuoiday" class="form-control" style="width:50%">

                        <option value="0">-- Chọn số buổi dạy --</option>

                        <option value="1">1</option>

                        <option value="2">2</option>

                        <option value="3">3</option>

                        <option value="4">4</option>

                        <option value="5">5</option>

                        <option value="6">6</option>

                        <option value="7">7</option>

                    </select> buổi/tuần
                </div>

            </div>

        </div>
        {{-- salary --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Mức lương yêu cầu: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" name="mucluong" id="mucluong" class="form-control" value="" style="width:50%">
                đồng/tháng

            </div>

        </div>
        {{-- request --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Yêu cầu khác: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <textarea name="yeucaukhac" rows="3" class="form-control"></textarea>

            </div>

        </div>
        {{-- captcha --}}
        <div class="form-group row">

            <label class="col-md-4 control-label">Mã bảo vệ: <span style="color:#FF0000">*</span></label>

            <div class="col-md-7">

                <input type="text" id="securitycode" class="form-control" name="securitycode" value=""
                    style="width:50%; vertical-align:top">

                <img src="" align="absmiddle" style="height:35px; width:110px !important" alt="captcha"></div>

        </div>
        {{-- submit --}}
        <div class="form-group row">

            <label class="col-md-4 control-label"></label>

            <div class="col-md-7">

                <input name="dangky" type="submit" class="input_button" value="&nbsp;Đăng ký&nbsp;">

            </div>

        </div>

    </form>

</div>
@endsection
@push('script')
<script type="text/javascript">
    // https://github.com/uxsolutions/bootstrap-datepicker

$('.dateselect').datepicker({
    format: 'mm/dd/yyyy',
    // startDate: '-3d'
});

// $('.dateselect2').datepicker({
//     format: 'mm/dd/yyyy',
//     autoclose:true,
//     todayHighlidht: true,
// }).on("hide", function(){
//   if ($)
// }





 
</script>
@endpush