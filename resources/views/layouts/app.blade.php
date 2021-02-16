<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
    </div>
</nav>
<div class="row">
    <div class="col-md-4">
        <div class="menu">
            <img src="{{asset('public/image/sistem/icon_menu.png')}}" alt="">
        </div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
</div>
    <script src="{{asset('public/js/jquery.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/js/main.js')}}"></script>

</body>
</html>
