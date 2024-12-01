@foreach ($about as $o)
<a href="https://wa.me/{{ $o->kontak }}?text=Hai%20saya%20ingin%20tanya%20motor%20Yamaha">
    <div class="sales">
        <div class="detail">
            <h4>
                Beli Motor? <br>
                Hubungi Saya
            </h4>
        </div>

        <img class="img-fluid foto" src="{{ asset('img/about/'.$o->gambar) }}" alt="">
    </div>
</a>
@endforeach
