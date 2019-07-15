
<!DOCTYPE HTML>
<html>
@include('user.partials._head')
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
@include('user.partials._nav')
		



		@yield('content')

@include('user.partials._footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	@include('user.partials._script')

	</body>
</html>
