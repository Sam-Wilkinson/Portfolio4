<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <script>window.Laravel = { csrfToken: '{csrf_token()}'}</script>

        <title>Portfolio Attempt 4</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">

    </head>

    <body>
        <!--NavBar-->
        @yield('nav')
        <!--Content Area-->
        <div id="content" class="{{ Request::path() ==  '/' ? 'bg-home' : ''  }}">
            <!--Header-->
            <div class="border-bottom border-dark bg-light d-flex align-items-center header-size">
                @yield('header')
            </div>
            <!--body-->
            <div class="{{ Request::path() == 'skills'  ? '' : 'container'  }} content-size">
                @yield('content')
            </div>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>