@extends('layout.admin')

@section('content')
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @endpush

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ACS Management</title>
    </head>

    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <div class="row row-sm">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Tambah Data Supplier</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/insertsupplier" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Supplier</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_supplier" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            @error('nama_supplier')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Supplier</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat_supplier" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            @error('alamat_supplier')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">No Telpon</label>
                                <div class="col-sm-10">
                                    <input type="number" name="notelpon" id="notelpon" class="form-control"
                                        id="inputEmail3">
                                </div>
                            </div>
                            @error('notelpon')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                        <div class="text-center mt-4 mb-3">
                                            <button type="submit"
                                                class="btn ripple btn-main-primary active mr-1">Tambah</button>
                                            <a href="/datasupplier" type="button"
                                                class="btn ripple btn-secondary">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


        <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

        {{-- <script>
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
        </script> --}}
    </body>

    </html>
@endsection
