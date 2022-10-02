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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="text-center">Edit </h1>

                                    <div class="container">

                                        <div class="row">
                                            <div class="col mt-2">
                                                <form action="/updateuserservis/{{ $data->id }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row mb-3">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="namapelanggan" class="form-control"
                                                            id="namapelanggan" value="{{ $data->namapelanggan }}"
                                                                    id="inputEmail3">                                    
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Nama Barang</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="namabarang" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->namabarang }}"
                                                                    id="inputEmail3">                                    
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Merek</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="merk" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->merk }}"
                                                                    id="inputEmail3">                                    
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Kerusakan Barang</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="kerusakan" class="form-control"
                                                                id="exampleInputEmail1" value="{{ $data->kerusakan }}"
                                                                    id="inputEmail3">                                    
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Status Pengerjaan</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" required style="width:100%;"
                                                            id="nameid" name="status">
                                                            <option disabled value="">Pilih Status Pengerjaan
                                                            <option value="Sedang Dalam Pengerjaan">Sedang Dalam
                                                                Pengerjaan
                                                            </option>
                                                            <option value="Selesai">Selesai</option>
                                                        </select>                                  
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 col-form-label">Biaya Servis</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                                <input type="text" name="biaya" class="form-control"
                                                                    id="exampleInputEmail1" value="{{ $data->biaya }}"
                                                                    id="inputEmail3">  
                                                            </div>                                  
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                    <a href="/datauserservis" type="button" class="btn btn-danger">
                                                        Batal
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
