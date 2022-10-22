<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite
        <title>{{ $title === 'gatekeeper' ? $title : 'gatekeeper | '.$title }}</title>
    </head>
    <body class="my-5 px-5 text-center">
        @include('components.nav')
        <div class="my-10">
            @yield('content')
        </div>
        @include('components.foot')
    </body>
</html>
