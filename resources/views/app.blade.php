<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @yield('name') allows to create a key, so we can change the value when we call this 
    view from another--}}
    <title>@yield('title')</title>
</head>
<body>
    {{-- We use include to include html from another view, the difference with exteds
    is that extends is used as a base for our template and include is included in some part of 
    our template --}}
    @include('nav')
    @yield('content')
</body>
</html>