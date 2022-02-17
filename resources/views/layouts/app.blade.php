<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Qbixx test</title>

        <link rel="icon" href="{{ asset('images/qbixx.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased font-sans font-normal text-gray-700 leading-normal">
        @yield('body')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
