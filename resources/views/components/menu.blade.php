<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="{{ route('dashboard') }}"
            target="_blank">
            <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">Website Roffi</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('product.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('product.index') }}">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <span class="nav-link-text ms-1">Product</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('spesification.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('spesification.index') }}">
                    <i class="fa-solid fa-gears"></i>
                    <span class="nav-link-text ms-1">Spesifikasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('banner.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('banner.index') }}">
                <i class="fa-solid fa-panorama"></i>
                    <span class="nav-link-text ms-1">Banner</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('about.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('about.index') }}">
                    <i class="fa-regular fa-circle-question"></i>
                    <span class="nav-link-text ms-1">About</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
