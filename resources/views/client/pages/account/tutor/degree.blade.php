@push('css')
<style>
    /* .hide {} */
</style>
@endpush
<div class="row">
    <div class="col-md-3">Bằng cấp</div>
    <div class="col-md-9">
        <div class="cont">


            @foreach ($degree as $item)
            <div class="bangcap-{{$item->bc_id}}">
                @if(\Auth::check())
                @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
                <a href="#" class="removeBC" style="color: red" onclick="return removebc({{$item->bc_id}})">
                    <i class="fa fa-times" aria-hidden="true"></i></a>&nbsp;
                @endif
                @endif
                <h6 class="school-name">
                    {{$item->bc_tenbangcap}}
                </h6>
                <span class="float-right">{{$item->bc_ngaycap}} <a href="{{asset($item->bc_hinhanh)}}"
                        target="_blank"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
                <br>
            </div>
            @endforeach
        </div>
        <!-- Button trigger modal -->
        @if(\Auth::check())
        @if(\Auth::user()->kiemTraGiaSu($tutor->gs_id))
        <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#addDegree">
            Thêm
        </button>
        @endif
        @endif
        <!-- Modal -->
        <div class="modal fade" id="addDegree" tabindex="-1" role="dialog" aria-labelledby="addDegreeLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDegreeLabel">Thêm nơi từng học</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="post" id="frm-addDegree">
                        @csrf
                        <div class="modal-body">
                            <label for="">Hình ảnh</label>
                            <input type="file" accept="image/*" placeholder="Hình ảnh" class="bc_hinhanh form-control"
                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                            <img id="image" alt="Chọn hình ảnh" width="100" height="100" class="" />
                            <br>
                            <br>
                            <label for="">Tên bằng</label>
                            <input type="text" name="" placeholder="Tên chuyên ngành"
                                class="bc_tenbangcap form-control">
                            <br>
                            <label for="">Ngày cấp</label><br>
                            <input type="number" min="1900" max="2099" step="1" value="2020"
                                class="bc_ngaycap form-ctl" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary clos" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" id="sub-addPlace">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    $(document).ready(function(){
        $('#imagen[src=""]').addClass('hiden');
        $('#imagen:not([src=""])').removeClass('hiden');
    });
</script>
<script>
    $(document).ready(function () {
        $('#frm-addDegree').submit(function (e) { 
            e.preventDefault();
             //Lấy ra files
            var file_data = $('.bc_hinhanh').prop('files')[0];
            console.log(file_data);
            //khởi tạo đối tượng form data
            var form_data = new FormData();
            //thêm files vào trong form data
            //sử dụng ajax post
            let bc_tenbangcap=$('.bc_tenbangcap').val();
            let bc_ngaycap=$('.bc_ngaycap').val();


            form_data.append('bc_hinhanh', $('.bc_hinhanh').prop('files')[0]);
            form_data.append('bc_tenbangcap', bc_tenbangcap);
            form_data.append('bc_ngaycap', bc_ngaycap);
            console.log(form_data);
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                url: "{!!route('addDegree')!!}", // gửi đến file upload.php 
                cache:false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (res) {
                    location.reload();
                },
                error:function(e){
                    console.log(e);
                }
            });
        return false;
        });

        function removebc() { 
            e.preventDefault();
            if(!confirm('Bạn có chắc muốn xóa')){
                return false;
            }
            let id= $(this).attr('data-id');
            
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                url: "{!!route('removeDegree')!!}", 
                data: {id:id},
                type: 'post',
                success: function (res) {
                    console.log(res);
                    $('.bangcap-'+id).html('');
                    
                },
                error:function(e){
                    console.log(e);
                }
            });
        };
    });
</script>
@endpush