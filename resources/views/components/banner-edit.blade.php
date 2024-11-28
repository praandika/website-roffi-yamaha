@extends('layouts.main')
@section('title','Banner')
@section('page-title',content: 'Ubah Banner')

@section('content')
<a href="{{ route('banner.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="title" value="{{ $banner->title }}"
                            placeholder="Judul">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="link" value="{{ $banner->link }}"
                            placeholder="Link">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" id="btnImage" class="btn btn-info">Ubah Gambar ah</button>
                    <div class="input-group input-group-outline my-3">
                        <input type="file" class="form-control" name="image" placeholder="" accept=".jpg, .jpeg, .png"
                            style="display: none;" id="formImage">
                    </div>
                    <p>Nama Filenya : {{ $banner->gambar }}</p>
                </div>

                <div class="col-md-6">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="status" id="yes" {{ $banner->status == 'on' ? 'checked' : '' }} value="on">
                        <label class="custom-control-label" for="yes">On</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="no" {{ $banner->status == 'on' ? '' : 'checked' }} value="off">
                        <label class="custom-control-label" for="no">Off</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <img src="{{ asset('img/banner/'.$banner->gambar) }}" alt="img-blur-shadow"
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
