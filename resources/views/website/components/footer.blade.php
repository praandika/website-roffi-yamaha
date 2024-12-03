<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    @foreach ($contact as $o)
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Badung, Bali</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $o->phone }}</p>
                
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="text-light mb-4">Social Media</h4>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{ $o->twitter }}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{ $o->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{ $o->instagram }}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="text-light mb-4">Opening Hours</h4>
                <h6 class="text-light">Senin - Sabtu:</h6>
                <p class="mb-4">09.00 - 17.00</p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; Developed by <a class="border-bottom" href="https://github.com/praandika">KaCode</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ route('website.index') }}">Home</a>
                        <a href="{{ route('website.product') }}">Product</a>
                        <a href="{{ route('website.about') }}">About</a>
                        <a href="{{ route('website.contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
