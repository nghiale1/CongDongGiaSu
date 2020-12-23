@push('css')
<style>
    .btn-outline-info {
        color: black;
    }

    .btn-outline-warning {
        color: black;
    }

    a.down {
        position: absolute;
        top: 22%;
        right: 10%;
        z-index: 9999;
    }
</style>
@endpush
<div class="col-md-3">
    <div class="folder">
        <a href="{{route('document.tutor.into',$item->tmgs_slug)}}" class="btn btn-outline-warning mt-1 mb-1"
            style="width: 100%;" id="right-click-bg">
            <h5 style="font-size: 12px;padding:5px; ">
                <i class="fa fa-folder" aria-hidden="true"></i> {{ $item->tmgs_ten }}
            </h5>
        </a>
        <a href="{{route('document.tutor.zip',$item->tmgs_id)}}" class="down">

            <i class="fa fa-download" aria-hidden="true"></i>
        </a>
    </div>
</div>