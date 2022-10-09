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
                            <h3 class="main-content-label mb-1">Tambah Barang</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/insertbarang" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" name="namabarang" id="namabarang" class="form-control"
                                        id="inputEmail3">
                                </div>
                            </div>
                            @error('nama_barang')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" required style="width:100%;" name="kategoris_id"
                                        class="" id="kategoris_id">
                                        <option value="" selected disabled>Pilih Kategori</option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('kategoris_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Merk</label>
                                <div class="col-sm-10">
                                    <input type="text" name="merk" id="merk" class="form-control"
                                        id="inputEmail3">
                                </div>
                            </div>
                            @error('merk')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" id="inputEmail3"></textarea>
                                </div>
                            </div>
                            @error('deskripsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Beli</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="number" name="harga" id="harga" class="form-control"
                                            id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            @error('harga')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Stok</label>
                                <div class="col-sm-10">
                                    <input type="number" name="stok" id="stok" class="form-control"
                                        id="inputEmail3">
                                </div>
                            </div>
                            @error('stok')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Jual</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" name="hargajual" id="hargajual" class="form-control"
                                            id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            @error('hargajual')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto1" class="form-control" id="foto1"
                                        id="inputEmail3">
                                </div>
                            </div>
                            @error('foto1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group mb-0">
                                <div class="row row-sm">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="custom-controls-stacked">
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit"
                                                class="btn ripple btn-main-primary active mr-1">Tambah</button>
                                            <a href="/barangkeluar" type="button"
                                                class="btn ripple btn-secondary">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


        {{-- <script src="https://code.jquery.com/jquery-3.5.0.min.js"
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

        <script>
            const selection = document.getElementById('nama_barang')
            selection.onchange = function(e) {
                const harga = e.target.options[e.target.selectedIndex].dataset.harga_jual
                const kodebarang = e.target.options[e.target.selectedIndex].dataset.kodebarang_keluar
                const merk = e.target.options[e.target.selectedIndex].dataset.merk_keluar
                const kategori = e.target.options[e.target.selectedIndex].dataset.kategori_keluar
                document.getElementById('harga_jual').value = harga;
                document.getElementById('kodebarang_keluar').value = kodebarang;
                document.getElementById('merk_keluar').value = merk;
                document.getElementById('kategori_keluar').value = kategori;
            }
        </script> --}}
    </body>

    </html>
@endsection
