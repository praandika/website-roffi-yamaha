@extends('layouts.main')
@section('title','Product')
@section('page-title',content: 'Product')

@section('content')
<a href="{{ route('product.create') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-plus"></i></span>
    <span class="btn-inner--text">Tambah</span>
</a>
<div class="row mb-4">
    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0" id="myTable">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Product
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Status</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $o)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="{{ asset('img/'.$o->gambar) }}" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-xs">{{ $o->model_name }}</h6>
                                    <p class="text-xs text-secondary mb-0">{{ $o->warna }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">Rp{{  number_format($o->harga, 0, ',','.')  }}</p>
                            <p class="text-xs text-secondary mb-0">{{ $o->kategori }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{ $o->status }}</p>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('product.edit',$o->id) }}"
                                class="font-weight-normal text-xs btn btn-info" data-toggle="tooltip"
                                data-original-title="Edit user">
                                <i class="fa-solid fa-pencil"></i>
                                Mau aku ubah
                            </a>
                        </td>
                    </tr>
                    @empty
                    <td colspan="4" style="text-align: center;">gak ada data nih</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@push('after-js')
<script>
    let table = new DataTable('#myTable');

</script>
@endpush
@endsection
