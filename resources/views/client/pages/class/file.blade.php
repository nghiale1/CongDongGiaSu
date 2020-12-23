<div class="curriculum-overview">
    <div class="curriculum-type">
        Tài liệu: <span></span>
    </div>
    <div class="curriculum-lessons">
        <div class="curriculum-time">
            Số bài: <span>{{$minute}}</span>
        </div>
    </div>
</div>
@if(\Auth::check())
@if(\Auth::user()->kiemTraLopHoc($lop->l_id))

<button class="edit" data-for="" data-text="Thêm mô tả" data-height="">Chỉnh sửa</button>

<!-- Modal Upload file-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tải tệp lên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="lesson" id="lessonUpload">
                        <div class="file-loading">
                            <input id="input-res-1" name="file[]" type="file" multiple data-min-file-count="2">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="uploadImage">Tải lên</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- video --}}
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo thư mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('uploadVideo')}}" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="lesson" id="lessonUpload">
                        <div class="file-loading">
                            <input id="input-res-1" name="file[]" type="file" multiple data-min-file-count="2"
                                accept="video/mp4,video/x-m4v,video/*">
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="uploadImage">Tải lên</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@endif
@endif

<div class="curriculum-lesson-container">
    <div class="curriculum-chapter-container">
        @foreach ($lesson as $item)

        <button class="btn" type="button" data-toggle="collapse" data-target="#collapse-container-2"
            aria-expanded="false" aria-controls="collapse-container-2" style="width:100%;padding:0px;height: 60px;">
            <div class="curriculum-chapter">
                <div class="chapter-name text-left"><span style="color: red;z-index: 999;"><i class="fa fa-times"
                            aria-hidden="true"></i>&nbsp;</span>{{$item->c_ten}}
                </div>
                <div class="chappter-lesson-count">{{count($item->video)}} Bài<div class="collapse-icon collapse-down"
                        toggle-target="collapse-container-2"></div>
                </div>
            </div>
        </button>

        <div class="collapse" id="collapse-container-2" style="">
            <br>
            @foreach ($item->video as $item2)

            <a href="#" class="playVideo" data-src="{{$item2->v_duongdan}}">
                <div class="chappter-lesson">
                    <div class="lesson-name-container">

                        <img alt="1: Khóa học lập trình ReactJS tại ZendVN"
                            src="{{asset('client/img/ezgif.com-gif-maker.png')}}" width="24" height="24">
                        <div class="lesson-name">{{$item2->v_ten}}</div>
                    </div>
                    <div class="lesson-timer">{{$item2->v_dodai}}</div>
                </div>
                <div class="separate-line"></div>
            </a>
            @endforeach
            @if(\Auth::check())
            @if(\Auth::user()->kiemTraLopHoc($lop->l_id))

            <button type="button" class="btn btn-info btnUploadVideo" data-toggle="modal" data-target="#exampleModal2"
                data-lesson="{{$item->c_id}}">
                Tải lên tập tin
            </button>
            <button type="button" class="btn btn-info btnUploadVideo" data-toggle="modal" data-target="#exampleModal3"
                data-lesson="{{$item->c_id}}">
                Tạo thư mục
            </button>
            @endif
            @endif

        </div>
        @endforeach
    </div>
</div>
@push('script')
<!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/css/fileinput.min.css" media="all"
    rel="stylesheet" type="text/css" />
<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
wish to resize images before upload. This must be loaded before fileinput.min.js -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/plugins/piexif.min.js" type="text/javascript"></script> --}}
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
This must be loaded before fileinput.min.js -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/plugins/sortable.min.js" type="text/javascript"></script> --}}
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for
HTML files. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/plugins/purify.min.js"
    type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js
3.3.x versions without popper.min.js. -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> --}}
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script> --}}
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/fileinput.min.js"></script>
<!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/themes/fa/theme.js"></script>
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->

<script>
    $(document).ready(function() {
    // console.log("loi roi");
    $("#input-res-1").fileinput({
        uploadUrl: "{{ route('document.tutor.upload') }}",
        enableResumableUpload: true,
        initialPreviewAsData: true,
        maxFileNum: 5,
        theme: 'fas',
        uploadExtraData: function () {
            return {
                _token: $("input[name='_token']").val()
            }
        },
        fileActionSettings: {
            showZoom: function(config) {
                if (config.type === 'pdf' || config.type === 'image') {
                    return true;
                }
                return false;
            }
        }
    });

    $('.file-drop-zone-title').text('Kéo & thả file vào đây');
    $('.file-caption-name').attr('placeholder','Chọn file tải lên');
    $('.close fileinput-remove').attr('style','display: none;');
});

</script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
<script>
    $(document).ready(function () {
    $.contextMenu({
        selector: '#right-click',
        callback: function(key, options) {
            var id = $(this).data('id');
            if(key == "delete") {
                const del = confirm("Bạn có muốn xóa thư mục này ?");
                if(del == true){
                    $.ajax({
                        type: "GET",
                        url: "{{route('document.tutor.delete')}}",
                        data: {id:id},
                        dataType: "json",
                        success: function (response) {
                            location.reload();
                        }
                    });
                }
                else{

                }

            }
        },
        items: {
            "delete": {name: "Xóa"},
        }
    });

    // $.contextMenu({
    //     selector: '#right-click-bg',
    //     callback: function(key, options) {
    //         // var m = "clicked: " + key;
    //         // window.console && console.log(m) || alert(m);
    //         if(key == "delete"){
    //             alert("Đã xóa");
    //         }else if(key == "private"){
    //             alert("Đã chuyển trạng thái về riêng tư")
    //         }else if(key == "public"){
    //             alert("Đã chuyển trạng thái về công khai")
    //         }
    //     },
    //     items: {
    //         "paste": {name: "Dán"},
    //         "cancel": {name: "Hủy"},
    //     }
    // });
});
</script>
@endpush