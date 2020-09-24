@extends('client.layouts.layout')
@section('breadcrum')
Giới thiệu
@endsection
@push('css')
<style>
    .profile-image img {
        border-radius: 50%;
        max-width: 100%;
        height: auto;
    }

    .hours-tutoring {
        font-size: 14px;
    }

    .rate {
        font-size: 20px;
    }

    .tutor-card-stats td {
        padding: 5px 0 !important;
    }

    .border {
        border: 1px solid #c4c1c1;
    }

    .profile-image.spc-sm-s {
        margin-left: 30px;
    }

    .avatar {
        padding-right: 0px;

    }

    .tutor {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }

    .tutor p {
        font-size: 14px;
    }

    .text-blue {
        color: #017acd;
        font-size: 19px;
    }

    .text-gray {
        color: #746f6e;
    }

    .name {
        font-size: 15px;

    }

    .hour {
        font-size: 14px;

    }
</style>
@endpush

@section('page')
<div class="container ">
    <div class="row">
        <div class="col-md-3">
            <aside class="search-filters column medium-3">
                <h3 class="light-header spc-n spc-med-s medium-spc-zero-s">Filters</h3>
                <form class="search-results-form filters-form" method="get" action="/match/search">
                    <div class="medium-hide">
                        <label class="spc-zero-n spc-e" for="sort">Sort results by</label>
                        <select name="sort" id="sort">
                            <option value="1" selected="">
                                Best match
                            </option>
                            <option value="2">
                                Lowest price
                            </option>
                            <option value="3">
                                Highest price
                            </option>
                            <option value="4">
                                Rating
                            </option>
                        </select>
                    </div>
                    <input id="utc-offset" type="hidden" name="utc_offset" value="7">

                    <input class="slider-rate-min" type="hidden" name="min_price" value="10">
                    <input class="slider-rate-max" type="hidden" name="max_price" value="200">
                    <input class="slider-age-min" type="hidden" name="min_age" id="min_age" value="18">
                    <input class="slider-age-max" type="hidden" name="max_age" id="max_age" value="100">

                    <div class="spc-s">
                        <label>Hourly rate: <span class="slider-label-rate text-normal">$10 - $200+</span></label>
                        <div id="rate" class="slider noUi-target noUi-ltr noUi-horizontal" data-range-min="10"
                            data-range-max="200" data-range-start-min="10" data-range-start-max="200"
                            data-range-slider="true">
                            <div class="noUi-base">
                                <div class="noUi-origin" style="left: 0%;">
                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                        role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                        aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="10.00"
                                        style="z-index: 5;"></div>
                                </div>
                                <div class="noUi-connect" style="left: 0%; right: 0%;"></div>
                                <div class="noUi-origin" style="left: 100%;">
                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                        role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                        aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="200.00"
                                        style="z-index: 4;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spc-s">
                        <label for="availability-selection">Availability</label>
                        <section class="availability-container flex flex-row medium-show-inline-block"
                            id="availability-selection">
                            <div>
                                <input class="hide medium-show-inline-block" type="checkbox" id="sunday" name="sunday"
                                    value="true">
                                <label class="hide medium-show-inline-block" for="sunday">Sunday</label>
                                <label class="medium-hide" for="sunday">Su</label>
                            </div>
                            <div>
                                <input class="hide medium-show-inline-block" type="checkbox" id="monday" name="monday"
                                    value="true" checked="">
                                <label class="hide medium-show-inline-block" for="monday">Monday</label>
                                <label class="medium-hide" for="monday">Mo</label>
                            </div>
                            <div>
                                <input class="hide medium-show-inline-block" type="checkbox" id="tuesday" name="tuesday"
                                    value="true" checked="">
                                <label class="hide medium-show-inline-block" for="tuesday">Tuesday</label>
                                <label class="medium-hide" for="tuesday">Tu</label>
                            </div>
                            <div>
                                <input class="hide medium-show-inline-block" type="checkbox" id="wednesday"
                                    name="wednesday" value="true" checked="">
                                <label class="hide medium-show-inline-block" for="wednesday">Wednesday</label>
                                <label class="medium-hide" for="wednesday">We</label>
                            </div>
                            <div>
                                <input class="hide medium-show-inline-block" type="checkbox" id="thursday"
                                    name="thursday" value="true" checked="">
                                <label class="hide medium-show-inline-block" for="thursday">Thursday</label>
                                <label class="medium-hide" for="thursday">Th</label>
                            </div>
                            <div>
                                <input class="hide medium-show-inline-block" type="checkbox" id="friday" name="friday"
                                    value="true" checked="">
                                <label class="hide medium-show-inline-block" for="friday">Friday</label>
                                <label class="medium-hide" for="friday">Fr</label>
                            </div>
                            <div>
                                <input class="hide medium-show-inline-block" type="checkbox" id="saturday"
                                    name="saturday" value="true" checked="">
                                <label class="hide medium-show-inline-block" for="saturday">Saturday</label>
                                <label class="medium-hide" for="saturday">Sa</label>
                            </div>
                        </section>
                    </div>


                    <div class="spc-s">
                        <label class="spc-zero-n" for="age">Tutor age: <span class="slider-label-age text-normal">18 and
                                up</span></label>
                        <div id="age" class="slider noUi-target noUi-ltr noUi-horizontal" data-range-min="18"
                            data-range-max="100" data-range-start-min="18" data-range-start-max="100"
                            data-range-slider="true">
                            <div class="noUi-base">
                                <div class="noUi-origin" style="left: 0%;">
                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                        role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                        aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="18.00"
                                        style="z-index: 5;"></div>
                                </div>
                                <div class="noUi-connect" style="left: 0%; right: 0%;"></div>
                                <div class="noUi-origin" style="left: 100%;">
                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                        role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                        aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="100.00"
                                        style="z-index: 4;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <label for="gender">Gender</label>
                    <select id="gender" class="spc-med-s" name="gender_pref">
                        <option value="none" selected="">No preference</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>

                    <input type="checkbox" id="backgroundCheck" name="bc" value="true">
                    <label for="backgroundCheck"><strong>Background check on file</strong></label>

                    <div>
                        <label for="st"><strong>Student’s level</strong></label>
                        <select class="spc-sm-s" name="st">
                            <option value="0">
                                Any
                            </option>
                            <option value="1">
                                Elementary
                            </option>
                            <option value="2">
                                Middle School
                            </option>
                            <option value="3">
                                High School
                            </option>
                            <option value="4" selected="">
                                College
                            </option>
                            <option value="5">
                                Adult
                            </option>
                        </select>
                    </div>
                </form>
            </aside>
        </div>

        <div class="col-md-9 ">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="medium-flex flex-spc-btwn">
                <div class="sm-spc-n medium-spc-sm-n">
                    <h3
                        class="light-header text-left spc-w spc-med-s medium-spc-s medium-spc-zero-n medium-spc-zero-w ">
                        <strong>667 web tutors</strong> fit your choices
                    </h3>
                </div>
                <form class="medium-spc-tiny-n hide medium-show" method="get" action="/match/search">
                    <div class="flex flex-vert-center spc-sm medium-spc-zero">
                        <label class="spc-zero-n spc-e" for="desktop-sort">Sort:</label>
                        <div class="text-center">
                            <select name="desktop-sort" id="desktop-sort">
                                <option value="1" selected="">
                                    Best match
                                </option>
                                <option value="2">
                                    Lowest price
                                </option>
                                <option value="3">
                                    Highest price
                                </option>
                                <option value="4">
                                    Rating
                                </option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>





            <div class="border white">
                <a href="" class="tutor-card">
                    <div class="tutor">

                        <div class="row">
                            <div class="col-md-2 avatar">

                                <div class="profile-image spc-sm-s">
                                    <img src="https://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ad7d5bff-f685-4e5f-9d23-1a36957c43cc.jpg"
                                        alt="Jonathan S.'s Photo">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5 class="name">Jonathan S.</h5>
                                <h4 class="text-blue ">An experienced C# Programmer with a passion
                                    for
                                    teaching.</h4>
                                <p class="text-gray ">
                                    In the past, I completed two certifications in <b>Web</b> Design. My first
                                    certification
                                    is
                                    the HTML5 and CSS3 Specialist. My second certification is in User Interface Design.
                                    Both
                                    of
                                    these...
                                    <span class="text-blue text-nowrap">read more</span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <table class="table table-borderless tutor-card-stats">
                                    <tr>
                                        <td>
                                            <div class="rate">

                                                <h5>

                                                    $55<span class="hour">/hour</span>
                                                </h5>
                                            </div>
                                        </td>
                                    <tr>

                                        <td>
                                            <span class="">
                                                <span class="" style="width: 100.0%"></span>
                                            </span>
                                            <strong>5.0</strong>
                                            <span class="text-gray">(255)</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <i class="hours-tutoring"></i>
                                            <h3 class="hours-tutoring text-gray">678 hours tutoring</h3>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <i class=""></i>
                                            <p class="s"><span class="">Offers&nbsp;</span><span id="teaching-pref"
                                                    class="">online lessons</span></p>
                                        </td>
                                    </tr>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="border white">
                <a href="" class="tutor-card">
                    <div class="tutor">

                        <div class="row">
                            <div class="col-md-2 avatar">

                                <div class="profile-image spc-sm-s">
                                    <img src="https://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ad7d5bff-f685-4e5f-9d23-1a36957c43cc.jpg"
                                        alt="Jonathan S.'s Photo">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5 class="name">Jonathan S.</h5>
                                <h4 class="text-blue ">An experienced C# Programmer with a passion
                                    for
                                    teaching.</h4>
                                <p class="text-gray ">
                                    In the past, I completed two certifications in <b>Web</b> Design. My first
                                    certification
                                    is
                                    the HTML5 and CSS3 Specialist. My second certification is in User Interface Design.
                                    Both
                                    of
                                    these...
                                    <span class="text-blue text-nowrap">read more</span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <table class="table table-borderless tutor-card-stats">
                                    <tr>
                                        <td>
                                            <div class="rate">

                                                <h5>

                                                    $55<span class="hour">/hour</span>
                                                </h5>
                                            </div>
                                        </td>
                                    <tr>

                                        <td>
                                            <span class="">
                                                <span class="" style="width: 100.0%"></span>
                                            </span>
                                            <strong>5.0</strong>
                                            <span class="text-gray">(255)</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <i class="hours-tutoring"></i>
                                            <h3 class="hours-tutoring text-gray">678 hours tutoring</h3>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <i class=""></i>
                                            <p class="s"><span class="">Offers&nbsp;</span><span id="teaching-pref"
                                                    class="">online lessons</span></p>
                                        </td>
                                    </tr>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="border white">
                <a href="" class="tutor-card">
                    <div class="tutor">

                        <div class="row">
                            <div class="col-md-2 avatar">

                                <div class="profile-image spc-sm-s">
                                    <img src="https://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ad7d5bff-f685-4e5f-9d23-1a36957c43cc.jpg"
                                        alt="Jonathan S.'s Photo">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5 class="name">Jonathan S.</h5>
                                <h4 class="text-blue ">An experienced C# Programmer with a passion
                                    for
                                    teaching.</h4>
                                <p class="text-gray ">
                                    In the past, I completed two certifications in <b>Web</b> Design. My first
                                    certification
                                    is
                                    the HTML5 and CSS3 Specialist. My second certification is in User Interface Design.
                                    Both
                                    of
                                    these...
                                    <span class="text-blue text-nowrap">read more</span>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <table class="table table-borderless tutor-card-stats">
                                    <tr>
                                        <td>
                                            <div class="rate">

                                                <h5>

                                                    $55<span class="hour">/hour</span>
                                                </h5>
                                            </div>
                                        </td>
                                    <tr>

                                        <td>
                                            <span class="">
                                                <span class="" style="width: 100.0%"></span>
                                            </span>
                                            <strong>5.0</strong>
                                            <span class="text-gray">(255)</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <i class="hours-tutoring"></i>
                                            <h3 class="hours-tutoring text-gray">678 hours tutoring</h3>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <i class=""></i>
                                            <p class="s"><span class="">Offers&nbsp;</span><span id="teaching-pref"
                                                    class="">online lessons</span></p>
                                        </td>
                                    </tr>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush