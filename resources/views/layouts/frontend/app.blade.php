<!DOCTYPE html>
<html>
<head>
	@include('includes.frontend.head')
	@yield('extra-css')
</head>
<body >
	@yield('content')
	
	@yield('footer')

	<!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/admin/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('assets/admin/js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/custom/custom-script.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/js/scripts/ui-alerts.js') }}"></script>
    <!-- END THEME  JS-->

	@yield('extra-script')
</body>
</html>