@extends('client.layouts.layout')
@section('breadcrum')
Giới thiệu
@endsection
@push('css')
<style>
    .inline {
        display: inline;
    }

    .avatar {
        width: 100%;
    }

    .btn-grey {
        background-color: #f5f4f7;
        color: #542eff;
    }

    .pad20 {
        padding: 20px;
    }

    a.save {
        color: #542eff;
    }

    a.save:hover {
        background-color: rgb(253 200 0);
    }

    .teached {
        background-color: #32cf3a;
        padding: 0 4px 1px 4px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        margin-right: 3px;
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
                    <div class="col-md-3">
                        <img src="{{asset('client/img/Lien3.jpg')}}" alt="" class="avatar">
                    </div>
                    <div class="col-md-9 baseline">
                        <h4 class="inline">Ngọc Liên</h4>
                        <span class="h5" style="float: right;">40.000/giờ</span>
                        <h5 class="font-weight-light">
                            An Experienced Student and Teacher of the English Language
                        </h5>
                        <p>
                            <div class="review">
                                <span class="star-white">

                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span class="star-yellow" style="width:100%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </span>
                            </div>

                            75 đánh giá
                        </p>
                        <table>
                            <tr>
                                <td class="text-center">
                                    <span class="teached">10</span>
                                </td>
                                <td>
                                    <p class="teached-class">

                                        lớp đã dạy
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #32cf3a"></i>
                                </td>
                                <td>
                                    <p>
                                        <b>

                                            <span class="address">Hiệp Bình Chánh, Thủ Đức</span>
                                        </b>
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <a class="btn btn-grey inline float-md-right save">
                            <span style="font-weight: 600;">
                                <i class="fa fa-bookmark-o" aria-hidden="true" style="font-weight: 600;"></i> Lưu thông
                                tin</span>
                        </a>

                    </div>
                    <div class="col-md-12 intro">
                        <h5>Giới thiệu</h5>
                        <p>
                            I graduated summa cum laude from the University of North Carolina at Chapel Hill with a B.A.
                            in Comparative Literature and Anthropology, class of 2019. I also had the privilege of
                            attending Duke University through the Robertson Scholars Leadership Program, a highly
                            competitive full merit scholarship whose recipients enjoy dual enrollment status at UNC and
                            Duke. During the 2016-17 academic year, I attended the University of Oxford (St. Edmund
                            Hall) as a visiting student in English, History and Creative Writing.
                            <br>
                            <br>
                            With two years’ experience as an editorial assistant in the publishing industry and a
                            history of strong working relationships with literary scholars at three of the world’s most
                            prestigious universities, I have developed a broad understanding of fiction, nonfiction, and
                            the English language that incorporates an unusual diversity of theoretical and practical
                            perspectives. Because I've also taught English to students from a variety of backgrounds all
                            around the world, I'm well-positioned to help you get ahead in any English class from
                            elementary school to college, or simply to learn the language itself!
                        </p>
                    </div>
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

                        @include('client.pages.account.schedule')
                        <hr>

                        @include('client.pages.account.subject')
                        <hr>
                        @include('client.pages.account.rating')


                    </div>
                </div>
            </div>


        </div>
        {{-- <div class="col1" style="    width: 2%;"></div> --}}
        <div class="col-md-4">
            <div class="white pad20 chat">
                @include('client.pages.account.chat')

            </div>
        </div>
    </div>
</div>
<br>
@endsection

@push('script')

@endpush