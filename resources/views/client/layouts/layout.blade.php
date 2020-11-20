<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.head')
    @include('client.layouts.css')
    @stack('css')
</head>

<body>
    <div id="app">

        @include('client.layouts.nav')
        {{-- @include('client.layouts.header') --}}
        @include('client.layouts.breadcrum')
        @yield('page')

        @include('client.layouts.footer')
    </div>
    @include('client.layouts.script')
    @stack('script')
</body>

</html>