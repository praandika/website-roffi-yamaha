@section('title', 'Search Product')
@include('website.components.head')
@include('website.components.toolbar')
@include('website.components.navbar')

@include('website.components.page-header')
@include('website.components.search')
<!-- Page Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Products //</h6>
            <h1 class="mb-5">Cari "{{ $param }}"</h1>
        </div>
        <div class="row g-4">
            @foreach ($product as $o)

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <a href="{{ route('website.detail',str_replace(' ','_',$o->model_name)) }}">
                        <div class="position-relative overflow-hidden" style="top: 50px">
                            <img class="img-fluid" src="{{ asset('img/'.$o->gambar) }}" alt="{{ $o->model_name }}">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">{{ $o->model_name }}</h5>
                            <small>Rp{{ number_format($o->harga) }}</small>
                        </div>
                    </a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
<!-- Page End -->
<livewire:sales-person />
@include('website.components.footer')
@include('website.components.script')
