@extends('admin.layouts.layout')
@section('head')
Môn học
@endsection
@push('css')
<style>
    #cm_length {
        float: right;
    }

    #cm_filter {
        float: right;
    }

    .edi {
        border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: groove;
        background-color: transparent;
    }

    .edi:hover {
        background-color: yellow;
    }

    .hide {
        display: none
    }
</style>
@endpush
@section('page')

<!-- main content start -->
<div class="main-content">



    <!-- content -->
    <div class="container-fluid content-top-gap">
        <a href="" data-toggle="modal" data-target="#create" style="width:80px"
            class="btn btn-success waves-effect waves-light m-r-10">
            Thêm
        </a>
        {{-- create --}}
        <div class="modal fade" id="create" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body modal-body-sub_agile">
                        <div class="modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Thêm môn học</h3>
                            <br>
                            <form action="{{route('dashboard.addMonHoc')}}" method="post">
                                @csrf
                                <select name="linhvuc" id="" class="form-control">
                                    <option value="none">Không</option>
                                    @foreach ($lv as $item)
                                    <option value="{{$item->lv_id}}">{{$item->lv_ten}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <input type="text" class="form-control" placeholder="Thêm môn học" name="name"
                                    required="">
                                <br>
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
        <br>
        <br>
        {{-- //create --}}

        <table class="table table-hover table-light" id="cm">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên môn</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monHoc as $key=>$item)

                <tr>
                    <td>{{$key+1}}</td>
                    <td>
                        <span class="hide">{{$item->cm_ten}}</span>
                        <input type="text" value="{{$item->cm_ten}}" class="edi" data-id="{{$item->cm_id}}">
                    </td>
                    <td>
                        <form action="{{route('dashboard.xoaMonHoc',$item->cm_id)}}" method="post" class="delete_form">
                            @csrf

                            <button type="submit" style="border: none;background-color: Transparent;color: red;">
                                <i class="fa fa-times" aria-hidden="true"></i></a>
                            </button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- //content -->
</div>
<!-- main content end-->
@endsection
@push('script')
<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"> </script>

<script>
    $(document).ready(function () {
            $('#cm').DataTable({
            
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Vietnamese.json"
            },
            "order": [[ 0, "asc" ]]
        });
        $('.edi').bind("enterKey",function(e){
            e.preventDefault();
            var id=$(this).attr('data-id');
            var name=$(this).val();
            $.ajaxSetup({
                headers:{
                    'X-CSRF-Token':'{{csrf_token()}}',
                }
            });
            $.ajax({
                type: "post",
                url: "{{route('dashboard.updateMonHoc')}}",
                data: {id:id,name:name},
                dataType: "json",
                success: function (response) {
                }
            });
        });
        $(".edi").focus(function() {
        }).blur(function() {
            $(this).trigger("enterKey");
        });
        $('.edi').keyup(function(e){
            if(e.keyCode == 13||e.keyCode==9)
            {
                $(this).trigger("enterKey");
            }
        });
    });
</script>
@endpush