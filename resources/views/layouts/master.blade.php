<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Mindaugas Šunokas">
    <meta name="description" content="This is a webpage about Sony Playstation computers">
    <meta name="keywords" content="laravel, php, ps, playstation, museum, history, sony">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts and Bootstrap CSS -->
    @vite(['resources/js/app.js'])
    {{-- Local CSS Styles --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Title --}}
    <title>@yield('title')</title>
</head>
<body>
    {{-- Navigation --}}
    @include('partials.navigation')

    {{-- <div class="sidebar-picture">
        @section('sidebar')
            
        @show
    </div> --}}
    
    {{-- Main Page Content --}}
    <div class="container py-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>