<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.head')
    @stack('css')
</head>

<body>
    @include('client.layouts.nav')
    @include('client.layouts.header')
    @include('client.layouts.home')
    @include('client.layouts.feature')
    @include('client.layouts.about')
    @include('client.layouts.course')
    @include('client.layouts.form12')
    @include('client.layouts.specifications')
    @include('client.layouts.testimonials')
    @include('client.layouts.news')
    @include('client.layouts.footer')
    @include('client.layouts.script')
    @stack('script')
</body>

</html>