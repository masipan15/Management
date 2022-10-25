@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-4">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h3 class="main-content-label mb-1">Tambah Barang Keluar</h3>
                        <p class="text-muted card-sub-title"></p>
                    </div>

                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="row row-sm text-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="row row-sm">
                                <div class="col-lg mt-3 mb-3">
                                    <p class="">Nama Pelanggan</p>
                                    <input class="form-control text-center mb-3" required placeholder="Boleh Tidak Diisi"
                                        name="nama_pelanggan" type="text" id="nama_pelanggan">
                                </div>
                                <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                    <p class="">Nama Barang</p>
                                    <select class="ipan_select2 form-control select2" required style="width:100%;"
                                        name="nama_barang" class="" id="nama_barang" @error('nama_barang')  @enderror>
                                        <option value="" selected disabled>Pilih Nama Barang</option>
                                        @foreach ($barang as $item)
                                            <option value="{{ $item->id }}" data-harga_jual="{{ $item->hargajual }}"
                                                data-kodebarang_keluar="{{ $item->kodebarang }}"
                                                data-merk_keluar="{{ $item->merk }}" data-stok="{{ $item->stok }}"
                                                data-kategoris_id="{{ $item->kategori->kategori }}">
                                                {{ $item->namabarang }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                    <p class="">Stok</p>
                                    <input class="form-control text-center mb-3" readonly name="stok" type="number"
                                        id="stok">
                                </div>
                                <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                    <p class="">Harga Jual</p>
                                    <input class="form-control text-center mb-3" readonly name="harga_jual" type="number"
                                        id="harga_jual">
                                </div>
                                <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                    <p class="">Jumlah</p>
                                    <input class="form-control text-center mb-3" required name="jumlah" type="number"
                                        id="jumlah">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mg-t-10 mg-lg-t-0 " hidden>
                            <p class="form-label">Merk</p>
                            <input class="form-control text-center" readonly required name="merk_keluar" id="merk_keluar"
                                type="text">
                        </div>
                        <div class="col-lg mg-t-10 mg-lg-t-0"hidden>
                            <p class="form-label">Kode Barang</p>
                            <input class="form-control text-center" readonly required name="kodebarang_keluar"
                                id="kodebarang_keluar" type="text">
                        </div>

                        <div class="col-lg mg-t-10 mg-lg-t-0"hidden>
                            <p class="form-label">Total</p>
                            <input class="form-control text-center" readonly required name="total" id="total"
                                type="number">
                        </div>


                        {{-- <div class="col-lg mg-t-10 mg-lg-t-0">
                                <p class="form-label">Jumlah Beli</p>
                                <input class="form-control text-center" required name="jumlah" id="jumlah"
                                    type="number">
                            </div> --}}
                    </div>

                    <div class="text-center mt-3">
                        <button type="button" value="Tambah" id="proses"
                            class="btn btn-primary btn-sm mb-3 tambah_data"><i class="fas fa-plus"></i></button>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table" id="example1">
                                <thead>
                                    <tr>
                                        <th class="wd-20p">No</th>

                                        <th class="wd-20p">Kode Transaksi</th>
                                        <th class="wd-20p">Nama Pelanggan</th>
                                        <th class="wd-20p">Nama Barang</th>
                                        <th class="wd-20p">Kode Barang</th>
                                        <th class="wd-20p">Merk</th>
                                        <th class="wd-25p">Harga Jual</th>
                                        <th class="wd-20p">Jumlah Beli</th>
                                        <th class="wd-15p">Total</th>
                                        <th class="wd-15p">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                            <div class="col-lg mg-t-10 mg-lg-t-0-ipan mb-3">
                                <p class="form-label">Total Harga</p>
                                <input class="form-control text-center" readonly required name="total" id="total"
                                    type="number">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0-ipan mb-3">
                                <p class="form-label">Total Pembayaran</p>
                                <input class="form-control text-center" required name="total" id="total"
                                    type="number">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0-ipan mb-3">
                                <p class="form-label">Kembalian</p>
                                <input class="form-control text-center" readonly required name="total" id="total"
                                    type="number">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0-ipan mb-3">
                                <a href="#" class="btn btn-info" @click.prevent="printme"><i
                                        class="fas fa-print"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ asset('acstemplate/assets/plugins/select2/js/select2.min.js') }}"></script>



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
        const selection2 = document.getElementById('nama_barang');
        selection2.onchange = function(e) {
            const harga = e.target.options[e.target.selectedIndex].dataset.harga_jual
            const kodebarang = e.target.options[e.target.selectedIndex].dataset.kodebarang_keluar
            const merk = e.target.options[e.target.selectedIndex].dataset.merk_keluar
            const stok = e.target.options[e.target.selectedIndex].dataset.stok

            document.getElementById('harga_jual').value = harga;
            document.getElementById('kodebarang_keluar').value = kodebarang;
            document.getElementById('stok').value = stok;
            document.getElementById('merk_keluar').value = merk;

        }
    </script>

    <script type="text/javascript">
        $(".ipan_select2").select2({
            placeholder: "Pilih Barang",

        });
    </script>


    <script>
        $(document).ready(function() {
            read();
            var i = 0;
            i < alphabet.length;
            i++
            var a = alphabet[i],
                b = i.toString(36);
            back[a] = b;
            forth[b] = a;


            function read() {
                $.ajax({
                    type: "get",
                    url: "/read",
                    dataType: "json",
                    success: function(response) {
                        $('tbody').html("");
                        $.each(response.data, function(key, item) {
                            $('tbody').append(
                                ' <tr><th class="wd-20p">' + item.id +
                                '</th>\
                                                                                                                                                                                                                                <td class="wd-20p">' +
                                item
                                .kodetransaksi +
                                '</td>\
                                                                                                                                                                                                                                <td class="wd-20p">' +
                                item.nama_pelanggan +
                                '</td>\
                                                                                                                                                                                                                                    <td class="wd-20p">' +
                                item
                                .namabarangs.namabarang +
                                '</td>\
                                                                                                                                                                                                                                    <td class="wd-20p">' +
                                item
                                .kodebarang_keluar +
                                '</td>\
                                                                                                                                                                                                                                    <td class="wd-20p">' +
                                item
                                .merk_keluar +
                                '</td>\
                                                                                                                                                                                                                                    <td class="wd-20p">Rp.' +
                                item
                                .harga_jual +
                                '</td>\
                                                                                                                                                                                                                                    <td class="wd-20p">' +
                                item
                                .jumlah +
                                '</td>\
                                                                                                                                                                                                                                    <td class="wd-20p">' +
                                item
                                .total +
                                '</td>\
                                                                                                                                                <td><button type="button" id="delete"  value="' +
                                item
                                .id +
                                '" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td></tr>'

                            );
                        });
                    }

                });

            }
            $('#proses').click(function(e) {
                e.preventDefault();
                // console.log('ipanganteng');
                var data = {
                    'kode_transaksi': $('#kode_transaksi').val(),
                    'nama_barang': $('#nama_barang').val(),
                    'nama_pelanggan': $('#nama_pelanggan').val(),
                    'kodebarang_keluar': $('#kodebarang_keluar').val(),
                    'merk_keluar': $('#merk_keluar').val(),
                    'stok': $('#stok').val(),
                    'jumlah': $('#jumlah').val(),
                    'total': $('#total').val(),
                    'harga_jual': $('#harga_jual').val(),
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/insertbrgklr",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        read();
                        // console.log(response);

                    }
                });
            });
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var id_delete = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "delete",
                    url: "/deletebarangkeluar/" + id_delete,
                    success: function(response) {
                        read();
                    }
                });
            });


        });
    </script>
@endsection
