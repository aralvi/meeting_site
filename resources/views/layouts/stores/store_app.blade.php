<!DOCTYPE html>
<html>
<head>
	@include('includes.stores.head')
	@yield('extra-css')
</head>
<body >
		
	@include('includes.stores.store_header')

	@yield('content')
	
	@yield('footer')

	@include('includes.stores.script')

	@yield('extra-script')
</body>
</html>