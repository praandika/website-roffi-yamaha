@extends('layouts.main')
@section('title','Contact')
@section('page-title',content: 'Contact')

@section('content')
<a href="{{ route('contact.create') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-plus"></i></span>
    <span class="btn-inner--text">Tambah</span>
</a>
<div class="row mb-4">
    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0" id="myTable">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Facebook</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Twitter</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Instagram</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $o)
                    <tr>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->phone }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->facebook }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->twitter }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">{{ $o->instagram }}</p>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('contact.edit',$o->id) }}"
                                class="font-weight-normal text-xs btn btn-info" data-toggle="tooltip"
                                data-original-title="Edit user">
                                <i class="fa-solid fa-pencil"></i>
                                Mau aku ubah
                            </a>
                            <form action="{{ route('contact.destroy', $o->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="font-weight-normal text-xs btn btn-danger" data-toggle="tooltip"
                                    data-original-title="Edit user">
                                    <i class="fa-solid fa-trash"></i>
                                    Aku gak suka ini
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <td colspan="5" style="text-align: center;">gak ada data nih</td>
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
