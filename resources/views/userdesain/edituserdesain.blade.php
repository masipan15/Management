@extends('layout.admin')

@section('content')
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @endpush

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



        <title>Edit Data</title>
    </head>

    <body>
        <div class="row row-sm">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Edit User Desain</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/updateuserdesain/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pemesan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="namapemesan" class="form-control" id="namapemesan"
                                        value="{{ $data->namapemesan }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pedesain</label>
                                <div class="col-sm-10">
                                    <input type="text" name="namapedesains" class="form-control" id="namapedesains"
                                        value="{{ $data->namapedesains }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Permintaan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="permintaan" class="form-control"
                                        id="exampleInputEmail1" value="{{ $data->permintaan }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="keterangan" class="form-control"
                                        id="exampleInputEmail1" value="{{ $data->keterangan }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Ukuran</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="ukuran" class="form-control"
                                        id="exampleInputEmail1" value="{{ $data->ukuran }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" required style="width:100%;" id="nameid" name="status">
                                        <option disabled selected value="">{{ $data->status }}
                                        <option value="Sedang Dalam Pengerjaan">Sedang Dalam
                                            Pengerjaan
                                        </option>
                                        <option value="Selesai">Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="number" name="harga" class="form-control" id="exampleInputEmail1"
                                            value="{{ $data->harga }}" id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4 mb-3">
                                <button type="submit" class="btn ripple btn-main-primary  active mr-1">Simpan</button>
                                <a href="/datauserdesain" type="button" class="btn ripple btn-secondary ">Batal</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
                                                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                                                                    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
                                                                </script>
                                                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                                                                    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
                                                                </script>
                                                                -->
    </body>

    </html>
@endsection
