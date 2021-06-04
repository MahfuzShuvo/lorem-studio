<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Lorem Studio | The Best Agency for Your Creative Business</title>
    <!-- css links -->
    @include('frontend.partials.assets-link.css-link')
    @yield('style')
</head>
<body>
	<!-- nav -->
	@include('frontend.partials.nav')

    <!-- main content start -->
    @yield('content')
    <!-- main content end -->

	<!-- footer -->
	@include('frontend.partials.footer')

    <!-- js links -->
    @include('frontend.partials.assets-link.js-link')
    @yield('script')
</body>
</html>