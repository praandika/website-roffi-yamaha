@extends('layouts.main')
@section('title','Spesification')
@section('page-title',content: 'Ubah Spesification')

@section('content')
<a href="{{ route('spesification.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('spesification.update', $spesification->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="model_name"
                            value="{{ $spesification->model_name }}" placeholder="Model Name" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <label>Mesin Data Mentah</label>
                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <textarea name="mesin" class="form-control" placeholder="ubah data mesinnya disini">
                            {{ $spesification->mesin }}
                        </textarea>
                    </div>
                </div>

                <label>Rangka Data Mentah</label>
                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <textarea name="rangka" class="form-control" placeholder="ubah data rangkanya disini">
                            {{ $spesification->rangka }}
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <label>Dimensi Data Mentah</label>
                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <textarea name="dimensi" class="form-control" placeholder="ubah data dimensinya disini">
                            {{ $spesification->dimensi }}
                        </textarea>
                    </div>
                </div>

                <label>Kelistrikan Data Mentah</label>
                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <textarea name="kelistrikan" class="form-control" placeholder="ubah data kelistrikannya disini">
                            {{ $spesification->kelistrikan }}
                        </textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Ubah productnya</button>
            <button type="reset" class="btn btn-secondary">Hapus yang Diketik tadi</button>

        </form>
    </div>
</div>
@endsection
