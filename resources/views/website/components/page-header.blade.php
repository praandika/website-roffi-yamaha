<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">@yield('title')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('website.index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">@yield('title')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->
