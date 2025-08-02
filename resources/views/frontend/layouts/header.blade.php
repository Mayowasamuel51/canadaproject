<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"> 
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        <span class="badge bg-primary rounded-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Growers cider</h6>
            <small class="text-body-secondary">Brief description</small>
          </div>
          <span class="text-body-secondary">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Fresh grapes</h6>
            <small class="text-body-secondary">Brief description</small>
          </div>
          <span class="text-body-secondary">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Heinz tomato ketchup</h6>
            <small class="text-body-secondary">Brief description</small>
          </div>
          <span class="text-body-secondary">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Search</span>
      </h4>
      <form role="search" action="index.html"  action="{{ route('search') }}" method="get" class="d-flex mt-3 gap-0">
        <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="What are you looking for?" aria-label="What are you looking for?">
        <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</div>

<header>
  <div class="container-fluid">
    <div class="row py-3 border-bottom">

      <div class="col-sm-4 col-lg-3 text-center text-sm-start">
        <div class="main-logo">
          <a href="{{ route("home") }}">
            <h1 class="img-fluid  font-semibold">Upucanada</h1>
          </a>
        </div>
      </div>

      <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
        <div class="search-bar row bg-light p-2 my-2 rounded-4">
          <div class="col-md-4 d-none d-md-block">
            <select name="cat_id" id="cat_id" class="form-select border-0 bg-transparent">
              @foreach($category as $cat)
              <option>All Categories</option>
              <option value="{{ $cat->id }}">{{ $cat->category }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-11 col-md-7">
            <form id="search-form" class="text-center" action="{{ route('search') }}" method="get">
              <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products" />
            </form>
          </div>
          <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </svg>
          </div>
        </div>
      </div>

    <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-4 align-items-center mt-4 mt-sm-0">

  {{-- Support Info (only for xl and up) --}}

  {{-- Auth / Cart / Search --}}
  <ul class="d-flex align-items-center list-unstyled m-0">

    {{-- Sample Icon --}}
   

    {{-- Guest Links --}}
    @guest
    <li><a href="{{ route('login') }}" class="dropdown-item p-2">Login</a></li>
    <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
    @endguest

    {{-- Authenticated Links --}}
    @auth
    <li>
      <a href="{{ route('dashboard') }}" class="dropdown-item  p-4" style="font-weight: bold;;">My Account</a>
    </li>
    <li>
      <a href="{{ route('logout') }}" class="dropdown-item"
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
    @endauth

    {{-- Cart (Mobile only) --}}
    <li class="d-lg-none">
      <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
        <svg width="24" height="24" viewBox="0 0 24 24">
          <use xlink:href="#cart" />
        </svg>
      </a>
    </li>

    {{-- Search (Mobile only) --}}
    <li class="d-lg-none">
      <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
        <svg width="24" height="24" viewBox="0 0 24 24">
          <use xlink:href="#search" />
        </svg>
      </a>
    </li>

  </ul>

  {{-- Cart Display for Desktop --}}
  <div class="cart text-end d-none d-lg-block dropdown">
    <button class="border-0 bg-transparent d-flex flex-column gap-1 lh-1" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
      <span class="fs-6 text-muted dropdown-toggle">Your Cart</span>
      <!-- <span class="cart-total fs-5 fw-bold">$1290.00</span> -->
    </button>
  </div>

</div>


    </div>
  </div>
  <div class="container-fluid">
    <div class="row py-3">
      <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
        <nav class="main-menu d-flex navbar navbar-expand-lg">

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header justify-content-center">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">


              <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu" aria-labelledby="pages">
                    @guest
                    <li><a href="{{ route('login') }}" class="dropdown-item p-2">Login</a></li>
                    <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
                    @endguest
                    @auth
                    <li><a href="{{ route('dashboard') }}" class="dropdown-item font-bold">My Account</a></li>
                    <li><a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                      </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    @endauth
                    <li><a href="index.html" class="dropdown-item">Shop </a></li>
                    <li><a href="index.html" class="dropdown-item">Single Product </a></li>
                    <li><a href="index.html" class="dropdown-item">Cart </a></li>
                    <li><a href="index.html" class="dropdown-item">Checkout </a></li>
                    <!-- <li><a href="index.html" class="dropdown-item">Blog </a></li> -->
                    <li><a href="index.html" class="dropdown-item">Single Post </a></li>
                    <li><a href="index.html" class="dropdown-item">Styles </a></li>
                    <li><a href="index.html" class="dropdown-item">Contact </a></li>
                    <li><a href="index.html" class="dropdown-item">Thank You </a></li>




                    <li><a href="index.html" class="dropdown-item">404 Error </a></li>
                  </ul>
                </li>

                <li class="nav-item active">
                  <a href="{{ route('events') }}" class="nav-link">Events</a>
                </li>
                <li class="nav-item dropdown">
                  <!-- <a href="#men" class="nav-link">Blogs</a> -->

                </li>
                <li class="nav-item">
                  <a href="#kids" class="nav-link">MarketPlace</a>
                </li>

              </ul>

            </div>

          </div>
      </div>
    </div>
  </div>
</header>