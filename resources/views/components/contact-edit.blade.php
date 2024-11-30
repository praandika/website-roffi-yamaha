@extends('layouts.main')
@section('title','Contact')
@section('page-title',content: 'Ubah Contact')

@section('content')
<a href="{{ route('contact.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}"
                            placeholder="Phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="facebook" value="{{ $contact->facebook }}"
                            placeholder="Facebook Link">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="twitter" value="{{ $contact->twitter }}"
                            placeholder="Twitter Link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="instagram" value="{{ $contact->instagram }}"
                            placeholder="Instagram Link">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Ubah productnya</button>
            <button type="reset" class="btn btn-secondary">Hapus yang Diketik tadi</button>

        </form>
    </div>
</div>
@endsection
