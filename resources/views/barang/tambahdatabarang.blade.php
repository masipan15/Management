@extends('layout.admin')

@section('content')



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" red="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="red">


<div class="row row-sm mt-3">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div>
                    <h3 class="main-content-label mb-1 mt-3">Tambah Barang</h3>
                    <p class="text-muted card-sub-title"></p>
                </div>
                <form action="/insertbarang" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row row-sm text-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="row row-sm">
                                <div class="col-lg mt-3 mb-3">
                                    <p class="">Kode Barang</p>
                                    <input class="form-control text-center mb-3" readonly placeholder="Otomatis" required name="kodebarang[]" type="text" id="kodebarang">
                                </div>
                                @error('kodebarang')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                    <p class="">Nama Barang</p>
                                    <input class="form-control text-center mb-3" required name="namabarang[]" type="text" id="namabarang">
                                </div>
                                @error('namabarang')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                    <p class="">Kategori</p>
                                    <select name="kategoris_id[]" @error('kategoris_id') @enderror id="kategoris_id" class="form-control text-center mb-3">
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->kategori }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @error('kategoris_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-lg-12 col-md-12">
                            <div class="row row-sm">
                                <div class="col-lg">
                                    <p class="">Merk</p>
                                    <input class="form-control text-center" required name="merk[]" type="text" id="merk">
                                </div>
                                @error('merk')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <p class="">Harga Beli</p>
                                    <input class="form-control text-center" required name="harga[]" id="harga" type="number">
                                </div>
                                @error('harga')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <p class="">Harga Jual</p>
                                    <input class="form-control text-center" required name="hargajual[]" id="hargajual" type="number">
                                </div>
                                @error('hargajual')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-lg mg-t-10 mg-lg-t-0" hidden>
                                    <p class="">Laba</p>
                                    <input class="form-control text-center" required name="laba[]" id="laba" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                            <label>Deskripsi</label>
                            <div class="">
                                <textarea class="form-control select2" required type="text" name="deskripsi[]" class="" id="deskripsi"></textarea>
                            </div>
                        </div>
                        @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="row mb-3">
                            <label>Foto</label>
                            <div class="">
                                <input type="file" required name="foto1[]" class="form-control" id="foto1">
                            </div>
                        </div>
                        @error('foto1')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="text-center mt-3">
                        <button type="button" value="Tambah" id="tambah" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus"></i></button>
                        <button type="button" value="Hapus" id="hapus" class="btn btn-outline-primary btn-sm mb-3"><i class="fas fa-minus"></i></button>
                    </div>
                    <div id="formbaru"></div>
                    <div class="text-center mt-4 mb-3">
                        <button $page type="submit" class="btn ripple btn-main-primary active mr-1">Tambah</button>
                        <a href="/databarang" type="button" class="btn ripple btn-secondary">Batal</a>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<script>
    let counter = 1
    $('#tambah').click(function() {
        counter++
        let tambahform = `
            <div class="row row-sm text-center" id="formbaruipan">
                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="row row-sm mt-3">
                            <div class="col-lg mt-3 mb-3">
                                <p class="">Kode Barang</p>
                                <input class="form-control text-center mb-3" readonly placeholder="Otomatis" required name="kodebarang[]"
                                    type="text" id="kodebarang">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                                <p class="">Nama Barang</p>
                                <input class="form-control text-center mb-3"  required name="namabarang[]"
                                    type="text" id="namabarang">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                        <p class="">Kategori</p>
                        <select name="kategoris_id[]" id="kategoris_id"
                            class="form-control text-center mb-3">
                            @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->kategori }}</option>
                            @endforeach

                        </select>
                        </div>
                    </div>
                </div>


                    <div class="col-lg-12 col-md-12">
                        <div class="row row-sm">
                            <div class="col-lg">
                                <p class="">Merk</p>
                                <input class="form-control text-center" required name="merk[]"
                                    type="text" id="merk">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                <p class="">Harga Beli</p>
                                <input class="form-control text-center" required name="harga[]" id="harga"
                                    type="number">
                            </div>
                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                <p class="">Harga Jual</p>
                                <input class="form-control text-center" required name="hargajual[]" id="hargajual"
                                    type="number">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg mg-t-10 mg-lg-t-0 mt-3 mb-3">
                        <label>Deskripsi</label>
                        <div class="">
                            <textarea class="form-control select2" required type="text" name="deskripsi[]" class="" id="deskripsi"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3 mt-3">
                        <label>Foto</label>
                        <div class="">
                            <input type="file" required name="foto1[]" class="form-control" id="foto1" >
                        </div>
                    </div>
                </div>`

        $('#formbaru').append(tambahform)
    });

    $('#hapus').click(function() {
        if (counter == 1) {
            swal.fire("!Perhatian", "input sudah tidak bisa dihapus lagi")
        }
        $('#formbaruipan').remove()
        counter--
    });
</script>
<script>
    $(document).ready(function() {
        $("#hargajual").change(function() {
            var harga = $("#harga").val();
            var hargajual = $("#hargajual").val();
            var laba =hargajual - harga
            $("#laba").val(laba);
        });
    });
    $("#hargajual").keyup(function() {
        var harga = $("#harga").val();
        var hargajual = $("#hargajual").val();
        var laba = hargajual -harga
        $("#laba").val(laba);
    });
</script>

</body>

</html>
@endsection