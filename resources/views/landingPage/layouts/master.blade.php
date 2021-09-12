<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    @include('landingPage.layouts.header')

    @yield('content')

    @include('landingPage.layouts.footer')

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
