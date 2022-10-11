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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



        <title>Edit Data</title>
    </head>

    <body>
        <div class="row row-sm">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Edit Servis</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/updateservis/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_pelanggan" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->nama_pelanggan }}" id="inputEmail3">
                                </div>
                            </div>
                            @if (auth()->user()->role == 'servis')
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Penyervis</label>
                                <div class="col-sm-10">
                                    <input type="text" name="namaservis" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->namaservis }}" id="inputEmail3">
                                </div>
                            </div>
                            @endif
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->nama_barang }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Merek</label>
                                <div class="col-sm-10">
                                    <input type="text" name="merk_barang" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->merk_barang }}" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kerusakan Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kerusakan_barang" class="form-control"
                                        id="exampleInputEmail1" value="{{ $data->kerusakan_barang }}" id="inputEmail3">
                                </div>
                            </div>
                            @if (auth()->user()->role == 'servis')
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Biaya</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="number" name="biaya_pengerjaan" id="biaya_pengerjaan" class="form-control"
                                            id="inputEmail3" value="{{ $data->biaya_pengerjaan }}">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if (auth()->user()->role == 'servis')
                            <div class="row mb-3">
                                <label for="inputEmail3"  class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control"  required style="width:100%;" id="status_pengerjaan" name="status_pengerjaan">
                                        <option disabled value="">Pilih Status Pengerjaan</option>
                                        <option value="Sedang dalam pengerjaan" {{ $data->status_pengerjaan == 'Sedang dalam pengerjaan' ? 'selected' : '' }}>Sedang dalam pengerjaan</option>
                                        <option value="Selesai" {{ $data->status_pengerjaan == 'Selesai' ? 'selected' : 'Selesai' }}>Selesai</option>
                                    </select>
                                </div>
                            </div>
                            @endif
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Foto Servis</label>
                                <div class="col-sm-10">
                                        <img class="img mb-3" src="{{ asset('fotoservis/' . $data->fotos) }}"alt=""
                                    style="width: 40px">
                                <input type="file" name="fotos" class="form-control" id="inputEmail3"
                                    value="{{ $data->fotos }}">
                                </div>
                            </div>
                            {{-- <div class="row mb-3 mt-3">
                                <label>Foto Servis</label>
                                <div class="form-label">
                                    <img class="img mb-3" src="{{ asset('fotoservis/' . $data->fotos) }}"alt=""
                                    style="width: 40px">
                                <input type="file" name="fotos" class="form-control" id="inputEmail3"
                                    value="{{ $data->fotos }}">
                                </div>
                            </div> --}}

                                        <div class="text-center mt-4 mb-3">
                                            <button type="submit"
                                                class="btn ripple btn-main-primary active mr-1">Simpan</button>
                                            <a href="/dataservis" type="button" class="btn ripple btn-secondary">Batal</a>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                    </div>
                    </form>
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
    </body>

    </html>
@endsection
