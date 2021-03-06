@if(\Auth::check())
@if(\Auth::user()->kiemTraLopHoc($lop->l_id))

<!-- Modal Upload file-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tải lên video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('uploadVideo')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">

                        <input type="hidden" name="lop" value="{{$lop->l_id}}">
                        <div class="file-loading">
                            <input class="input-res-1" name="file[]" type="file" multiple data-min-file-count="2"
                                accept="video/mp4,video/x-m4v,video/*">
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
@endif
@endif

<div class="curriculum-lesson-container">
    <div class="curriculum-chapter-container">

        <button class="btn" type="button" data-toggle="collapse" data-target="#collapse-container-1"
            aria-expanded="false" aria-controls="collapse-container-1" style="width:100%;padding:0px;height: 60px;">
            <div class="curriculum-chapter">
                <div class="chapter-name text-left">Video
                </div>
            </div>
        </button>

        <div class="collapse" id="collapse-container-1">
            <br>
            @foreach ($video as $key=>$item2)

            <a href="#" class="playVideo right-click-video" data-id="{{$item2->v_id}}" data-src="{{$item2->v_duongdan}}"
                data-num="{{$key}}">
                <div class="chappter-lesson">
                    <div class="lesson-name-container">

                        <img alt="{{$item2->v_ten}}" src="{{asset('client/img/ezgif.com-gif-maker.png')}}" width="24"
                            height="24">
                        <div class="lesson-name">{{$item2->v_ten}}</div>
                    </div>
                    <div class="lesson-timer">{{$item2->v_dodai}}</div>
                </div>
                <div class="separate-line"></div>
            </a>
            @endforeach
            @if(\Auth::check())
            @if(\Auth::user()->kiemTraLopHoc($lop->l_id))

            <button type="button" class="btn btn-info btnUploadVideo" data-toggle="modal" data-target="#exampleModal1">
                Thêm video
            </button>
            @endif
            @endif

        </div>
    </div>
</div>
@push('script')

@endpush