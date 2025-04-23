<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITI Laravel - @yield('title')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    @vite('resources/css/app.css')
</head>
<body>
    @include('includes.navbar')

    @yield('content')
</body>
</html>