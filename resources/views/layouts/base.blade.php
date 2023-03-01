<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('img/cmc.jpg') }}" rel="icon">
    <link href="{{ asset('img/cmc.jpg') }}" rel="logo">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    @include('partials.style')
    @stack('style')

    <title>
        {{ $title }} | Admin CyberMedia Center
    </title>
</head>
<body>

    <x-toast-container />

    @yield('base')

    @include('partials.scripts')
    @stack('script')

</body>
</html>

