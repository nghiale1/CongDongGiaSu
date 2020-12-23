@extends('client.layouts.layout')
@section('head')
Cộng đồng gia sư
@endsection
@section('breadcrum')
{{ $findFolder->tmgs_ten }}
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('dropzone/dropzone.css')}}">

<style>
    a.down {
        position: absolute;
        top: 22%;
        right: 10%;
        z-index: 2;
    }

    .modal {
        z-index: 9999;
    }
</style>
@endpush

@section('page')
<br>
<div class="container">
    <div class="row">
        <p style="border-top: 2px solid blue;"></p>

        <div class="col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1">
                Tải tệp lên
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                Tạo thư mục
            </button>
            <br>
            <br>
        </div>
    </div>


    <div class="col-md-12" style="padding-left: 0px;">
        <div class="row">
            @if (count($folder) > 0)
            @foreach ($folder as $item)
            @include('client.pages.document.folder')
            @endforeach
            @else
            <div class="col-md-3">
                <div class="folder">
                    <h5></h5>
                </div>
            </div>
            @endif
            <br>
            <br>

            <div class="col-md-12">
                <hr>
            </div>
            @if (count($file) != null)
            @foreach ($file as $item)
            <div class="col-md-3">
                <a href="{{asset($item->ttgs_duongdan)}}" class="btn btn-outline-info file" style="width: 100%;"
                    id="right-click" data-id="{{ $item->ttgs_id }}" download>
                    <h5 style="font-size: 10px;">
                        <i class="fa fa-folder" aria-hidden="true"></i> {{$item->ttgs_ten}}
                    </h5>
                </a>
            </div>
            @endforeach
            @else
            <div class="col-md-3">
                <div class="folder">
                    <h5></h5>
                </div>
            </div>
            @endif
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
                <form action="{{ route('document.tutor.upload') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="file-loading">
                            <input id="input-res-1" name="file[]" type="file" multiple data-min-file-count="2">
                        </div>
                        <input type="hidden" value="{{ $findFolder->tmgs_id }}" name="fo_id">
                        <input type="hidden" value="{{ $findFolder->tmgs_duongdan }}" name="fo_dir">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="uploadImage">Tải lên</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal tạo thư mục-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tạo thư mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('document.tutor.createFolder') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <input name="thumuchientai" type="hidden" value="{{$findFolder->tmgs_id}}">
                        <input name="duongdan" type="hidden" value="{{$findFolder->tmgs_duongdan}}">
                        <div class="form-group">
                            <input type="text" class="form-control" name="tenthumuc"
                                placeholder="Nhập tên thư mục cần tạo . . ">

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
</div>
<br>
@endsection

@push('script')
<script src="{{asset('dropzone/dropzone.js')}}"></script>
@include('client.pages.document.script')
<script>
    (function($) {
    $('input[type="file"]').bind('change', function() {
      $("#img_text").html($('input[type="file"]').val());
    });
  })
  
</script>
@endpush