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

    .step1 .btn {
        display: block;
        width: 80%;
        padding: 15px;
        margin: 5px;
    }

    .btn-white {
        background-color: white;
        box-shadow: 0 0 1px gray;
    }
</style>
@endpush

@section('page')
<br>
<div class="container">
    <center>
        <h2>Chọn trình độ học viên</h2>
        <br>
        <div class="step1">
            <div class="row row-cols-3">

                @foreach($dtnh as $item)
                <div class="col">
                    <form action="{{route('search.step3')}}" method="get">
                        {{-- @csrf --}}
                        <input type="hidden" name="chuyen_mon" value="{{$request->chuyen_mon}}">
                        <input type="hidden" name="doi_tuong_nguoi_hoc" value="{{$item->dtnh_id}}">
                        <button class="btn btn-white btn-cm" data-cm="{{$item->dtnh_id}}" type="submit">
                            {{$item->dtnh_ten}}
                        </button>
                    </form>
                </div>
                @endforeach
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