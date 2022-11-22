@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-4">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h3 class="main-content-label mb-1">Tambah Barang Masuk</h3>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <form action="shiftbarangmasuk" method="POST" enctype="multipart/form-data">
                        @csrf
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="row row-sm text-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="row row-sm">
                                    <div class="col-lg mt-3 mb-3">
                                        <p class="">Nama Supplier</p>
                                        <select class="ipan_select2 form-control select2" style="width:100%;"
                                            name="suppliers_id" class="" id="suppliers_id"
                                            @error('suppliers_id')  @enderror>
                                            <option value disabled selected="">Pilih Supplier</option>
                                            @foreach ($supplier as $p)
                                                <option value="{{ $p->id }}">{{ $p->nama_supplier }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                        <p class="">Nama Barang</p>
                                        <select class="ipan_select3 form-control select2" style="width:100%;"
                                            name="barangs_id" class="" id="barangs_id"
                                            @error('barangs_id')  @enderror>
                                            <option value="" selected disabled>Pilih Nama Barang</option>
                                            @foreach ($barang as $item)
                                                <option value="{{ $item->id }}" data-merk="{{ $item->merk }}"
                                                    data-harga="{{ $item->harga }}"
                                                    data-kodebarang_id="{{ $item->kodebarang }}"
                                                    data-stok="{{ $item->stok }}"
                                                    data-kategoris_id="{{ $item->kategori->kategori }}">
                                                    {{ $item->namabarang }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                        <p class="">Harga Beli</p>
                                        <input class="form-control text-center mb-3" readonly name="harga" type="number"
                                            id="harga">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                        <p class="">Stok Awal</p>
                                        <input class="form-control text-center mb-3" readonly name="stok" type="number"
                                            id="stok">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                        <p class="">Jumlah Beli</p>
                                        <input class="form-control text-center mb-3"min="1" name="jumlah"
                                            type="number" id="jumlah">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0 ">
                                <p class="form-label">Merk</p>
                                <input class="form-control text-center" readonly name="merk" id="merk"
                                    type="text">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                <p class="form-label">Kode Barang</p>
                                <input class="form-control text-center" readonly name="kodebarang_id" id="kodebarang_id"
                                    type="number">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                <p class="form-label">Kategori</p>
                                <input class="form-control text-center" readonly name="kategoris_id" id="kategoris_id"
                                    type="text">
                            </div>

                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                <p class="form-label">Total</p>
                                <input class="form-control text-center" readonly name="total" id="total"
                                    type="number">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="button" value="Tambah" id="proses"
                                class="btn btn-primary btn-sm mb-3 tambah_data"><i class="fas fa-plus"></i></button>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-20p">Nama Supplier</th>
                                    <th class="wd-20p">Nama Barang</th>
                                    <th class="wd-20p">Kode Barang</th>
                                    <th class="wd-20p">Kategori</th>
                                    <th class="wd-20p">Merk</th>
                                    <th class="wd-20p">Harga</th>
                                    <th class="wd-20p">Jumlah</th>
                                    <th class="wd-20p">Total</th>
                                    <th class="wd-20p">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>


                        <div class="col-lg mg-t-10 mg-lg-t-0-ipan mb-3">
                            <button class="btn btn-info" type="submit">Tambahkan</button>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ asset('acstemplate/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="../js/printpage.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(".ipan_select2").select2({
            placeholder: "Pilih Supplier",

        });
        $(".ipan_select3").select2({
            placeholder: "Pilih Barang",

        });
    </script>

    <!-- Menjumlah total with js  -->
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
            const kodebarang_id = e.target.options[e.target.selectedIndex].dataset.kodebarang_id
            const stok = e.target.options[e.target.selectedIndex].dataset.stok
            document.getElementById('merk').value = merk;
            document.getElementById('harga').value = harga;
            document.getElementById('kategoris_id').value = kategoris_id;
            document.getElementById('kodebarang_id').value = kodebarang_id;
            document.getElementById('stok').value = stok;
        }
    </script>

    <!-- Form Select 2  -->


    <!-- CRUD With AJAX  -->
    <script>
        $(document).ready(function() {
            readbarangmasuk()

            function readbarangmasuk() {
                $.ajax({
                    type: "get",
                    url: "readbarangmasuk",
                    dataType: "json",
                    success: function(response) {
                        $('tbody').html("");
                        $.each(response.data, function(key, item) {
                            $('tbody').append(
                                ' <tr>\
                                                                                                                                                                                                                                                                                                                                                                     <th class = "wd-20p" > ' +
                                (
                                    key +
                                    1) +

                                '</th>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <td class="wd-20p">' +
                                item.supplier.nama_supplier +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              P                  <td class="wd-20p">' +
                                item
                                .barang.namabarang +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td class="wd-20p">' +
                                item
                                .kodebarang_id +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td class="wd-20p">' +
                                item
                                .kategoris_id +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td class="wd-20p">' +
                                item
                                .merk +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td class="wd-20p">Rp.' +
                                item
                                .harga +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td class="wd-20p">' +
                                item
                                .jumlah +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td class="wd-20p">' +
                                item
                                .total +
                                '</td>\
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <td><button type="button" id="delete" data-total="' +
                                item.total + '"  value="' +
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
                    'suppliers_id': $('#suppliers_id').val(),
                    'merk': $('#merk').val(),
                    'barangs_id': $('#barangs_id').val(),
                    'kategoris_id': $('#kategoris_id').val(),
                    'kodebarang_id': $('#kodebarang_id').val(),
                    'jumlah': $('#jumlah').val(),
                    'total': $('#total').val(),
                    'harga': $('#harga').val(),
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/prosestambah",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        if (response.errors) {
                            console.log(response)
                            Swal.fire({
                                icon: 'error',
                                title: response.errors[Object.keys(response.errors)[0]][
                                    0
                                ],
                            })
                        }

                        readbarangmasuk();
                    }

                });
                document.getElementById('jumlah').value = ("");
                document.getElementById('barangs_id')
                    .value = ("");
                document.getElementById('merk').value = ("");
                document.getElementById(
                    'kategoris_id').value = ("");
                document.getElementById('kodebarang_id').value = (
                    "");
                document.getElementById('total').value = ("");
                document.getElementById('harga').value =
                    (
                        "");
                document.getElementById('stok').value = ("");
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
                    type: "get",
                    url: "/deletee/" + id_delete,
                    success: function(response) {
                        readbarangmasuk();
                    }
                });
            });


        });
    </script>
@endsection
