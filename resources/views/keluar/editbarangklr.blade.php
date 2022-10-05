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
        <div class="row row-sm">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Edit Barang Keluar</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/updatebrgklr/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" required style="width:100%;" name="nama_barang"
                                    class="" id="nama_barang">
                                    <option value="" selected disabled>Pilih Nama Barang</option>
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id }}"
                                            <?php if ($data->nama_barang == $item->id) {
                                                echo 'selected';
                                            } ?>
                                            data-harga_jual="{{ $item->hargajual }}"
                                            data-kodebarang_keluar="{{ $item->kodebarang }}"
                                            data-merk_keluar="{{ $item->merk }}"
                                            data-kategoris_id="{{ $item->kategori->kategori }}">
                                            {{ $item->namabarang }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Kode Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="kodebarang_keluar" id="kodebarang_keluar"  value="{{ $data->kodebarang_keluar }}" class="form-control"
                                    id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Merk</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="merk_keluar" id="merk_keluar"  value="{{ $data->merk_keluar }}" class="form-control"
                                    id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kategoris_id" readonly id="kategoris_id"  value="{{ $data->kategoris_id }}" class="form-control"
                                    id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"  id="basic-addon1">Rp.</span>
                                        <input type="number" name="harga_jual" readonly id="harga_jual"  value="{{ $data->harga_jual }}" class="form-control"
                                    id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="number" name="jumlah" id="jumlah"  value="{{ $data->jumlah }}" class="form-control"
                                    id="inputEmail3">
                                </div>
                            </div>
                                @error('jumlah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <div class="row mb-3">
                                <label for="inputEmail3"
                                    class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" name="total" readonly id="total" value="{{ $data->total }}" class="form-control"
                                    id="inputEmail3">
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
                                            <button type="submit" class="btn ripple btn-main-primary active mr-1">Simpan</button>
                                            <a href="/barangkeluar" type="button" class="btn ripple btn-secondary">Batal</a>
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

        <script>
            const selection = document.getElementById('nama_barang')
            selection.onchange = function(e) {
                const harga = e.target.options[e.target.selectedIndex].dataset.harga_jual
                const kodebarang = e.target.options[e.target.selectedIndex].dataset.kodebarang_keluar
                const merk = e.target.options[e.target.selectedIndex].dataset.merk_keluar
                const kategoris_id = e.target.options[e.target.selectedIndex].dataset.kategoris_id
                document.getElementById('harga_jual').value = harga;
                document.getElementById('kodebarang_keluar').value = kodebarang;
                document.getElementById('merk_keluar').value = merk;
                document.getElementById('kategoris_id').value = kategoris_id    ;
            }
        </script>
    </body>

    </html>
@endsection

