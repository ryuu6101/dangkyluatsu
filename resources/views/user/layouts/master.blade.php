<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('global_assets/css/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<!-- /theme JS files -->

    <style>
        body {
            background: url('{{ asset('images/luat_hn_bgD21ljpjc.webp') }}'), linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2));
            background-blend-mode: overlay;
            /* background-image: url('{{ asset('images/luat_hn_bgD21ljpjc.webp') }}');  */
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% auto;
        }
    </style>

	@stack('styles')
</head>

<body>

    {{-- @include('user.layouts.navbar') --}}

    <!-- Page content -->
	<div class="page-content">

        @include('user.layouts.sidebar')

        <!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

                @include('user.layouts.header')

                <!-- Content area -->
				<div class="content">

                    @yield('contents')

                </div>
                <!-- /content area -->

                {{-- @include('user.layouts.footer') --}}

            </div>
            <!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	@stack('scripts')
</body>
</html>