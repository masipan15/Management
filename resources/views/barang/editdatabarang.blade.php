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


        <title>Edit</title>
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
                                    <h1 class="text-center">Edit Data Barang</h1>

                                    <div class="container">

                                        <div class="row">
                                            <div class="col mt-2">
                                                <form action="/updatebarang/{{ $data->id }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    
                                                    
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama
                                                            Barang</label>
                                                            <input type="text" name="namabarang" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->namabarang }}"
                                                            aria-describedby="emailHelp">
                                                        </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Merk
                                                            </label>
                                                            <input type="text" name="merk" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->merk }}"
                                                            aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Kategori
                                                            </label>
                                                            <input type="text" name="kategori" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->kategori }}"
                                                            aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Stok
                                                            </label>
                                                            <input type="text" name="stok" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->stok }}"
                                                            aria-describedby="emailHelp">
                                                        </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Harga
                                                            </label>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                        <input type="text" name="harga" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->harga }}"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Harga Jual</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                        <input type="text" name="hargajual" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->hargajual }}"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Deskripsi </label>
                                                        <input type="text" name="deskripsi" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->deskripsi }}"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                                                        <img class="img mb-3"
                                                            src="{{ asset('fotobarang/' . $data->foto) }}"alt=""
                                                            style="width: 40px">
                                                        <input type="file" name="foto" class="form-control"
                                                            id="exampleInputEmail1" value="{{ $data->foto }}"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                    <a href="/datakategori" type="button" class="btn btn-danger">
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
