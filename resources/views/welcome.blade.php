<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$name}}</title>
    </head>
    <body>
        <h1>{{$greeting}}</h1>
        <a href="{{ route('profile', ['id' => 1]) }}">profile</a>
        <a href="{{ route('site') }}">site</a>
    </body>
</html>
