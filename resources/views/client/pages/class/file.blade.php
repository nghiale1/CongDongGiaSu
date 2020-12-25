<div class="curriculum-overview">
    <div class="curriculum-type">
        Tài liệu <span></span>
    </div>
    <div class="curriculum-lessons">
        <div class="curriculum-time">
            Số tài liệu: <span>{{$countFilde}}</span>
        </div>
    </div>
</div>
@if(\Auth::check())
@if(\Auth::user()->kiemTraLopHoc($lop->l_id))
<button type="button" class="btn btn-info btnUploadVideo" data-toggle="modal" data-target="#exampleModal3">
    Thêm chương mới
</button>


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
            <form action="{{ route('tutor.class.createFolder') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <input name="thumuchientai" type="hidden" value="{{$lop->l_id}}">
                    <div class="form-group">
                        <input type="text" class="form-control" name="tenthumuc" placeholder="Nhập tên chương . . ">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tạo</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
@endif

<div class="curriculum-lesson-container">
    <div class="curriculum-chapter-container">
        <br>
        @foreach ($folder as $item)

        <button class="btn" type="button" data-toggle="collapse" data-target="#collapse-{{$item->tml_slug}}"
            class="right-click-folder" aria-expanded="false" aria-controls="collapse-{{$item->tml_slug}}"
            style="width:100%;padding:0px;height: 60px;">
            <div class="curriculum-chapter right-click-folder" data-id="{{$item->tml_id}}">
                <div class="chapter-name text-left">{{$item->tml_ten}}
                </div>
            </div>
        </button>

        <div class="collapse" id="collapse-{{$item->tml_slug}}">
            <br>
            @foreach ($item->taptin as $item2)

            <a href="{{asset($item2->ttl_duongdan)}}" data-src="{{$item2->ttl_duongdan}}" class="right-click-file"
                data-id="{{$item2->ttl_id}}" download>
                <div class="chappter-lesson">
                    <div class="lesson-name-container">

                        <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;
                        <div class="lesson-name">{{$item2->ttl_ten}}</div>
                    </div>
                    <div class="lesson-timer">{{$item2->ttl_kichthuoc}}</div>
                </div>
                <div class="separate-line"></div>
            </a>
            @endforeach
            @if(\Auth::check())
            @if(\Auth::user()->kiemTraLopHoc($lop->l_id))

            <button type="button" class="btn btn-info btnUploadVideo" data-toggle="modal"
                data-target="#example{{$item->tml_slug}}">
                Thêm tập tin
            </button>
            <!-- Modal Upload file-->
            <div class="modal fade" id="example{{$item->tml_slug}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tải tệp lên</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('tutor.class.createFile') }}" enctype="multipart/form-data"
                            method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="file-loading">
                                    <input class="input-res-1" name="file[]" type="file" multiple
                                        data-min-file-count="2">
                                </div>
                                <input type="hidden" value="{{$item->tml_id}}" name="tml_id">

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="uploadImage">Tải lên</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @endif

        </div>
        @endforeach
    </div>
</div>