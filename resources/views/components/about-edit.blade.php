@extends('layouts.main')
@section('title','About')
@section('page-title',content: 'Ubah About')

@section('content')
<a href="{{ route('about.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="kontak" value="{{ $about->kontak }}"
                            placeholder="Ubah kontakmu">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                    <textarea name="tentang" rows="10" cols="50" placeholder="Ubah cerita tentang diri kamu..." class="form-control" required>{{ $about->tentang }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" id="btnImage" class="btn btn-info">Ubah Foto ah</button>
                    <div class="input-group input-group-outline my-3">
                        <input type="file" class="form-control" name="image" placeholder="" accept=".jpg, .jpeg, .png"
                            style="display: none;" id="formImage">
                    </div>
                    <p>Nama Filenya : {{ $about->gambar }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <img src="{{ asset('img/about/'.$about->gambar) }}" alt="img-blur-shadow"
                        class="img-fluid shadow border-radius-lg">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Ubah ceritamu</button>
            <button type="reset" class="btn btn-secondary">Hapus yang Diketik tadi</button>

        </form>
    </div>
</div>
@endsection

@push('after-js')
<script>
    $('#btnImage').on('click', function () {
        $('#formImage').css('display', 'block');
        $('#formImage').addClass('fadeInBawah');
    });

</script>
@endpush
