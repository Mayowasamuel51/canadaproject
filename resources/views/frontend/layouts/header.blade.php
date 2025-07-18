	<header id="home" class="welcome-hero">


		<!-- top-area Start -->
		<div class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
				<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

					<!-- Start Top Search -->
					<div class="top-search">
						<div class="container">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
							</div>
						</div>
					</div>
					<!-- End Top Search -->

					<div class="container">
						<!-- Start Atribute Navigation -->
						<div class="attr-nav">
							<ul>
								<li class="search">
									<a href="#"><span class="lnr lnr-magnifier"></span></a>
								</li><!--/.search-->
								<li class="nav-setting">
									<a href="#"><span class="lnr lnr-cog"></span></a>
								</li><!--/.search-->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<span class="lnr lnr-cart"></span>
										<span class="badge badge-bg-1">2</span>
									</a>
									<ul class="dropdown-menu cart-list s-cate">
										<li class="single-cart-list">
											<a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
											<div class="cart-list-txt">
												<h6><a href="#">arm <br> chair</a></h6>
												<p>1 x - <span class="price">$180.00</span></p>
											</div><!--/.cart-list-txt-->
											<div class="cart-close">
												<span class="lnr lnr-cross"></span>
											</div><!--/.cart-close-->
										</li><!--/.single-cart-list -->
										<li class="single-cart-list">
											<a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
											<div class="cart-list-txt">
												<h6><a href="#">single <br> armchair</a></h6>
												<p>1 x - <span class="price">$180.00</span></p>
											</div><!--/.cart-list-txt-->
											<div class="cart-close">
												<span class="lnr lnr-cross"></span>
											</div><!--/.cart-close-->
										</li><!--/.single-cart-list -->
										<li class="single-cart-list">
											<a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
											<div class="cart-list-txt">
												<h6><a href="#">wooden arn <br> chair</a></h6>
												<p>1 x - <span class="price">$180.00</span></p>
											</div><!--/.cart-list-txt-->
											<div class="cart-close">
												<span class="lnr lnr-cross"></span>
											</div><!--/.cart-close-->
										</li><!--/.single-cart-list -->
										<li class="total">
											<span>Total: $0.00</span>
											<button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
										</li>
									</ul>
								</li><!--/.dropdown-->
							</ul>
						</div><!--/.attr-nav-->
						<!-- End Atribute Navigation -->

						<!-- Start Header Navigation -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
								<i class="fa fa-bars"></i>
							</button>
							<!-- <a class="navbar-brand" href="index.html">furn.</a> -->
							<a lass="navbar-brand" href="{{ route('home') }}">Upcanada</a>

						</div><!--/.navbar-header-->
						<!-- End Header Navigation -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
							<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
								<li class=" scroll active"><a href="#home">home</a></li>
								<li class="scroll"><a href="#new-arrivals">meembers</a></li>
								<li class="scroll"><a href="#feature">events</a></li>
								<li class="scroll"><a href="#blog">marketplace</a></li>
								@guest
								<li class="scro"><a href="{{ route('login') }}">Login</a></li>

								@endguest


								@auth
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">
										Account <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
										<li><a href="{{ route('profile.myblogs') }}">My Blogs</a></li>
										<li><a href="{{ route('profile.edit') }}">Profile</a></li>
										<li>
											<form action="{{ route('logout') }}" method="POST" style="display: inline;">
												@csrf
												<button type="submit" class="dropdown-item" style="background: none; border: none; padding: 5px 15px; width: 100%; text-align: left;">Logout</button>
											</form>
										</li>
									</ul>
								</li>
								@endauth
							</ul><!--/.nav -->
						</div><!-- /.navbar-collapse -->
					</div><!--/.container-->
				</nav><!--/nav-->
				<!-- End Navigation -->
			</div><!--/.header-area-->
		

		</div><!-- /.top-area-->
		<!-- top-area End -->

	</header>