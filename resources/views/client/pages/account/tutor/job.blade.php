{{-- <div class="row">
    <div class="col-md-3">Công việc</div>
    <div class="col-md-9">
        <div class="edu">
            @if ($school!=null)
            @foreach ($school as $item)
            <h6 class="school-name">
                {{$item->th_ten}}
</h6>
<span class="float-right">{{$item->th_batdau}}-{{$item->th_ketthuc}}</span>
<p>
    {{$item->th_chucdanh}}
</p>
@endforeach
@endif
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-edit" data-toggle="modal" data-target="#addPlace">
    Thêm
</button>

<!-- Modal -->
<div class="modal fade" id="addPlace" tabindex="-1" role="dialog" aria-labelledby="addPlaceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPlaceLabel">Thêm công ty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="frm-addPlace">
                @csrf
                <div class="modal-body">
                    <div class="row">

                    </div>
                    <label for="">Tên công ty</label>
                    <input type="text" placeholder="Tên trường" id="inp-school" class="form-control" autofocus>
                    <br>
                    <label for="">Chức vụ</label>
                    <input type="text" name="" id="" placeholder="Tên chuyên ngành" id="inp-title" class="form-control">
                    <br>
                    <label for="">Khoảng thời gian</label><br>
                    <input type="number" min="1900" max="2099" step="1" value="2020" id="inp-from" class="form-ctl" />
                    <span>Đến</span>
                    <input type="number" min="1900" max="2099" step="1" value="2020" id="inp-to" class="form-ctl" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary" id="sub-addPlace">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>


</div>
</div> --}}