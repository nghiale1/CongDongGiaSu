@extends('client.layouts.layout')
@section('head')
Cộng đồng gia sư |
@endsection
@section('breadcrum')
Giới thiệu
@endsection
@push('css')
<style>
    .w3l-about-breadcrum {
        display: none;
    }

    .step3 .btn {
        display: block;
        width: 80%;
        padding: 15px;
        margin: 5px;
    }

    .btn-white {
        background-color: white;
        box-shadow: 0 0 1px gray;
    }

    input[type=checkbox] {
        zoom: 3;
        background-color: red;
    }

    input[type=checkbox]:checked {
        background-color: red;
    }

    .step3 {
        width: 55%;
    }
</style>
@endpush

@section('page')
<br>
<div class="container">
    <center>
        <h2>Chọn trình độ học viên</h2>
        <br>
        <div class="step3">

            <div class="">

                <div class="">
                    <form action="{{route('search.match')}}" method="get">
                        {{-- @csrf --}}
                        <table class="table table-borderless" style="text-align: center;">
                            <tr>
                                <td></td>
                                <td>Thứ 2</td>
                                <td>Thứ 3</td>
                                <td>Thứ 4</td>
                                <td>Thứ 5</td>
                                <td>Thứ 6</td>
                                <td>Thứ 7</td>
                                <td>Chủ nhật</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Sáng</td>
                                <td><input type="checkbox" value="1" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="2" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="3" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="4" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="5" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="6" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="7" name="ngay_thu[]">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Chiều</td>
                                <td><input type="checkbox" value="8" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="9" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="10" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="11" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="12" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="13" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="14" name="ngay_thu[]">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Tối</td>
                                <td><input type="checkbox" value="15" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="16" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="17" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="18" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="19" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="20" name="ngay_thu[]">
                                </td>
                                <td><input type="checkbox" value="21" name="ngay_thu[]">
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <input type="radio" value="any" id="any">
                        <label for="any">Bất kỳ lúc nào</label>
                        <input type="hidden" name="chuyen_mon" value="{{$request->chuyen_mon}}">
                        <input type="hidden" name="doi_tuong_nguoi_hoc" value="{{$request->doi_tuong_nguoi_hoc}}">
                        <button class="btn btn-white btn-cm" type="submit">
                            Lưu
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </center>
    <br>
</div>
@endsection

@push('script')
<script>
    // $(document).ready(function () {
    //     $('.btn-cm').click(function (e) { 
    //         e.preventDefault();
    //         var cm=$(this).attr('data-cm');
    //         $.ajax({
    //             type: "post",
    //             url: "{!!route('search.step2')!!}",
                
    //             data: { "_token": "{{ csrf_token() }}",cm:cm},
    //             success: function (response) {
    //                 console.log(response);
    //             },
    //             error:function(e){
    //                 console.log(e);
    //             }
    //         });
            
    //     });
    // });
</script>
@endpush