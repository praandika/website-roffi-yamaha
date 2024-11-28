@extends('layouts.main')
@section('title','Product')
@section('page-title',content: 'Tambah Product')

@section('content')
<a href="{{ route('product.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="model_name" value="{{ $product->model_name }}" placeholder="Nama Product">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="warna" value="{{ $product->warna }}" placeholder="Warna">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="number" class="form-control" name="harga" value="{{ $product->harga }}" placeholder="Harga">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label for="formSelect" class="ms-0">Kategori</label>
                        <select class="form-control" id="formSelect" name="kategori">
                            <option value="{{ $product->kategori }}">{{ $product->kategori }}</option>
                            <option>----------------------</option>
                            <option value="MAXI">MAXI</option>
                            <option value="CLASSY">CLASSY</option>
                            <option value="MATIC">MATIC</option>
                            <option value="SPORT">SPORT</option>
                            <option value="OFF-ROAD">OFF-ROAD</option>
                            <option value="MOPED">MOPED</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" id="btnImage" class="btn btn-info">Ubah Gambar ah</button>
                    <div class="input-group input-group-outline my-3">
                        <input type="file" class="form-control" name="image" placeholder="" accept=".jpg, .jpeg, .png" style="display: none;" id="formImage">
                    </div>
                    <p>Nama Filenya : {{ $product->gambar }}</p>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('img/'.$product->gambar) }}" alt="img-blur-shadow"
                        class="img-fluid shadow border-radius-lg">
                </div>

            </div>

            <button type="submit" class="btn btn-success">Simpan datanya</button>
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
