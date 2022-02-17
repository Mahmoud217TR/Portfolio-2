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

    <!-- Styles -->
    @if ($style == 'main')
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/secondary.css') }}" rel="stylesheet">
    @endif
    
    <link rel="shortcut icon" href="{{ asset('images/mtr.ico') }}" type="image/x-icon">
    
</head>
<body>
    @include('layouts.loader')
    <div id ="app">
        @include('layouts.nav',['style'=>$style])
        @include('layouts.alerts')
        <main class="container">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>