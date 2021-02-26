<!DOCTYPE html>
<html>
<head>
	@include('includes.admin.head')
	@yield('extra-css')
</head>
<body >
		
	@include('includes.admin.header')

	@yield('content')
	
	@yield('footer')

	@include('includes.admin.script')

	@yield('extra-script')
</body>
</html>