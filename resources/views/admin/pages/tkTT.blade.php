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
        <table>
            <form action="{{route('dashboard.tkGSChon')}}" method="get">
                @csrf

                <tr>
                    <td><input type="date" id="from" name="from" required></td>
                    <td><input type="date" id="to" name="to" required></td>
                    <td>
                        <button type="submit" id="submit" class="btn btn-success">Tìm</button>
                    </td>
                </tr>
            </form>
        </table>
        <br>
        <br>
        {{-- //create --}}

        <table class="table table-hover table-light" id="cm">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Lớp học</th>
                    <th>Học viên</th>
                    <th>Số tiền</th>
                </tr>
            </thead>
            <tbody>
                <div class="data">
                    @foreach ($tt as $key=>$item)

                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->l_ten}}</td>
                        <td>{{$item->hv_hoten}}</td>
                        <td>{{$item->gd_tongtien}}</td>
                    </tr>
                    @endforeach
                </div>
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
       
    //    $('#submit').click(function (e) { 
    //        e.preventDefault();
    //        let from= $('#from').val();
    //        let to= $('#to').val();
    //        $.ajax({
    //            type: "get",
    //            url: "{{route('dashboard.tkGSChon')}}",
    //            data: {from:from,to:to},
    //            dataType: "json",
    //            success: function (response) {
    //                let html="";
    //                let i=1;
    //                response.forEach(element => {
                       
    //                html+="<tr>";
    //                html+="<td>";
    //                html+=i;
    //                html+="</td>";
    //                html+="<td>";
    //                html+=element.gs_hoten;
    //                html+="</td>";
    //                html+="<td>";
    //                html+=element.gs_diachi;
    //                html+="</td>";
    //                html+="<td>";
    //                html+=element.gs_gioitinh;
    //                html+="</td>";
    //                html+="</td>";
    //                i++;
    //                });
    //                $('.data').html(html);
    //                console.log(html);
    //            }
    //        });
    //    });
    });
</script>
@endpush