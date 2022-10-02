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
                            <h3 class="main-content-label mb-1">Tambah Barang Masuk</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/prosestambah" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Supplier</label>
                                <div class="col-sm-10">
                                    <select class="form-select" @error('suppliers_id')  @enderror name="suppliers_id"
                                        aria-label="Default select example" id="suppliers_id">
                                        <option value disabled selected="">Pilih Supplier</option>
                                        @foreach ($supplier as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_supplier }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('suppliers_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="namabarang" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            @error('namabarang')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Merk</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="merk_id" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            @error('merk_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" name="harga" id="harga" class="form-control"
                                            id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            @error('harga')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="number" name="jumlah" id="jumlah" class="form-control"
                                        id="inputEmail3">
                                </div>
                            </div>
                            @error('jumlah')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" name="total" id="total" class="form-control"
                                            id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Masukkan Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto" id="foto" class="form-control"
                                        id="inputEmail3">
                                </div>
                            </div>
                            @error('foto')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group mg-b-20">
                                <label class="ckbox">
                                </label>
                            </div>
                            <button class=" ripple btn-main-primary ">Submit</button>
                            <a href="barangmasuk" class=" ripple btn-main-primary btn">Kembali</a>
                    </div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


        <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $("#jumlah").change(function() {
                    var jumlah = $("#jumlah").val();
                    var harga = $("#harga").val();
                    var total = jumlah * harga
                    $("#total").val(total);
                });
            });
            $("#jumlah").keyup(function() {
                var jumlah = $("#jumlah").val();
                var harga = $("#harga").val();
                var total = jumlah * harga
                $("#total").val(total);
            });
        </script>
    </body>

    </html>
@endsection
