@push('css')
<style>
    .suggestion-avatar {
        width: 100%;
        height: 195px;
    }

    .suggestion-title {
        min-height: 60px;
        line-height: 20px;
        margin: 0 0 16px;
        overflow: hidden;
        display: block;
        text-align: left;
    }
</style>
@endpush

@if (\Auth::user()->kiemTraGiaoDich($lop->l_id))
@else
<div class="sugg white">
    <img src="{{asset($lop->l_daidien)}}" alt="{{$lop->l_ten}}" load="lazy" class="suggestion-avatar rounded-top pb-1">
    {{-- {{dd(\Auth::user()->giaodichs())}} --}}
    <div class="content pl-4 pr-4">

        <strong>

            <h4 class="pt-2" style="    font-family: Open Sans,sans-serif;">
                {{number_format($lop->l_hocphi)}} đ
            </h4>
        </strong>
        <br>
        <form action="{{route('VNPay',$lop->l_id)}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger" style="width: 100%">ĐĂNG KÝ</button>
        </form>
        <br>
        <br>
    </div>
</div>
<br>
@endif
@foreach ($suggestion as $item)
<div class="sugg white">
    <a href="{{route('course.intro',$item->l_id)}}">
        <img src="{{asset($item->l_daidien)}}" alt="{{$item->l_ten}}" load="lazy"
            class="suggestion-avatar rounded-top pb-1">
        <div class="content pl-3 pr-3">
            <span class="">{{$item->slhv}} học viên</span>
            <span class="float-right">{{$item->thoigian}}</span>
            <strong>

                <p class="suggestion-title">
                    {{$item->l_ten}}
                </p>
            </strong>
        </div>
    </a>
</div>




@endforeach