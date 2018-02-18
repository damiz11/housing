<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/ionicons.min.CSS')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/queries.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/sign_up.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <title>Excellent Houses</title>

</head>
<body>
    <header >
        @yield('header')
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        @yield('footer')
        <div class="row">
            <p>Copyright &copy; 2018 by David. &nbsp; All rights reserved &reg; . </p>
        </div>
    </footer>
</body>
</html>
