<!-- sidebar menu start -->
<div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
        <h1><a href="">Gia sư</a></h1>
    </div>

    <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    <!-- //image logo -->

    <div class="logo-icon text-center">
        <a href="" title="logo"><img src="{{asset('admin/assets/images/logo.png')}}" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

        <!-- sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href=""><i class="fas fa-tachometer-alt"></i><span> Trang chủ</span></a>
            </li>

            <li><a href="{{route('dashboard.tkHV')}}"><i class="fas fa-user-graduate"></i> <span>Học sinh</span></a>
            </li>
            <li><a href="{{route('dashboard.tkGS')}}"><i class="fas fa-chalkboard-teacher"></i> <span>Gia sư</span></a>
            </li>
            <li><a href="{{route('dashboard.tkLH')}}"><i class="fa fa-users" aria-hidden="true"></i> <span>Lớp
                        học</span></a></li>
            <li><a href="{{route('dashboard.tkTT')}}"><i class="fa fa-handshake" aria-hidden="true"></i> <span>Thanh
                        toán</span></a></li>
            {{-- report --}}
            <li class="menu-list">
                <a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <span>Báo cáo khoá
                        học<i class="lnr lnr-chevron-right"></i></span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('dashboard.newReport')}}">Báo cáo chưa xữ lý</a> </li>
                    <li><a href="{{route('dashboard.report')}}">Báo cáo đã được xữ lý</a> </li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="fa fa-cogs"></i>
                    <span>Danh mục <i class="lnr lnr-chevron-right"></i></span></a>
                <ul class="sub-menu-list">
                    <li><a href="#">Lĩnh vực</a> </li>
                    <li><a href="{{route('dashboard.monHoc')}}">Môn học</a> </li>
                    <li><a href="#">Trình độ</a> </li>
                    <li><a href="#">Giọng nói</a></li>
                    <li><a href="#">Đối tượng học</a></li>
                </ul>
            </li>
        </ul>
        <!-- //sidebar nav end -->
        <!-- toggle button start -->
        <a class="toggle-btn">
            <i class="fa fa-angle-double-left menu-collapsed__left"><span>Thu nhỏ</span></i>
            <i class="fa fa-angle-double-right menu-collapsed__right"></i>
        </a>
        <!-- //toggle button end -->
    </div>
</div>
<!-- //sidebar menu end -->