<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_limitless.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_limitless.min.css') }}">

    <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>

    <style>
        * {
            font-family: Roboto, sans-serif;
        }

        body {
            background-image: url('{{ asset('images/luat_hn_bgD21ljpjc.webp') }}'); 
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% auto;
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="container-fluid">

        @yield('contents')

    </div>
</body>
</html>