@section('title', 'Contact')
@include('website.components.head')
@include('website.components.toolbar')
@include('website.components.navbar')

@include('website.components.page-header')
<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Contact Us //</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                @foreach ($contact as $o)
                <a href="https://wa.me/{{ $o->phone }}?text=Hai%20saya%20ingin%20tanya%20motor%20Yamaha">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/about/roffi.png') }}"
                            style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">Roffi <span class="fs-4"></span></h1>
                            <h4 class="text-white">Vaturohman</h4>

                            @php
                            $formatNumber = substr((string)$o->phone, 2);
                            @endphp
                            <h4 class="text-white">+62 {{ implode('-', str_split($formatNumber,4)) }}</h4>

                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.0316659747177!2d115.1858069!3d-8.7830909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd245e31d02e6d3%3A0xb928825aac34b069!2sYamaha%20DETA%20Nusa%20Dua!5e0!3m2!1sid!2sid!4v1733025751236!5m2!1sid!2sid"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>

        <br><br>
        <div class="row g-4">
            <div class="col-lg-12">
                <h1 class="mb-4"><span class="text-primary">Roffi</span> Yamaha Deta Bali</h1>
                <p class="mb-4">
                    @foreach ($about as $o)
                        {{ $o->tentang }}
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@include('website.components.product')
<livewire:sales-person />
@include('website.components.footer')
@include('website.components.script')
