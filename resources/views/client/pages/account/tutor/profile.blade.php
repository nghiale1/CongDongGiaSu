@extends('client.layouts.layout')
@section('head')
Minh Nghĩa
@endsection
@section('breadcrum')
Giới thiệu
@endsection
@push('css')
<style>
    .inline {
        display: inline;
    }



    .btn-grey {
        background-color: #f5f4f7;
        color: #542eff;
    }

    .pad20 {
        padding: 20px;
    }


    .school-name {
        font-weight: 600;
        line-height: 1.58;
        font-size: 16px;
    }

    .address {
        font-size: 14px;

    }

    .baseline {
        line-height: 1.6;
    }

    .baseline-icon {
        width: 20px;
    }

    .teached-class {
        line-height: 1.58;
        font-size: 14px;
        font-weight: normal;
        font-family: "Open Sans", Tahoma, Geneva, Sans-Serif;
        color: #746f6e;
    }

    .bio {
        line-height: normal;
        font-size: 1rem;
        font-weight: 400;
        font-family: "Source Sans Pro", sans-serif;
        color: #363232;
    }

    .intro {
        /* background-color: #f5f4f7; */
    }

    .intro p {
        font-family: "Source Sans Pro", sans-serif;
        /* font-size: 17px; */
        font-size: 1rem;
        line-height: 20px;
        line-height: 1.25rem;
        color: #303336;
        font-weight: 400;
        line-height: 1.38;
    }

    .chat {
        position: fixed;
        width: 450px;
        left: 63%;
    }
</style>
@endpush

@section('page')
<div class="container pt-3">
    <div class="row ">
        <div class="col-md-8">
            <div class="white pad20">

                <div class="row">
                    @include('client.pages.account.tutor.info')
                    <div class="col-md-12">
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Tiểu sử</div>
                            <div class="col-md-9">
                                <p class="bio">
                                    Hi, I'm James and I just completed my Master's in Natural Sciences at the University
                                    of
                                    York,
                                    with my final year spent in Germany at the University of Heidelberg. I have been
                                    tutoring
                                    for
                                    over 5 years in a range of settings, on MyTutor, in local schools helping KS3 and
                                    GCSE
                                    students
                                    in the classroom, and in private one-to-one sessions. This means I am familiar with
                                    KS3 as
                                    well
                                    as a range of syllabuses for GCSE and A-level and how to deliver all of the content
                                    in an
                                    engaging and enjoya...
                                </p>
                                <button class="edit" data-for="bio">Chỉnh sửa</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Giáo dục</div>
                            <div class="col-md-9">
                                <div class="edu">
                                    <h6 class="school-name">

                                        Michigan State University
                                    </h6>
                                    <p>

                                        Music Education
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Policies</div>
                            <div class="col-md-9">Hourly Rate: $60</div>
                        </div>
                        <hr>

                        @include('client.pages.account.tutor.schedule')
                        <hr>

                        @include('client.pages.account.tutor.subject')
                        <hr>
                        @include('client.pages.account.tutor.rating')


                    </div>
                </div>
            </div>


        </div>
        {{-- <div class="col1" style="    width: 2%;"></div> --}}
        <div class="col-md-4">
            <div class="white pad20 chat">
                @include('client.pages.account.tutor.chat')

            </div>
        </div>
    </div>
</div>
<br>
@endsection

@push('script')

@endpush