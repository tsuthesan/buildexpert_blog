<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('../build/assets/img/web.ico') }}">
    <!-- Responsive Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.partials.css');
    @yield('styles')
</head>
<body>
@yield('scripts')
<!-- header -->
@include('layouts.nav')
<!-- /header -->

@yield('content')

<!-- #bottom-bar -->
<!-- /#bottom-bar -->


@include('layouts.partials.js')


</body>
</html>
