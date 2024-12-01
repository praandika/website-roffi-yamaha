<div class="container-xxl py-5 footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="position-relative mx-auto" style="max-width: 100%;">
                    <form action="{{ route('website.search') }}" method="post">
                        @csrf
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Ketik Nama Motor Disini" name="model_name">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Cari
                            Motor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
