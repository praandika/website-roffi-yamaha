<!-- Page Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Our Produts //</h6>
            <h1 class="mb-5">Yamaha Motorcycle List</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            @foreach ($product as $o)
            <a href="{{ route('website.detail',str_replace(' ','_',$o->model_name)) }}">
                <div class="testimonial-item text-center">
                    <div class="position-relative overflow-hidden" style="top: 50px">
                        <img class="img-fluid" src="{{ asset('img/'.$o->gambar) }}" alt="{{ $o->model_name }}">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">{{ $o->model_name }}</h5>
                        <small>Rp{{ number_format($o->harga) }}</small>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <a href="{{ route('website.product') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Show More<i
                class="fa fa-arrow-right ms-3"></i></a>

    </div>
</div>
<!-- Page End -->
