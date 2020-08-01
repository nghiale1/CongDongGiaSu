<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
    @stack('css')
</head>

<body class="sidebar-menu-collapsed">
    <div class="se-pre-con"></div>
    <section>
        @include('admin.layouts.sidebar')
        @include('admin.layouts.header')
        @yield('page')
    </section>

    @include('admin.layouts.footer')
    @include('admin.layouts.script')
    @stack('script')
</body>

</html>