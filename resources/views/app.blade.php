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
    <ul>
        <li><a href="/about">About Us</a></li>
        <li><a href="/services">Services</a></li>
    </ul>
    @yield('content')
</body>
</html>