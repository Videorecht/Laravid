<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body>
    <header class="row">
	    @include('includes.header')
	</header>
    <div id="main" class="row">
	    @yield('content')
	</div>
	<footer class="row">
		@include('includes.footer')
	</footer>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
	<script src="//static.opentok.com/v2/js/opentok.js"></script>
</body>
</html>
