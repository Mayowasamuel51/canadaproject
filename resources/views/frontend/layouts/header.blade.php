<!-- Topbar Start -->
<div class="container-fluid bg-dark text-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>123 Street, New York, USA</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
 


<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0"><i class="text-primary me-2"></i>UpuCanada</h2>
    </a>
   
    
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active" style="color: black;">Home</a>
            <a href="{{ route('marketPlace') }}" class="nav-item nav-link">Market Place</a>
            <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
            <a href="{{ route('aboutus') }}" class="nav-item nav-link">About Us</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    @guest
                    <a href="{{ route('login') }}" class="dropdown-item">Become a Member</a>
                    @endguest

                    @auth
                    <a href="{{ route('dashboard') }}" class="dropdown-item fw-bold">My Account</a>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    @endauth

                    <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                    <a href="{{ route('marketPlace') }}" class="dropdown-item">Market Place</a>
                    <a href="{{ route('events') }}" class="dropdown-item">Events</a>
                    <a href="{{ route('aboutus') }}" class="dropdown-item">About Us</a>
                </div>
            </div>

            <a class="nav-item nav-link">Contact</a>
        </div>

        @guest
        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-inline-block">
            Become a Member <i class="fa fa-arrow-right ms-2 mt-3"></i>
        </a>
        @endguest
    </div>

    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
<!-- Navbar End -->
