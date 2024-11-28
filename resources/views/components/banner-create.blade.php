@extends('layouts.main')
@section('title','Banner')
@section('page-title',content: 'Tambah Banner')

@section('content')
<a href="{{ route('banner.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Link</label>
                        <input type="text" class="form-control" name="link">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Banner</label>
                        <input type="file" class="form-control" name="image" placeholder="" accept=".jpg, .jpeg, .png">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Simpan bannernya</button>
            <button type="reset" class="btn btn-secondary">Hapus yang Diketik tadi</button>

        </form>
    </div>
</div>
@endsection
