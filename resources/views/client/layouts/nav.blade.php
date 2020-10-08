<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
    <div class="top-hd">
        <div class="container">
            <nav class="navbar navbar-expand-lg  top-menu-top ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">
                    <span class="fa fa-pencil-square-o "></span> Cộng Đồng Gia Sư
                </a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                        <form class="form-inline position-relative my-2 my-lg-0">
                            <input class="form-control search" type="search" placeholder="Tìm kiếm..."
                                aria-label="Search" required="">
                            <button class="btn btn-search position-absolute" type="submit" s><span class="fa fa-search"
                                    aria-hidden="true"></span></button>
                        </form>
                    </ul>
                    @if (\Auth::check())
                    <li class="btn-group my-2 my-lg-0 accounts">
                        <a class=" dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> Nghĩa <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-account background-hover" style="padding: 15px">
                            <a class="dropdown-item h-auto " href="">
                                <div class="row pl-3 pr-3 ">
                                    <div class="col-md-2 p-0 border-account">

                                        <img src="{{asset('client/svg/teacher_female.svg')}}" alt=""
                                            class="avatar avatar-account">
                                    </div>
                                    <div class="col-md-10 ">
                                        <div class="account-profile">

                                            <b>
                                                <p>

                                                    Lê Thị Ngọc LiênLiên Lê Thị Ngọc LiênLiên
                                                </p>
                                            </b>
                                            <p>Xem trang cá nhân</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr>
                            <a class="dropdown-item pb-1" href="">
                                <div class="dropdown-icon">
                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                </div>
                                Quản lý tài liệu
                            </a>
                            <a class="dropdown-item pb-1" href="">
                                <div class="dropdown-icon">

                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                                Lớp dạy
                            </a>
                            <a class="dropdown-item pb-1" href="">
                                <div class="dropdown-icon">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </div>
                                Đăng xuất
                            </a>
                        </div>
                    </li>
                    @else
                    <a class="" href="" style="color: white">
                        Đăng nhập
                    </a>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <a class="" href="{{route('account.register')}}" style="color: white">
                        Đăng ký
                    </a>
                    @endif


                </div>
            </nav>
        </div>
    </div>
</section>
<!-- //Top Menu 1 -->