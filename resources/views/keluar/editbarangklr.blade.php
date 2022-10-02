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

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Edit Data Kategori</title>
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
                                    <h1 class="text-center">Edit Kategori</h1>

                                    <div class="container">

                                        <div class="row">
                                            <div class="col mt-2">
                                                <form action="/updatebrgklr/{{ $data->id }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama
                                                            Barang</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="nama_barang" class="form-control"
                                                                value="{{ $data->nama_barang }}"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Harga</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                                <input type="text" name="harga_jual" class="form-control"
                                                                    id="harga" value="{{ $data->harga_jual }}"
                                                                    aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="jumlah" class="form-control"
                                                                id="jumlah" value="{{ $data->jumlah }}"
                                                                aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Total</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                                <input type="text" name="total" class="form-control"
                                                                    id="total" value="{{ $data->total }}"
                                                                    aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                    <a href="/barangklr" type="button" class="btn btn-danger">
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


        <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>



        <script>
            $(document).ready(function() {
                $("#jumlah").change(function() {
                    var jumlah = $("#jumlah").val();
                    var harga_jual = $("#harga_jual").val();
                    var total = jumlah * harga_jual
                    $("#total").val(total);
                });
            });
            $("#jumlah").keyup(function() {
                var jumlah = $("#jumlah").val();
                var harga_jual = $("#harga_jual").val();
                var total = jumlah * harga_jual
                $("#total").val(total);
            });
        </script>



    </body>

    </html>
@endsection
