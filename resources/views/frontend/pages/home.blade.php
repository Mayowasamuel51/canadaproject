@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')


@section('main-content')

<div>
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel"></div>
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


    </div>
</div>
</div>

<div><h1>PIN</h1><input type="text"/></div>
<!--populer-products start -->
<section id="populer-products" class="populer-products">
    <div class="container">
        <div class="populer-products-content">
            <div>
                <h2 class="font-semibold">LATEST EVENTS </h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <!-- <div class="single-populer-products">
								<div class="single-populer-product-img mt40">
									<img src="assets/images/populer-products/p1.png" alt="populer-products images">
								</div>
								<h2><a href="#">arm chair</a></h2>
								<div class="single-populer-products-para">
									<p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
								</div>
							</div> -->
                </div>
                <div class="col-md-6">
                    <div class="single-populer-products">
                        <div class="single-inner-populer-products">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-inner-populer-product-img">
                                        <img src="assets/images/populer-products/p2.png" alt="populer-products images">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="single-inner-populer-product-txt">
                                        <h2>
                                            <a href="#">
                                                latest designed stool <span>and</span> chair
                                            </a>
                                        </h2>
                                        <p>
                                            Edi ut perspiciatis unde omnis iste natusina error sit voluptatem accusantium doloret mque laudantium, totam rem aperiam.
                                        </p>
                                        <div class="populer-products-price">
                                            <h4>Sales Start from <span>$99.00</span></h4>
                                        </div>
                                        <button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#'">
                                            discover more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- <div class="single-populer-products">
								<div class="single-populer-products">
									<div class="single-populer-product-img">
										<img src="assets/images/populer-products/p3.png" alt="populer-products images">
									</div>
									<h2><a href="#">hanging lamp</a></h2>
									<div class="single-populer-products-para">
										<p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
									</div>
								</div>
							</div> -->
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.populer-products-->



<section id="new-arrivals" class="new-arrivals">
    <div class="container">
        <div class="section-header">
            <h2>Market place</h2>
        </div><!--/.section-header-->
        <div class="new-arrivals-content">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals1.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-1">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">wooden chair</a></h4>
                        <p class="arrival-product-price">$65.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals2.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-2">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">single armchair</a></h4>
                        <p class="arrival-product-price">$80.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals3.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">wooden armchair</a></h4>
                        <p class="arrival-product-price">$40.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals4.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-1">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">stylish chair</a></h4>
                        <p class="arrival-product-price">$100.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals5.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">modern chair</a></h4>
                        <p class="arrival-product-price">$120.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals6.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-1">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">mapple wood dinning table</a></h4>
                        <p class="arrival-product-price">$140.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals7.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-2">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">arm chair</a></h4>
                        <p class="arrival-product-price">$90.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/arrivals8.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">wooden bed</a></h4>
                        <p class="arrival-product-price">$140.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section>


<!--blog start -->
<section id="blog" class="blog">
    <div class="container">
        <div class="section-header">
            <h2>latest blog</h2>
        </div><!--/.section-header-->
        <div class="blog-content">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="assets/images/blog/b1.jpg" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                            <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="assets/images/blog/b2.jpg" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                            <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="assets/images/blog/b3.jpg" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                            <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.blog-->
<!--blog end -->

@endsection

    