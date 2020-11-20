<div class="white padding" id="curriculum">
    <div class="title">
        Giáo trình
    </div>
    <div class="curriculum-overview">
        <div class="curriculum-type">
            Thể loại: <span>CNTT</span>
        </div>
        <div class="curriculum-lessons">
            <div class="curriculum-lessons-number">
                Số bài: <span>{{$countVideo}}</span>
            </div>
            <div class="curriculum-time">
                Thời lượng: <span>{{$minute}}:{{$second}}</span>
            </div>
        </div>
    </div>



    <div id="scrollIntoView"></div>
    <div id="video">
    </div>

    <button class="edit" data-for="" data-text="Thêm mô tả" data-height="">Chỉnh sửa</button>
    <div class="curriculum-lesson-container">
        <div class="curriculum-chapter-container">
            @foreach ($lesson as $item)

            <button class="btn" type="button" data-toggle="collapse" data-target="#collapse-container-1"
                aria-expanded="false" aria-controls="collapse-container-1" style="width:100%;padding:0px;height: 60px;">
                <div class="curriculum-chapter">
                    <div class="chapter-name text-left"><span style="color: red;z-index: 999;"><i class="fa fa-times"
                                aria-hidden="true"></i>&nbsp;</span>{{$item->c_ten}}
                    </div>
                    <div class="chappter-lesson-count">{{count($item->video)}} Bài<div
                            class="collapse-icon collapse-down" toggle-target="collapse-container-1"></div>
                    </div>
                </div>
            </button>

            <div class="collapse" id="collapse-container-1" style="">
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
                <button type="button" class="btn btn-info btnUploadVideo" data-toggle="modal"
                    data-target="#exampleModal1" data-lesson="{{$item->c_id}}">
                    Thêm video
                </button>
            </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Modal Upload file-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tải tệp lên</h5>
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
                            <label for="input-res-1">Tải file
                            </label>
                            <input id="input-res-1" name="file" type="file" multiple style="display: none">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="uploadImage">Upload</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>