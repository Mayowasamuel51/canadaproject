<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('frontend.layouts.head')	
</head>
<body class="js">
	
	@include('frontend.layouts.header')

	<!--/ End Header -->

	@yield('main-content')

		<script src="{{ asset('assets/js/jquery.js') }}"></script>

        <!--modernizr.min.js-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
      <!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Bootsnav JS -->
<script src="{{ asset('assets/js/bootsnav.js') }}"></script>

<!-- Owl Carousel JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>



		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script  src="{{ asset("assets/js/custom.js") }}"></script>

	@include('frontend.layouts.footer')

</body>
</html>


   <!-- <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=" scroll active"><a href="#home">Home</a></li>
				                    <li class="scroll"><a href="#new-arrivals">new arrival</a></li>
				                    <li class="scroll"><a href="#feature">Events</a></li>
				                    <li class="scroll"><a href="#blog">Blog</a></li>
				                    <li class="scroll"><a href="#newsletter">Markertplace</a></li>
                                    <li class="scroll"><a href="{{ route('user.login') }}">Login</a></li>
				                </ul> -->