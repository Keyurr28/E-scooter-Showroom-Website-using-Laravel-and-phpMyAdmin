@extends('master')
@section('content')

<header id="header" class="site-header header-scrolled position-fixed text-black bg-light shadow-sm">
    <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <h3 class="text-primary font-weight-bold">VIBEUP</h3>
            </a>
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="navbar-icon">
                    <use xlink:href="#navbar-icon"></use>
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                <div class="offcanvas-header px-4 pb-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/main-logo.png" class="logo">
                    </a>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link me-4 active" href="/index">Home</a></li>
                        <li class="nav-item"><a class="nav-link me-4" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link me-4" href="/contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link me-4" href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<br><br><br><br><br><br>

<!-- About Us Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Text Content -->
        <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="section-title text-dark mb-4">About Us</h2>
            <p class="lead text-muted">
                Welcome to <strong>VIBEUP</strong>, your one-stop destination for high-quality products, great service, and an exciting shopping experience. Our mission is to offer a seamless and enjoyable shopping experience for all our customers, with a focus on quality, security, and satisfaction.
            </p>
            <p class="text-muted">
                At <strong>VIBEUP</strong>, we believe in creating a vibrant shopping environment that brings our customers the best in lifestyle products, delivered with care and convenience. We strive to create value for our customers through regular discounts, free shipping, and secure payment options.
            </p>
        </div>

        <!-- Image -->
        <div class="col-lg-6">
            <img src="images/w.44.jpg" alt="About VIBEUP" class="img-fluid rounded shadow-lg">
        </div>
    </div>
</div>

<hr class="my-5">

<!-- Piano Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Text Content -->
        <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="section-title text-dark mb-4">Piano</h2>
            <p class="lead text-muted">
                The piano was invented by Bartolomeo Cristofori (1655-1731) of Italy. Cristofori was unsatisfied by the lack of control that musicians had over the volume level of the harpsichord. He is credited for switching out the plucking mechanism with a hammer to create the modern piano in around the year 1700.
                The instrument was actually first named "clavicembalo col piano e forte" (literally, a harpsichord that can play soft and loud noises). This was shortened to the now common name, "piano."
            </p>
        </div>

        <!-- Image -->
        <div class="col-lg-6">
            <img src="images/w.46.jpg" alt="Piano" class="img-fluid rounded shadow-lg">
        </div>
    </div>

    <div class="container my-5">
    <div class="row align-items-center">
        <!-- Text Content -->
        <div class="col-lg-6 mb-4 mb-lg-0">
            <h1 class="section-title text-dark mb-4">Violin</h1>
            <p class="lead text-muted">
                
            violin, bowed stringed musical instrument that evolved during the Renaissance from earlier bowed instruments: the medieval fiddle; its 16th-century Italian offshoot, the lira da braccio; and the rebec. The violin is probably the best known and most widely distributed musical instrument in the world.
            </p>
        </div>

        <!-- Image -->
        <div class="col-lg-6">
            <img src="images/w.47.jpg" alt="Piano" class="img-fluid rounded shadow-lg">
        </div>
    </div>
</div>

@endsection