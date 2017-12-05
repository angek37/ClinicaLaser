<!DOCTYPE html>
<html>
	@include('layouts.htmlheader')
	@include('layouts.sidebar')
	<div class="content-wrapper">
	<div class="container-fluid">
		@yield('main-content')
	</div>
	@include('layouts.footer')
</body>
</html>