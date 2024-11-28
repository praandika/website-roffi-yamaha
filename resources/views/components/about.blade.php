@extends('layouts.main')
@section('title','About')
@section('page-title',content: 'About')

@section('content')
@if($count <= 0)
<a href="{{ route('about.create') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-plus"></i></span>
    <span class="btn-inner--text">Tambah</span>
</a>
@endif

<div class="row mb-4 mt-4">
    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0" id="myTable">
                <thead>
                    <tr>
                        <th class="text-secondary opacity-7"></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Tentang</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $o)
                    <tr>
                        <td class="align-middle">
                            <a href="{{ route('about.edit',$o->id) }}"
                                class="font-weight-normal text-xs btn btn-info" data-toggle="tooltip"
                                data-original-title="Edit user">
                                <i class="fa-solid fa-pencil"></i>
                                Mau aku ubah
                            </a>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="{{ asset('img/about/'.$o->gambar) }}" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-xs">{{ $o->kontak }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0" style="word-break: break-all;">{{ $o->tentang }}</p>
                        </td>
                    </tr>
                    @empty
                    <td colspan="3" style="text-align: center;">gak ada data nih</td>
                    <td></td>
                    <td></td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection