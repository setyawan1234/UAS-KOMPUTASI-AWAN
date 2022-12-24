<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>Mojokerto, Jawatimur, Indonesia</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>care.agrofarm@gmail.com</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <div class="d-flex">
                <img class="" src="/assets/img/logo.png" alt="" width="50px" height="50px ">
                <h1 class="fw-bold " style="color: #379237; ">AGRO<span class="text-white">COFFEE</span></h1>
            </div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}">Home</a>
                <a href="/about" class="nav-item nav-link {{Request::is('about') ? 'active' : ''}}">About Us</a>
                <!-- <a href="/journey" class="nav-item nav-link {{Request::is('journey') ? 'active' : ''}}">Journey</a> -->
                <a href="/feature" class="nav-item nav-link {{Request::is('feature') ? 'active' : ''}}">Feature</a>
                <a href="/product" class="nav-item nav-link {{Request::is('product') ? 'active' : ''}}">Product</a>
                <!-- <a href="/team" class="nav-item nav-link {{Request::is('team') ? 'active' : ''}}">Team</a> -->
                <a href="/contact" class="nav-item nav-link {{Request::is('contact') ? 'active' : ''}}">Contact</a>
            </div>
            @guest
            <!-- <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="/login">
                    Login Now
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div> -->
            @else
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user() -> name}}</a>
                <div class="dropdown-menu m-0">
                    <a class="dropdown-item" href="dashboard">Dashboard</a>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
            @endguest
        </div>

    </nav>
</div>