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

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-center">Tambah Barang Keluar</h1>



                                <div class="container-fluid">

                                    <div class="row">
                                        <div class="col mt-2">
                                            <form action="/insertservis" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nama
                                                        Barang</label>
                                                    <input type="text" name="nama_barang" class="form-control"
                                                        aria-describedby="emailHelp">
                                                    @error('nama_barang')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Merek</label>
                                                        <input type="text" name="merk_barang" id="merk_barang"
                                                            class="form-control" aria-describedby="emailHelp">
                                                    </div>
                                                    @error('merk_barang')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Kerusakan Barang</label>
                                                        <input type="text" name="kerusakan_barang" id="kerusakan_barang"
                                                            class="form-control" aria-describedby="emailHelp">
                                                    </div>
                                                    @error('kerusakan_barang')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Status Pengerjaan</label>
                                                            <input type="text" name="status_pengerjaan"  id="status_pengerjaan"
                                                                class="form-control" aria-describedby="emailHelp">
                                                        </div>
                                                        @error('status_pengerjaan')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Biaya Servis</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="text" name="biaya_servis"  id="biaya_servis"
                                                                class="form-control" aria-describedby="emailHelp">
                                                        </div>
                                                        @error('biaya_servis')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <button type="submit"
                                                            class="btn btn-success">Tambahkan</button>
                                                        <a href="/dataservis" type="button" class="btn btn-danger">
                                                            Batal
                                                        </a>
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
</body>

</html>