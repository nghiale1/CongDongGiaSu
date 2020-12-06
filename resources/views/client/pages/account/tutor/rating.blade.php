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
                <span class="star-yellow" style="width:50%">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
            </span>
        </div> 5.0 (77 ratings)
        <br>
        <br>
        <div class="flex">
            <b>5 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: 1.3%"></span>
            </div>
            <span>(1)</span>
        </div>
        <div class="flex">
            <b>4 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: 1.3%"></span>
            </div>
            <span>(1)</span>
        </div>
        <div class="flex">
            <b>3 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: 1.3%"></span>
            </div>
            <span>(1)</span>
        </div>
        <div class="flex">
            <b>2 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: 1.3%"></span>
            </div>
            <span>(1)</span>
        </div>
        <div class="flex">
            <b>1 sao</b>
            <div class="rating-bar-container">
                <span class="rating-bar" style="width: 1.3%"></span>
            </div>
            <span>(1)</span>
        </div>




    </div>
</div>
<hr>
<div class="comment">
    <div class="row">
        <div class="col-md-2 ">
            <div class="frame-avatar-review">

                <img src="{{asset('client/svg/teacher_male.svg')}}" alt="" class="avatar-review">
            </div>
        </div>
        <div class="col-md-10">
            <div class="review">
                <span class="star-white">

                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span class="star-yellow" style="width:50%">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                </span>
            </div>
            <br>
            <p class="student-name">Nghĩa
                <span class="student-class">Lớp học</span>
            </p>
            <span class="review-timestamp">Thời gian</span>
            <p class="content">Patient and always explains things well - Has given my daughter a lot of confidence in
                this subject -Thank you</p>
        </div>
    </div>
    <br>
    {{-- bình luận --}}
    <form method="post" action="{{route('rating',$tutor->gs_id)}}">
        @csrf
        <div class="row">

            <div class="col-md-1">

                <img src="{{asset('client/svg/teacher_male.svg')}}" alt="author" class="avatar-review">
            </div>
            <div class="col-md-11 pl-0">
                <div id="rating">
                    <input type="radio" id="star5" name="rating" value="5" required />
                    <label class="full" for="star5"></label>

                    <input type="radio" id="star4" name="rating" value="4" required />
                    <label class="full" for="star4"></label>

                    <input type="radio" id="star3" name="rating" value="3" required />
                    <label class="full" for="star3"></label>

                    <input type="radio" id="star2" name="rating" value="2" required />
                    <label class="full" for="star2"></label>

                    <input type="radio" id="star1" name="rating" value="1" required />
                    <label class="full" for="star1"></label>
                </div>
                <div class="form-group with-icon-right is-empty">
                    <textarea class="form-control" placeholder="" name="content"></textarea>

                </div>

            </div>
            <div class="ml-auto">

                <button class="btn btn-md-2 btn-primary" type="submit">Bình luận</button>
            </div>

        </div>
    </form>
</div>