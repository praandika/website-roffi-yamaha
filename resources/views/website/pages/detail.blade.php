@section('title', 'Product Information')
@include('website.components.head')
@include('website.components.toolbar')
@include('website.components.navbar')

@include('website.components.page-header')
<!-- Detail Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Product //</h6>
            <h1 class="mb-5">{{ $param }}</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            @foreach ($product as $o)
            <a href="#">
                <div class="testimonial-item text-center">
                    <div class="position-relative overflow-hidden" style="top: 50px">
                        <img class="img-fluid" src="{{ asset('img/'.$o->gambar) }}" alt="{{ $o->model_name }}">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">{{ $o->model_name }}</h5>
                        <h6 class="fw-bold mb-0">{{ $o->warna }}</h6>
                        <small>Rp{{ number_format($o->harga) }}</small>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <br><br>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fas fa-cogs fa-2x me-3"></i>
                        <h4 class="m-0">Mesin</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                        data-bs-target="#tab-pane-2" type="button">
                        <i class="fas fa-motorcycle fa-2x me-3"></i>
                        <h4 class="m-0">Rangka</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                        data-bs-target="#tab-pane-3" type="button">
                        <i class="fas fa-arrows-alt-h fa-2x me-3"></i>
                        <h4 class="m-0">Dimensi</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
                        data-bs-target="#tab-pane-4" type="button">
                        <i class="fas fa-bolt fa-2x me-3"></i>
                        <h4 class="m-0">Kelistrikan</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-12">
                                @php($no = 1)
                                @foreach($mesin as $oTitle => $oSpec)
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                            style="width: 45px; height: 45px;">
                                            <span class="fw-bold text-secondary">{{ $no++ }}</span>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $oTitle }}</h6>
                                            <span>{{ $oSpec }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-12">
                                @php($no = 1)
                                @foreach($rangka as $oTitle => $oSpec)
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                            style="width: 45px; height: 45px;">
                                            <span class="fw-bold text-secondary">{{ $no++ }}</span>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $oTitle }}</h6>
                                            <span>{{ $oSpec }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-12">
                                @php($no = 1)
                                @foreach($dimensi as $oTitle => $oSpec)
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                            style="width: 45px; height: 45px;">
                                            <span class="fw-bold text-secondary">{{ $no++ }}</span>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $oTitle }}</h6>
                                            <span>{{ $oSpec }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-12">
                                @php($no = 1)
                                @foreach($kelistrikan as $oTitle => $oSpec)
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                            style="width: 45px; height: 45px;">
                                            <span class="fw-bold text-secondary">{{ $no++ }}</span>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $oTitle }}</h6>
                                            <span>{{ $oSpec }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->

<!-- Call To Action Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-6">
                <h6 class="text-primary text-uppercase">// Beli Sekarang Juga //</h6>
                <h1 class="mb-4">Ingin dapatkan motor ini segera?</h1>
                <p class="mb-0">Hubungi saya sekarang juga, dan dapatkan motor impian Anda dengan segera! Jangan
                    lewatkan kesempatan untuk memiliki Yamaha terbaik hanya dengan satu klik!
                </p>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    @foreach ($contact as $o)
                        @php($formatNumber = substr((string)$o->phone, 2))
                        <h3 class="text-white mb-4">
                            <i class="fa fa-phone-alt me-3"></i>
                            +62 {{ implode('-', str_split($formatNumber,4)) }}
                        </h3>
                    
                    <a href="https://wa.me/{{ $o->phone }}?text=Hai%20saya%20ingin%20tanya%20motor%20{{ $param }}%20" class="btn btn-secondary py-3 px-5">Hubungi Saya<i class="fa fa-arrow-right ms-3"></i></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action End -->
@include('website.components.search')
<livewire:sales-person />
@include('website.components.footer')
@include('website.components.script')
