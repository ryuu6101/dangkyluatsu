<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"> --}}
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom_assets/css/noty.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_limitless.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_limitless.min.css') }}">

    <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/notifications/jgrowl.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/notifications/noty.min.js') }}"></script>

    <style>
        * {
            font-family: Roboto, sans-serif;
        }

        body {
            background-image: url('{{ asset('images/luat_hn_bgD21ljpjc.webp') }}'); 
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100vw auto;
        }
    </style>

    @stack('styles')
</head>
<body>

    @yield('contents')

    <script>
        Noty.overrideDefaults({
            theme: 'limitless',
            layout: 'topRight',
            type: 'alert',
            timeout: 2500
        });
    </script>

    @if (session('noty'))
	<script>
		let noty = {{ Js::from(session('noty')) }}
		new Noty({
			text: noty['message'],
			type: noty['type'],
		}).show();
	</script>
	@endif

</body>
</html>