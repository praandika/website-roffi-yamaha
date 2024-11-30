@extends('layouts.main')
@section('title','Spesification')
@section('page-title',content: 'Tambah Spesification')

@section('content')
<a href="{{ route('product.index') }}" class="btn btn-icon btn-3 btn-primary mb-4" type="button">
    <span class="btn-inner--icon"><i class="fa-solid fa-arrow-left"></i></span>
    <span class="btn-inner--text">Balik ke Tabel</span>
</a>
<div class="row mb-4">
    <div class="card">
        <form action="{{ route('spesification.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama Product</label>
                        <input type="text" class="form-control" name="model_name" required data-bs-toggle="modal" data-bs-target=".modalSpec" id="model_name">
                    </div>
                </div>
            </div>
            <div class="row">
                <h2>Mesin</h2>
                <div class="wrapperInput">
                    <div class="row inputan">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Mesin Title</label>
                                <input type="text" class="form-control" name="mesin_title[]" required id="mesin_title"
                                    value="{{ old('mesin_title') }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Mesin Spesification</label>
                                <input type="text" class="form-control" name="mesin_spec[]" required id="mesin_spec"
                                value="{{ old('mesin_spec') }}">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button id="addRow" class="btn btn-secondary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Row</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <h2>Rangka</h2>
                <div class="wrapperInput2">
                    <div class="row inputan2">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Rangka Title</label>
                                <input type="text" class="form-control" name="rangka_title[]" required id="rangka_title"
                                    value="{{ old('rangka_title') }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Rangka Spesification</label>
                                <input type="text" class="form-control" name="rangka_spec[]" required id="rangka_spec"
                                value="{{ old('rangka_spec') }}">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button id="addRow2" class="btn btn-secondary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Row</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <h2>Dimensi</h2>
                <div class="wrapperInput3">
                    <div class="row inputan3">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Dimensi Title</label>
                                <input type="text" class="form-control" name="dimensi_title[]" required id="dimensi_title"
                                    value="{{ old('dimensi_title') }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Dimensi Spesification</label>
                                <input type="text" class="form-control" name="dimensi_spec[]" required id="dimensi_spec"
                                value="{{ old('dimensi_spec') }}">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button id="addRow3" class="btn btn-secondary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Row</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <h2>Kelistrikan</h2>
                <div class="wrapperInput4">
                    <div class="row inputan4">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Kelistrikan Title</label>
                                <input type="text" class="form-control" name="kelistrikan_title[]" required id="kelistrikan_title"
                                    value="{{ old('kelistrikan_title') }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Kelistrikan Spesification</label>
                                <input type="text" class="form-control" name="kelistrikan_spec[]" required id="kelistrikan_spec"
                                value="{{ old('kelistrikan_spec') }}">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button id="addRow4" class="btn btn-secondary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Row</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Simpan productnya</button>
            <button type="reset" class="btn btn-secondary">Hapus yang Diketik tadi</button>

        </form>
    </div>
</div>

@include('components.modal-product')
@endsection

@push('after-js')
<script>
    // Add dynamic field function mesin
    $(document).ready(function () {
        let field = `
            <div class="row inputan">
                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="mesin_title[]" required id="mesin_title" placeholder="Mesin Title"
                        value="{{ old('mesin_title') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="mesin_spec[]" required id="mesin_spec" placeholder="Mesin Spesification"
                        value="{{ old('mesin_spec') }}">
                    </div>
                </div>

                <div class="col-md-2">
                    <button class="removeRow btn btn-danger"><i class="fas fa-times"></i>&nbsp;&nbsp;Remove Row</button>
                </div>
            </div>
            `
        $('#addRow').on('click', function () {
            $('.wrapperInput').append(field);
        });

        $('.wrapperInput').on('click', '.removeRow', function (e) {
            e.preventDefault();
            $(this).parents('.inputan').remove();
        });
    });

    // Add dynamic field function rangka
    $(document).ready(function () {
        let field2 = `
            <div class="row inputan2">
                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="rangka_title[]" required id="rangka_title" placeholder="Rangka Title"
                        value="{{ old('rangka_title') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="rangka_spec[]" required id="rangka_spec" placeholder="Rangka Spesification"
                        value="{{ old('rangka_spec') }}">
                    </div>
                </div>

                <div class="col-md-2">
                    <button class="removeRow2 btn btn-danger"><i class="fas fa-times"></i>&nbsp;&nbsp;Remove Row</button>
                </div>
            </div>
            `
        $('#addRow2').on('click', function () {
            $('.wrapperInput2').append(field2);
        });

        $('.wrapperInput2').on('click', '.removeRow2', function (e) {
            e.preventDefault();
            $(this).parents('.inputan2').remove();
        });
    });

    // Add dynamic field function dimensi
    $(document).ready(function () {
        let field3 = `
            <div class="row inputan3">
                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="dimensi_title[]" required id="dimensi_title" placeholder="Dimensi Title"
                        value="{{ old('dimensi_title') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="dimensi_spec[]" required id="dimensi_spec" placeholder="Dimensi Spesification"
                        value="{{ old('dimensi_spec') }}">
                    </div>
                </div>

                <div class="col-md-2">
                    <button class="removeRow3 btn btn-danger"><i class="fas fa-times"></i>&nbsp;&nbsp;Remove Row</button>
                </div>
            </div>
            `
        $('#addRow3').on('click', function () {
            $('.wrapperInput3').append(field3);
        });

        $('.wrapperInput3').on('click', '.removeRow3', function (e) {
            e.preventDefault();
            $(this).parents('.inputan3').remove();
        });
    });

    // Add dynamic field function kelistrikan
    $(document).ready(function () {
        let field4 = `
            <div class="row inputan4">
                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="kelistrikan_title[]" required id="kelistrikan_title" placeholder="Kelistrikan Title"
                        value="{{ old('kelistrikan_title') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="kelistrikan_spec[]" required id="kelistrikan_spec" placeholder="Kelistrikan Spesification"
                        value="{{ old('kelistrikan_spec') }}">
                    </div>
                </div>

                <div class="col-md-2">
                    <button class="removeRow4 btn btn-danger"><i class="fas fa-times"></i>&nbsp;&nbsp;Remove Row</button>
                </div>
            </div>
            `
        $('#addRow4').on('click', function () {
            $('.wrapperInput4').append(field4);
        });

        $('.wrapperInput4').on('click', '.removeRow4', function (e) {
            e.preventDefault();
            $(this).parents('.inputan4').remove();
        });
    });
</script>
@endpush