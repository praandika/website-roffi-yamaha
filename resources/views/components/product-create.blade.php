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
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama Product</label>
                        <input type="text" class="form-control" name="model_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Warna</label>
                        <input type="text" class="form-control" name="warna">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label for="formSelect" class="ms-0">Kategori</label>
                        <select class="form-control" id="formSelect" name="kategori">
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
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="image" placeholder="" accept=".jpg, .jpeg, .png">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Simpan productnya</button>
            <button type="reset" class="btn btn-secondary">Hapus yang Diketik tadi</button>

        </form>
    </div>
</div>
@endsection
