<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img src="{{ asset('assets/img/logo-deta.png') }}" class="img-fluid" width="50" srcset="">YAMAHA Deta Bali</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="booking.html" class="dropdown-item">Booking</a>
                    <a href="team.html" class="dropdown-item">Technicians</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        @forelse ($contact as $o)
        <a href="https://wa.me/{{ $o->phone }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Beli Disini!<i
        class="fa fa-arrow-left ms-3"></i></a>
        @empty
        <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Beli Disini!<i
        class="fa fa-arrow-left ms-3"></i></a>
        @endforelse
        
    </div>
</nav>
<!-- Navbar End -->
