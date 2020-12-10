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
        @if($success = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <p>{{$success}}</p>
            <p class="mb-0"></p>
        </div>
        @endif
        @if($error = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <p>{{$error}}</p>
            <p class="mb-0"></p>
        </div>
        @endif
        @yield('page')

        @include('client.layouts.footer')
    </div>
    @include('client.layouts.script')
    @stack('script')
</body>

</html>