<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Badung, Bali</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Senin - Sabtu : 09.00 - 17.00</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            @forelse ($contact as $o)
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>
                    <a href="https://wa.me/{{ $o->phone }}?text=Hai%20saya%20ingin%20tanya%20motor%20Yamaha">+{{ $o->phone }}</a>
                </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="{{ $o->facebook }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="{{ $o->twitter }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href="{{ $o->instagram }}"><i class="fab fa-instagram"></i></a>
            </div>
            @empty
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>
                    <a href="https://wa.me/6285739222837">+6285739222837</a>
                </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            @endforelse
            
        </div>
    </div>
</div>
<!-- Topbar End -->
