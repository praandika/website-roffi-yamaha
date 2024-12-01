@section('title', 'About')
@include('website.components.head')
@include('website.components.toolbar')
@include('website.components.navbar')

@include('website.components.page-header')
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Penjualan</h5>
                        <p>Kami siap melayani penjualan sepeda motor dengan ramah, cepat, dan penuh solusi untuk
                            kebutuhan Anda!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Perawatan</h5>
                        <p>Kami melayani perawatan sepeda motor dengan profesional, cepat, dan hasil yang memuaskan!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Suku Cadang</h5>
                        <p>Kami menyediakan dan melayani penjualan suku cadang sepeda motor asli, lengkap, dan
                            terpercaya!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/dealer.jpg') }}" style="object-fit: cover;"
                        alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                        style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">2024 <span class="fs-4"></span></h1>
                        <h4 class="text-white">Nusa Dua Bali</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h1 class="mb-4"><span class="text-primary">Yamaha Deta Bali</span> berlokasi di Nusa Dua Kabupaten Badung Bali</h1>
                <p class="mb-4">Kami hadir dengan pelayanan terbaik untuk sepeda motor Yamaha Anda, dari penjualan, servis, hingga suku cadang asli</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Sales</h6>
                                <span>Melayani Penjualan Sepeda Motor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Service</h6>
                                <span>Melayani Perawatan Sepeda Motor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>Sparepart</h6>
                                <span>Melayani Suku Cadang Sepeda Motor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('website.product') }}" class="btn btn-primary py-3 px-5">Lihat Produk<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<livewire:sales-person />
@include('website.components.footer')
@include('website.components.script')
