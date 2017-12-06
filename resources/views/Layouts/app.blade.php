<!DOCTYPE html>
<html>
	@include('layouts.htmlheader')
	@include('layouts.sidebar')
	<div class="content-wrapper">
	<div class="container-fluid">
	@include('layouts.flash-message')
		@yield('main-content')
	</div>
	@include('layouts.footer')
</div>
</body>
</html>