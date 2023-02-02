<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="">
        <meta http-equiv="">
        <title>Base</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        
        

    </head>
    <body>
        @include('navbar')
        @include('header')
        @yield('content')
        @include('footer')
    </body>
</html>

