@foreach ($about as $o)
<a href="https://wa.me/{{ $o->kontak }}?text=Hai%20saya%20ingin%20tanya%20motor%20Yamaha">
    <div class="sales">
        <div class="detail pulse vibrate-2">
            <h4 class="tracking-in-expand">
                Beli Motor? <br>
                Hubungi Saya
            </h4>
        </div>

        <img class="img-fluid foto" src="{{ asset('img/about/'.$o->gambar) }}" alt="">
    </div>
</a>
@endforeach
