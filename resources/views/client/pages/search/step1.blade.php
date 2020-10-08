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
        <h2>Chọn chuyên môn cho {{$request->search}}</h2>
        <br>
        <div class="step1">
            <div class="row row-cols-3">

                @foreach($chuyenmon as $item)
                <div class="col">
                    <form action="{{route('search.step2')}}" method="get">
                        {{-- @csrf --}}
                        <input type="hidden" name="chuyen_mon" id="" value="{{$item->cm_id}}">
                        <button class="btn btn-white btn-cm" type="submit">
                            {{$item->cm_ten}}
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
</script>
@endpush