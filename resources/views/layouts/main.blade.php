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

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    {{-- <link rel="shortcut icon" href="{{ asset('images/mtr.ico') }}" type="image/x-icon"> --}}
</head>
<body>
    @include('layouts.nav')
    <main class="container">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>