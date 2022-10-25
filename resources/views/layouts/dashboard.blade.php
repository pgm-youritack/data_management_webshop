<!DOCTYPE html>
<html lang='nl'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/index.css'); }} ">
        <title>@yield('title')</title>
    </head>
    <body class="dashboard">
        @section('header')
        <header>
            @include('components/dashboardNav')
        </header>
        @show

        <div class="dashboard__content">
            @yield('content')
        </div>
    </body>
</html>