 
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


const selection = document.getElementById('nama_barang')
selection.onchange = function(e) {
    const harga = e.target.options[e.target.selectedIndex].dataset.harga_jual
    const kodebarang = e.target.options[e.target.selectedIndex].dataset.kodebarang_keluar
    const merk = e.target.options[e.target.selectedIndex].dataset.merk_keluar
    const kategoris_id = e.target.options[e.target.selectedIndex].dataset.kategoris_id
    document.getElementById('harga_jual').value = harga;
    document.getElementById('kodebarang_keluar').value = kodebarang;
    document.getElementById('merk_keluar').value = merk;
    document.getElementById('kategoris_id').value = kategoris_id;
}

let counter = 1
$('#tambah').click(function() {
    counter++
    let tambahform =
    `<div class="row mb-3">
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
