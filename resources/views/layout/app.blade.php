<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- HEADER  --}}
    @include('partials.header')

    <main>
        {{-- JUMBOTRONE --}}
        @include('partials.jumbotrone')

        {{-- COMICS  --}}
        @yield('content')

        {{-- BLU BAR  --}}
        @include('partials.blu_bar')
    </main>

    {{-- FOOTER  --}}
    @include('partials.footer')
</body>
