<!DOCTYPE html>
<html lang="zxx">

<head>
	@include('frontend.layouts.head')
</head>

<body class="js container">
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	<script src="{{ asset('frontend/js/jquery-1.11.0.min.js') }}"></script>
	<script src="{{ asset('frontend/js/modernize.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins.js') }}"></script>
	<script src="{{ asset('frontend/js/script.js') }}"></script>
	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<!--bootstrap.min.js-->
	<script src="{{asset('frontend/jquery-1.11.0.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="{{ asset('frontend/js/plugins.js')}}"></script>
	<script src="{{ asset('frontend/js/script.js')}}"></script>
</body>

</html>