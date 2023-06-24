<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Web Game') }} | @yield('title', 'Accedi')</title>

    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    @yield('stylesheets')

    <script type="text/javascript" src="{{ asset('js/jquery-3.7.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/styles.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
    @yield('scripts')
</head>
    <body>
        @yield('content')
        <noscript>Il tuo browser non supporta JavaScript</noscript>
    </body>
</html>
