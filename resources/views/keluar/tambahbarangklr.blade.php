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

        <div class="row row-sm mt-4">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Tambah Barang Keluar</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/insertbarangkeluar" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="">Nama Pelanggan</label>
                                <input type="text" class="form-control mb-3" id="nama_pelanggan" name="nama_pelanggan">
                                @error('nama_pelanggan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="row mb-3">
                                    <label class="">Nama Barang</label>
                                    <div class="form-label">
                                        <select class="form-control select2" required style="width:100%;" name="nama_barang"
                                            class="" id="nama_barang" @error('nama_barang')  @enderror>
                                            <option value="" selected disabled>Pilih Nama Barang</option>
                                            @foreach ($barang as $item)
                                                <option value="{{ $item->namabarang }}" data-harga_jual="{{ $item->hargajual }}"
                                                    data-kodebarang_keluar="{{ $item->kodebarang }}"
                                                    data-merk_keluar="{{ $item->merk }}"
                                                    data-stok="{{ $item->stok }}"
                                                    data-kategoris_id="{{ $item->kategori->kategori }}">
                                                    {{ $item->namabarang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('nama_barang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="row row-sm text-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <p class="form-label">Kode Barang</p>
                                                <input class="form-control text-center" readonly required
                                                    name="kodebarang_keluar" type="text" id="kodebarang_keluar">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Merk</p>
                                                <input class="form-control text-center" readonly required name="merk_keluar"
                                                    id="merk_keluar" type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Harga Jual</p>
                                                <input class="form-control text-center" readonly required name="harga_jual"
                                                    id="harga_jual" type="number">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Stok</p>
                                                <input class="form-control text-center" readonly required name="stok"
                                                    id="stok" type="number">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Jumlah Beli</p>
                                                <input class="form-control text-center" required name="jumlah"
                                                    id="jumlah" type="number">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Total</p>
                                                <input class="form-control text-center" readonly required name="total"
                                                    id="total" type="number">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" hidden class="col-sm-2 col-form-label">Kode Transaksi</label>
                                    <div class="col-sm-10">
                                        <input type="text" hidden readonly required name="kodetransaksi"
                                            id="kodetransaksi" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div id="formbaru"></div>
                                <div class="text-center mt-3">
                                    <button type="button" value="Tambah" id="tambah" class="btn btn-primary btn-sm"><i
                                            class="fas fa-plus"></i></button>
                                    <button type="button" value="Hapus" id="hapus"
                                        class="btn btn-outline-primary btn-sm"><i class="fas fa-minus"></i></button>
                                </div>
                                <div class="text-center mt-4 mb-3">
                                    <button type="submit" class="btn ripple btn-main-primary active mr-1">Tambah</button>
                                    <a href="/barangkeluar" type="button" class="btn ripple btn-secondary">Batal</a>
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



            let counter = 1
            $('#tambah').click(function() {
                counter++
                let tambahform = `
                <div class="row mb-3">
                                    <label class="">Nama Barang</label>
                                    <div class="form-label">
                                        <select class="form-control select2" required style="width:100%;" name="nama_barang"
                                            class="" id="nama_barang">
                                            <option value="" selected disabled>Pilih Nama Barang</option>
                                            @foreach ($barang as $item)
                                                <option value="{{ $item->id }}" data-harga_jual='{{ $item->hargajual }}''
                                                    data-kodebarang_keluar='{{ $item->kodebarang }}''
                                                    data-merk_keluar='{{ $item->merk }}''
                                                    data-kategoris_id='{{ $item->kategori->kategori }}''>
                                                    {{ $item->namabarang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('nama_barang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="row row-sm text-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <p class="form-label">Kode Barang</p>
                                                <input class="form-control text-center"  required
                                                    name="kodebarang_keluar" type="text" id="kodebarang_keluar">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Merk</p>
                                                <input class="form-control text-center"  required name="merk_keluar"
                                                    id="merk_keluar" type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Harga Jual</p>
                                                <input class="form-control text-center"  required name="harga_jual"
                                                    id="harga_jual" type="number">
                                            </div>

                                              <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Stok</p>
                                                <input class="form-control text-center" readonly required name="stok"
                                                    id="stok" type="number">
                                            </div>

                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Jumlah</p>
                                                <input class="form-control text-center" required name="jumlah"
                                                    id="jumlah" type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Total</p>
                                                <input class="form-control text-center" required name="total"
                                                    id="total" type="text">
                                            </div>

                                        </div>
                                    </div>
                                </div>`
            $('#formbaru').append(tambahform)
            });

            const selection = document.getElementById('nama_barang')
            selection.onchange = function(e) {
                const harga = e.target.options[e.target.selectedIndex].dataset.harga_jual
                const kodebarang = e.target.options[e.target.selectedIndex].dataset.kodebarang_keluar
                const merk = e.target.options[e.target.selectedIndex].dataset.merk_keluar
                const stok = e.target.options[e.target.selectedIndex].dataset.stok
                const kategoris_id = e.target.options[e.target.selectedIndex].dataset.kategoris_id
                document.getElementById('harga_jual').value = harga;
                document.getElementById('kodebarang_keluar').value = kodebarang;
                document.getElementById('stok').value = stok;
                document.getElementById('merk_keluar').value = merk;
                document.getElementById('kategoris_id').value = kategoris_id;
            }
            const selection2 = document.getElementById('nama_barang');
            selection2.onchange = function(e) {
                const harga = e.target.options[e.target.selectedIndex].dataset.harga_jual
                const kodebarang = e.target.options[e.target.selectedIndex].dataset.kodebarang_keluar
                const merk = e.target.options[e.target.selectedIndex].dataset.merk_keluar
                const stok = e.target.options[e.target.selectedIndex].dataset.stok
                const kategoris_id = e.target.options[e.target.selectedIndex].dataset.kategoris_id
                document.getElementById('harga_jual').value = harga;
                document.getElementById('kodebarang_keluar').value = kodebarang;
                document.getElementById('stok').value = stok;
                document.getElementById('merk_keluar').value = merk;
                document.getElementById('kategoris_id').value = kategoris_id;
            }
        </script>




        <script>

        </script>
        {{-- <script>

            let counter = 1
            $('#tambah').click(function() {
                counter++
                let tambahform = `
                <div class="row mb-3">
                                    <label class="">Nama Barang</label>
                                    <div class="form-label">
                                        <select class="form-control select2" required style="width:100%;" name="nama_barang"
                                            class="" id="nama_barang">
                                            <option value="" selected disabled>Pilih Nama Barang</option>
                                            @foreach ($barang as $item)
                                                <option value="{{ $item->id }}" data-harga_jual="{{ $item->hargajual }}"
                                                    data-kodebarang_keluar="{{ $item->kodebarang }}"
                                                    data-merk_keluar="{{ $item->merk }}"
                                                    data-kategoris_id="{{ $item->kategori->kategori }}">
                                                    {{ $item->namabarang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('nama_barang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="row row-sm text-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <p class="form-label">Kode Barang</p>
                                                <input class="form-control text-center" readonly required
                                                    name="kodebarang_keluar" type="text" id="kodebarang_keluar">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Merk</p>
                                                <input class="form-control text-center" readonly required name="merk_keluar"
                                                    id="merk_keluar" type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Harga Jual</p>
                                                <input class="form-control text-center" readonly required name="harga_jual"
                                                    id="harga_jual" type="number">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Jumlah</p>
                                                <input class="form-control text-center" required name="jumlah"
                                                    id="jumlah" type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Total</p>
                                                <input class="form-control text-center" required name="total"
                                                    id="total" type="text">
                                            </div>

                                        </div>
                                    </div>
                                </div>`
            $('#formbaru').append(tambahform)
            });
        </script> --}}

        {{-- <script>
            const selection = document.getElementById('nama_barang')
            selection.onchange = function(e) {
                let kategoris_id = e.target.options[e.target.selectedIndex].dataset.kategoris_id
                kategoris_id = JSON.parse(kategoris_id)
                document.getElementById('kategoris_id').value = `$(kategoris_id.kategoris_id)`;
            }
        </script> --}}
    </body>

    </html>
@endsection
