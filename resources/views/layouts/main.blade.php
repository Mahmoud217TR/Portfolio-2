<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title',config('app.name', 'Laravel'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        window.addEventListener('load', (event) =>{
            document.getElementById("loader-layer").classList.add('fade-5');
        });
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/mtr.ico') }}" type="image/x-icon">
    
</head>
<body>
    <div class="loader-layer" id="loader-layer">
        <div class="d-block">
            <span class="loader mx-auto"><span class="loader-inner"></span></span>
        </div>
        <div class="fulfilling-bouncing-circle-spinner">
            <div class="circle"></div>
            <div class="orbit"></div>
        </div>
    </div>
    <div id ="app">
        @include('layouts.nav')
        @include('layouts.alerts')
        <main class="container">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>