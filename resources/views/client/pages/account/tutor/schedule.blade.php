@push('css')
<style>
    .dropdown-item {
        margin: 5px;
        margin-left: 17px;
        margin-right: 17px;
        z-index: 999;
    }

    .dropdown-item:hover {
        display: block;
        color: blue;
    }
</style>
@endpush
<div class="row">
    <div class="col-md-3">Lịch dạy</div>
    <div class="col-md-9">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr class="text-center">
                    <td style="width:20%">&nbsp;</td>
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
                    @for($i=0;$i<7;$i++) @if($schedule[$i]->ctld_trangthai=='Ranh')

                        <td class="square" data-type="free" data-id="{{$i}}">
                            <green-tick></green-tick>
                        </td>

                        @else

                        <td class="busy square" data-type="busy" data-id="{{$i}}">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach ($schedule[$i]->lop as $item)

                                    <a class="dropdown-item"
                                        href="{{route('course.intro',$item->l_id)}}">{{$item->l_ten}}</a>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="dropdown">
                                <button class="btn dropdown-toggle rounded-0 " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    
                                </div>
                            </div> --}}
                        </td>

                        @endif

                        @endfor

                </tr>
                <tr>
                    <td class="text-left"><img src="{{asset('/client/svg/afternoon.svg')}}" alt="">Chiều</td>
                    @for($i=7;$i<14;$i++) @if($schedule[$i]->ctld_trangthai=='Ranh')

                        <td class="square" data-type="free" data-id="{{$i}}">
                            <green-tick></green-tick>
                        </td>

                        @else

                        <td class="busy square" data-type="busy" data-id="{{$i}}">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach ($schedule[$i]->lop as $item)

                                    <a class="dropdown-item"
                                        href="{{route('course.intro',$item->l_id)}}">{{$item->l_ten}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </td>

                        @endif

                        @endfor

                </tr>
                <tr>
                    <td class="text-left"><img src="{{asset('/client/svg/evening.svg')}}" alt="">Tối</td>
                    @for($i=14;$i<21;$i++)@if($schedule[$i]->ctld_trangthai=='Ranh')

                        <td class="square" data-type="free" data-id="{{$i}}">
                            <green-tick></green-tick>
                        </td>

                        @else

                        <td class="busy square" data-type="busy" data-id="{{$i}}">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach ($schedule[$i]->lop as $item)

                                    <a class="dropdown-item"
                                        href="{{route('course.intro',$item->l_id)}}">{{$item->l_ten}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </td>

                        @endif

                        @endfor
                </tr>
            </tbody>
        </table>

    </div>
</div>
@push('script')
<script>
    $(document).ready(function () {
        $('.square').click(function (e) { 
            e.preventDefault();
            let type=$(this).attr('data-type');
            let id=$(this).attr('data-id');
            // if(type=='busy'){
            //     $(this).removeClass('busy');
            //     $(this).html('<img src="{{asset("/client/svg/greenTick.svg")}}" alt="" class="green-tick">');
            //     $(this).attr('data-type', 'free');
                
            // }
            if(type=='free'){
                $(this).attr('data-type', 'busy');
                $(this).addClass('busy');
                $(this).html('');
            }
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            $.ajax({
                type: "post",
                url: "{!!route('changeStatusSchedule')!!}",
                data: {id:id,type:type},
                success: function (response) {
                    // console.log(response);
                },
                error:function (e) {
                    // console.log(e);
                }
            });
                $.ajaxSetup({
            }); 
        });
    });
</script>
<script>
    // $(document).ready(function () {
    //     $('.dropdown').click(function (e) { 
    //         let id=$(this).attr('data-id');
    //         e.preventDefault();
    //         id.classList.toggle("mystyle");
    //     });
    // });
</script>
@endpush