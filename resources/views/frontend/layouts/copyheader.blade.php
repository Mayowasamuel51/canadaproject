	<header id="home" class="welcome-hero">

		<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<!--/.carousel-indicator -->
			<ol class="carousel-indicators">
				<!-- <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li> -->
				<!-- <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li> -->
				<!-- <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li> -->
			</ol><!-- /ol-->
			<!--/.carousel-indicator -->

			<!--/.carousel-inner -->
			<div class="carousel-inner" role="listb">
				<!-- .item -->
				<div class="im activ">
					<div class="single-slide- slie">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4> Welcome to Our Community!</h4>
												<!-- <h2>cloth covered accent chair</h2> -->
												<p>
													We are more than just a community — we're a movement of learners, creators, and change-makers. Whether you're here to read insightful blog posts, attend exciting Zoom events, sell or buy items in our mini marketplace, or grow through our educational platform — you're in the right place.
												</p>
												<div class="packages-price">
													<p>
														<!-- $ 399.00 -->
														<!-- <del>$ 499.00</del> -->
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													Canada Events
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
													Become a member
												</button>
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<!-- <img src="assets/images/slider/slider1.png" alt="slider image"> -->
											</div><!--/.welcome-hero-txt-->
										</div><!--/.single-welcome-hero-->
									</div><!--/.col-->
								</div><!--/.row-->
							</div><!--/.welcome-hero-content-->
						</div><!-- /.container-->
					</div><!-- /.single-slide-item-->

				</div><!-- /.item .active-->


			</div><!-- /.carousel-inner-->

		</div><!--/#header-carousel-->

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
								<li class="scroll"><a href="#new-arrivals">memembers</a></li>
								<li class="scroll"><a href="#feature">events</a></li>
								<li class="scroll"><a href="#blog">marketplace</a></li>
								@guest
								<li class="scro"><a href="{{ route('login') }}">Login</a></li>

								@endguest

								@auth
								<li class="scro">
									<a href="{{ route('dashboard') }}">Dashboard</a>
								</li>
								<li class="scro">
									<form action="{{ route('logout') }}" method="POST" style="display: inline;">
										@csrf
										<button type="submit" style="background: none; border: none; padding: 0; color: inherit; cursor: pointer;">
											<!-- Logout -->
										</button>
									</form>
								</li>
								@endauth
							</ul><!--/.nav -->
						</div><!-- /.navbar-collapse -->
					</div><!--/.container-->
				</nav><!--/nav-->
				<!-- End Navigation -->
			</div><!--/.header-area-->
			<div class="clearfix"></div>

		</div><!-- /.top-area-->
		<!-- top-area End -->

	</header>