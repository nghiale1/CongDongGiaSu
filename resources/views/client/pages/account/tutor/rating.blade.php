@push('css')
<style>
    .frame-avatar-review {

        width: 90px;
        height: 90px;
        overflow: hidden;
        border-radius: 90px;
    }

    .avatar-review {

        width: 100%;
        min-width: 100%;
        min-height: 100%;
    }

    .student-name {
        line-height: 1.5rem;
        color: #303336;
        font-size: 1.125rem;
        display: inline-block;
    }

    .student-class {
        font-size: .875rem;
        line-height: 18px;
        line-height: 1.125rem;
        font-weight: 600;
        letter-spacing: 0;
        font-weight: normal;
        color: #67657d;
        margin-left: 7px;
        font-family: "Source Sans Pro", sans-serif;
    }

    .review-timestamp {
        float: right;
        font-size: 1rem;
        line-height: 1.25rem;
        font-weight: 400;
        color: #8d89aa;
        margin-left: 0;
        font-family: "Source Sans Pro", sans-serif;
    }

    .content {
        font-family: "Source Sans Pro", sans-serif;
        /* font-size: 17px; */
        font-size: 1.0625rem;
        /* line-height: 20px; */
        /* line-height: 1.25rem; */
        /* color: #303336; */
        font-weight: 400;
        color: #67657d;
        margin-top: 3px;
        line-height: initial;
        word-break: break-word;
        white-space: pre-line;
    }

    #rating {
        border: none;
        /* float: left; */
        display: inline-block;
        position: relative;
        top: 15px;
    }

    #rating>input {
        display: none;
    }

    #rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    #rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    #rating>label {
        color: #ddd;
        float: right;
    }

    #rating>input:checked~label,
    #rating:not(:checked)>label:hover,
    #rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    #rating>input:checked+label:hover,
    #rating>input:checked~label:hover,
    #rating>label:hover~input:checked~label,
    #rating>input:checked~label:hover~label {
        color: #FFED85;
    }
</style>
@endpush
<div class="row">
    <div class="col-md-3">Đánh giá</div>
    <div class="col-md-9">

        <div class="review">
            <span class="star-white">

                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span class="star-yellow" style="width:{{$tutor->danhgia['dem']['trungbinh']*20}}%">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
            </span>
        </div> {{$tutor->danhgia['dem']['trungbinh']}} ({{$tutor->danhgia['tong']}} dánh giá)
        <br>
        <br>
        <div class="flex">
            <b>5 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: {{$tutor->danhgia['phantram']['nam']}}%"></span>
            </div>
            <span>({{$tutor->danhgia['dem']['nam']}})</span>
        </div>
        <div class="flex">
            <b>4 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: {{$tutor->danhgia['phantram']['bon']}}%"></span>
            </div>
            <span>({{$tutor->danhgia['dem']['bon']}})</span>
        </div>
        <div class="flex">
            <b>3 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: {{$tutor->danhgia['phantram']['ba']}}%"></span>
            </div>
            <span>({{$tutor->danhgia['dem']['ba']}})</span>
        </div>
        <div class="flex">
            <b>2 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: {{$tutor->danhgia['phantram']['hai']}}%"></span>
            </div>
            <span>({{$tutor->danhgia['dem']['hai']}})</span>
        </div>
        <div class="flex">
            <b>1 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: {{$tutor->danhgia['phantram']['mot']}}%"></span>
            </div>
            <span>({{$tutor->danhgia['dem']['mot']}})</span>
        </div>




    </div>

</div>