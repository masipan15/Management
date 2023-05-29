@extends('layout.admin')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="row row-sm mt-3">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div>
                    <h3 class="main-content-label mb-1">Tambah Modal</h3>
                    <p class="text-muted card-sub-title"></p>
                </div>
                <form action="/insertmodal" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Modal</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" required name="modal" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                    </div>
                    @error('modal')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" required name="tanggal" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    @error('tanggal')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="text-center mt-4 mb-3">
                        <button type="submit" class="btn ripple btn-main-primary active mr-1">Tambah</button>
                        <a href="/modal" type="button" class="btn ripple btn-secondary">Batal</a>
                    </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


</body>

</html>
@endsection