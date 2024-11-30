@extends('layouts.main')
@section('title','Spesification')
@section('page-title',content: 'Spesification')

@section('content')
<a href="{{ route('spesification.create') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mesin</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rangka</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dimensi</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelistrikan</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $o)
                    <tr>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->model_name }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->mesin }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->rangka }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->dimensi }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->kelistrikan }}</p>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('spesification.edit',$o->id) }}"
                                class="font-weight-normal text-xs btn btn-info" data-toggle="tooltip"
                                data-original-title="Edit user">
                                <i class="fa-solid fa-pencil"></i>
                                Mau aku ubah
                            </a>
                        </td>
                    </tr>
                    @empty
                    <td colspan="6" style="text-align: center;">gak ada data nih</td>
                    <td></td>
                    <td></td>
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
