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
                            <h3 class="main-content-label mb-1">Edit Barang Masuk</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/updatebrgmsk/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Supplier</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="suppliers_id"
                                        aria-label="Default select example" id="suppliers_id">
                                        <option value disabled selected="">Pilih Supplier
                                        </option>
                                        @foreach ($supplier as $p)
                                            <option value="{{ $p->id }}"<?php if ($data->suppliers_id == $p->id) {
                                                echo 'selected';
                                            } ?>>
                                                {{ $p->nama_supplier }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="barangs_id"
                                        aria-label="Default select example" id="barangs_id">
                                        <option value disabled selected="">Pilih Barang
                                        </option>
                                        @foreach ($barang as $item)
                                            <option value="{{ $item->id }}"<?php if ($data->barangs_id == $item->id) {
                                                echo 'selected';
                                            } ?>
                                                data-merk="{{ $item->merk }}"
                                                data-kategoris_id="{{ $item->kategoris_id }}"
                                                data-harga="{{ $item->harga }}">
                                                {{ $item->namabarang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Merk</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="merk" readonly class="form-control" id="inputEmail3"
                                    value="{{ $data->merk }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="kategoris_id" readonly class="form-control" id="inputEmail3"
                                    value="{{ $data->kategoris_id }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" readonly name="harga" class="form-control"
                                            value="{{ $data->harga }}" id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->jumlah }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="number" name="total" readonly class="form-control" id="exampleInputEmail1"
                                            value="{{ $data->total }}" id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="row row-sm">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="custom-controls-stacked">
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit"
                                                class="btn ripple btn-main-primary active mr-1">Simpan</button>
                                            <a href="/barangmasuk" type="button" class="btn ripple btn-secondary">Batal</a>
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
    
    <script>
        const selection = document.getElementById('barangs_id')
        selection.onchange = function(e) {
            const merk = e.target.options[e.target.selectedIndex].dataset.merk
            const harga = e.target.options[e.target.selectedIndex].dataset.harga
            const kategoris_id = e.target.options[e.target.selectedIndex].dataset.kategoris_id
            document.getElementById('merk').value = merk;
            document.getElementById('harga').value = harga;
            document.getElementById('kategoris_id').value = kategoris_id;
        }
    </script>
    </body>

    </html>
@endsection
