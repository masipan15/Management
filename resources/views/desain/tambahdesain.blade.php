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

    {{-- <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-10"> --}}
                        {{-- <div class="card">
                            <div class="card-body"> --}}
                                <div class="row row-sm">
                                    <div class="col-sm-12 col-lg-12 col-xl-8">
                            
                                        <!--Row-->
                                        <div class="row row-sm  mt-lg-4">
                                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                                <div class="card bg-primary custom-card card-box">
                                                    <div class="card-body p-4">
                                                        <div class="row align-items-center">
                                                            <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                                                <h4 class="d-flex  mb-3">
                                <h1 class="text-center"></h1>



                                <div class="container-fluid">

                                    <div class="row">
                                        <div class="col mt-2">
                                            <form action="/insertdesain" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Permintaan
                                                        Desain</label>
                                                    <input type="text" name="permintaan_desain" class="form-control"
                                                        aria-describedby="emailHelp">
                                                    @error('permintaan_desain')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Harga</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                        <input type="text" name="harga_desain" id="harga_desain"
                                                            class="form-control" aria-describedby="emailHelp">
                                                    </div>
                                                    @error('harga_desain')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Status Pengerjaan</label>
                                                        <input type="text" name="status_pengerjaan" id="status_pengerjaan"
                                                            class="form-control" aria-describedby="emailHelp">
                                                    </div>
                                                    @error('status_pengerjaan')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Tanggal Pemesan</label>
                                                            <input type="text" name="tgl_pemesan_desain"  id="tgl_pemesan_desain"
                                                                class="form-control" aria-describedby="emailHelp">
                                                        </div>
                                                        @error('tgl_pemesan_desain')
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

  
</body>

</html>
@endsection
