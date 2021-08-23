<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="robots" content="max-image-preview:standard">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/favicon.ico')}}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{asset('/favicon.ico')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('/favicon.ico')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{asset('/favicon.ico')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('/favicon.ico')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{asset('/favicon.ico')}}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{asset('/favicon.ico')}}">
		<link rel="icon" type="image/png" href="{{asset('/favicon.ico')}}" sizes="32x32">
		<link rel="icon" type="image/png" href="{{asset('/favicon.ico')}}" sizes="96x96">
		<link rel="icon" type="image/png" href="{{asset('/favicon.ico')}}" sizes="16x16">


    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/authpage.css') }}">
</head>
<body>
    @yield('content')

    <script rel="preload" defer src="{{asset('')}}"></script>
</body>
</html>
