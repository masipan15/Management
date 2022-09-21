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
        <!-- Content Header (Page header) -->
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
                                            <form action="/insertbarangkeluar" method="post"
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
                                                    <label for="" class="form-label">Harga Jual</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                        <input type="text" name="harga_jual" id="harga_jual"
                                                            class="form-control" aria-describedby="emailHelp">
                                                    </div>
                                                    @error('harga_jual')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Jumlah</label>
                                                        <input type="text" name="jumlah" id="jumlah"
                                                            class="form-control" aria-describedby="emailHelp">
                                                    </div>
                                                    @error('jumlah')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Total</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            <input type="text" name="total" readonly id="total"
                                                                class="form-control" aria-describedby="emailHelp">
                                                        </div>
                                                        @error('total')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <button type="submit"
                                                            class="btn btn-success">Tambahkan</button>
                                                        <a href="/barangkeluar" type="button" class="btn btn-danger">
                                                            Batal
                                                        </a>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- /.col -->

                                {{-- <ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
</ol> --}}
                                <!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
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
