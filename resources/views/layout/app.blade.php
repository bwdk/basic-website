<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @yield('content')

    @include('inc.sidebar')
@show

    @section('links')
        <a href="{{ url('home') }}">Home</a>|<a href="{{ url('contact') }}">Contact</a>|<a href="{{ url('about') }}">About</a>|<a href="{{ url('/') }}">Welcome</a>   
</body>
</html>