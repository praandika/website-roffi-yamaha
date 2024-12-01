<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('website.index') }}}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img src="{{ asset('assets/img/logo-deta.png') }}" class="img-fluid" width="50" srcset="">YAMAHA Deta Bali</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('website.index') }}" class="nav-item nav-link {{ Route::is('website.index')  ? 'active' : '' }}">Home</a>
            <a href="{{ route('website.product') }}" class="nav-item nav-link {{ Route::is('website.product') || Route::is('website.detail') || Route::is('website.search')  ? 'active' : '' }}">Product</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Route::is('website.category')  ? 'active' : '' }}" data-bs-toggle="dropdown">Category</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('website.category','maxi') }}" class="dropdown-item">MAXI</a>
                    <a href="{{ route('website.category','classy') }}" class="dropdown-item">CLASSY</a>
                    <a href="{{ route('website.category','matic') }}" class="dropdown-item">MATIC</a>
                    <a href="{{ route('website.category','sport') }}" class="dropdown-item">SPORT</a>
                </div>
            </div>
            <a href="{{ route('website.contact') }}" class="nav-item nav-link {{ Route::is('website.contact')  ? 'active' : '' }}">Contact</a>
            <a href="{{ route('website.about') }}" class="nav-item nav-link {{ Route::is('website.product')  ? 'active' : '' }}">About</a>
        </div>
        @forelse ($contact as $o)
        <a href="https://wa.me/{{ $o->phone }}?text=Hai%20saya%20ingin%20tanya%20motor%20Yamaha" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Beli Disini!<i
        class="fa fa-arrow-left ms-3"></i></a>
        @empty
        <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Beli Disini!<i
        class="fa fa-arrow-left ms-3"></i></a>
        @endforelse
        
    </div>
</nav>
<!-- Navbar End -->
