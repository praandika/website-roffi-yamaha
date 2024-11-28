@extends('layouts.main')
@section('title','About')
@section('page-title',content: 'Tambah About')

@section('content')
<a href="{{ route('about.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Kontak</label>
                        <input type="text" class="form-control" name="kontak" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <textarea name="tentang" rows="10" cols="50" placeholder="Masukin cerita tentang diri kamu..." class="form-control" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="file" class="form-control" name="image" placeholder="" accept=".jpg, .jpeg, .png" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Simpan ceritamu</button>
            <button type="reset" class="btn btn-secondary">Hapus yang Diketik tadi</button>

        </form>
    </div>
</div>
@endsection
