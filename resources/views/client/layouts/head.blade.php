<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('Image/teacher.svg')}}" />
<title>@yield('head')</title>
<!-- web fonts -->
{{-- <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet"> --}}
<link rel="stylesheet" href="{{asset('client/assets/css/css.css')}}">
<!-- //web fonts -->
<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('client/assets/css/style-starter.css')}}">
<link rel="stylesheet" href="{{asset('client/assets/vendor/OwlCarousel2-2.3.4/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('client/assets/vendor/datepicker.css')}}">
<link rel="stylesheet" href="{{asset('client/assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css')}}">

<style>
    /* @font-face {
        font-family: "Source Sans Pro";
        src: url("client/font/Source_Sans_Pro/SourceSansPro-Regular.ttf");
    } */

    @font-face {
        font-family: "Verdana";
        src: url("client/font/Verdana/verdana.ttf");
    }

    @font-face {
        font-family: "Verdana";
        src: url("client/font/Verdana/verdana.ttf");
    }

    @font-face {
        font-family: "Geneva";
        src: url("client/font/Geneva/Geneva-Regular.ttf");
    }

    @font-face {
        font-family: "Tahoma";
        src: url("client/font/Tahoma/Tahoma-Regular.ttf");
    }

    @font-face {
        font-family: "Open_Sans";
        src: url("client/font/Open_Sans/OpenSans-Regular.ttf");
    }

    body {
        /* font-family: Verdana, Geneva, sans-serif !important; */
        font-family: "Open Sans", Tahoma, Geneva, Sans-Serif;
    }

    p {
        color: #303336;
    }

    .white {
        background-color: white;

    }

    .review {
        color: #fdc800;
        display: inline;
    }

    .star-white {
        line-height: 1;
        position: relative;
        white-space: nowrap;
        display: inline-block;
        margin: 0 auto;

    }

    .star-yellow {
        display: block;
        position: absolute;
        left: 0px;
        bottom: 0px;
        z-index: 1;
        /* overflow: hidden; */
        line-height: 1;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
        overflow: hidden;
        line-height: 1;

    }

    .green-tick {
        width: 20px;
    }

    .busy {
        background-color: #05728f;
    }

    .rating-bar-container {
        width: 80%;
        margin: 0 10px;
        background: #f9f8f8;
        height: 20px;
        position: relative;
    }

    .rating-bar {
        background: #f6bb42;
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
    }

    .flex {
        display: flex;
    }

    a.navbar-brand {
        color: #ffffff;
    }

    .navbar-brand span {
        color: var(--opposite-color);
    }

    .accounts {
        cursor: pointer;
        color: #ffffff;
        font-size: 16px;
    }

    .dropdown-item {
        padding: 0;
    }

    .avatar {
        width: 100%;
    }

    .avatar-account {
        width: 100%;
        min-width: 100%;
        min-height: 100%;


    }

    .account-profile {
        white-space: normal;


    }



    .dropdown-account {
        left: unset;
        right: -125%;
        width: 330px;
    }


    .dropdown-icon {

        color: #606770;
        display: inline-block;
        width: 15px;
    }

    .background-hover a:hover {
        /* background-color: red; */
        border-radius: 8px;
    }

    .border-account {
        width: 50px;
        height: 50px;
        overflow: hidden;
        border-radius: 50%;
    }
</style>