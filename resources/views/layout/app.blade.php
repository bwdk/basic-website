<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Website</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
        @include('inc.navbar')
    <div class="container">
        @if (Request::is('page'))
             @include('inc.showcase')
        @endif

        @include('inc.messages')
        
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @yield('content')
        </div>
        
        
        <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
        </div>

        
        </div>
    </div>   
<footer id="footer" class="text-center">
    <p>Copyright 2019 &copy; BKO</p>
        @section('links')
        <a href="{{ url('/') }}">Welcome</a> / <a href="{{ url('page') }}">Page</a> / <a href="{{ url('contact') }}">Contact</a> / <a href="{{ url('about') }}">About</a> 
</footer>
</body>
</html>