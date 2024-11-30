<div class="modal fade modalSpec" tabindex="-1" role="dialog" aria-labelledby="modalSpec" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal">Pilih Product</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="basic-datatables-unit" class="display table table-striped table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>Product</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($product as $o)
                            <tr data-id="{{ $o->id }}" data-unit="{{ $o->model_name }}" class="pilihUnit">
                                <td>{{ $o->model_name }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="1" style="text-align: center;">No data available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <p><strong>Dikanayoga Developer</strong></p>
            </div>
        </div>
    </div>
</div>

@push('after-js')
<script>
    $(document).on('click', '.pilihUnit', function (e) {
        $('#model_name').val($(this).attr('data-unit'));
        $('.modalSpec').modal('hide');
    });

    $(document).ready(function () {
        $('#basic-datatables-unit').DataTable({
            "pageLength": 20
        });
    });

</script>
@endpush
