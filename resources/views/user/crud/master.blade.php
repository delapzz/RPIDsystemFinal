<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Operations</title>

        <!-- Fonts -->
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
        @include('user.layouts.app')
        
    </head>
    <body>


          

        <br><br>
        @yield('content')
    </body>
       <script type="text/javascript" src="/js/jquery.js"></script>
       <script type="text/javascript" src="/js/bootstrap.js"></script>
</html>