@extends('layout.admin')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




    <body>
        <div class="row row-sm mt-3">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Edit Desain</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/updatedesainselesai/{{ $data->id }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @if (auth()->user()->role == 'admin')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama
                                        Pemesan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_pemesan" class="form-control"
                                            id="exampleInputEmail1" value="{{ $data->nama_pemesan }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama
                                        Pemesan</label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="nama_pemesan" class="form-control" readonly
                                            id="exampleInputEmail1" value="{{ $data->nama_pemesan }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama
                                        Pendesain</label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="namapedesain" class="form-control"
                                            id="exampleInputEmail1" value="{{ $data->namapedesain }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'admin')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ukuran
                                        Desain</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="ukuran_desain" class="form-control"
                                            id="exampleInputEmail1" value="{{ $data->ukuran_desain }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ukuran
                                        Desain</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly name="ukuran_desain" class="form-control"
                                            id="exampleInputEmail1" value="{{ $data->ukuran_desain }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Permintaan
                                        Desain</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly name="permintaan_desain" class="form-control"
                                            id="exampleInputEmail1" value="{{ $data->permintaan_desain }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'admin')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Permintaan
                                        Desain</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="permintaan_desain" class="form-control"
                                            id="exampleInputEmail1" value="{{ $data->permintaan_desain }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'admin')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                            value="{{ $data->keterangan }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly name="keterangan" class="form-control"
                                            id="exampleInputEmail1" value="{{ $data->keterangan }}" id="inputEmail3">
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            <input type="number" name="harga_desain" id="harga_desain"
                                                class="form-control" id="inputEmail3" value="{{ $data->harga_desain }}">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" required style="width:100%;" id="status_pengerjaan"
                                            name="status_pengerjaan">
                                            <option disabled value="">Pilih Status Pengerjaan</option>
                                            <option value="">
                                                {{ $data->status_pengerjaan == 'null' ? 'selected' : '' }}
                                                Belum Dikerjakan</option>
                                            <option value="Sedang dalam pengerjaan"
                                                {{ $data->status_pengerjaan == 'Sedang dalam pengerjaan' ? 'selected' : '' }}>
                                                Sedang dalam pengerjaan</option>
                                            <option value="Selesai"
                                                {{ $data->status_pengerjaan == 'Selesai' ? 'selected' : 'Selesai' }}>
                                                Selesai
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            @if (auth()->user()->role == 'desain')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Hasil Desain</label>
                                    <div class="col-sm-10">
                                        <img class="img mb-3"
                                            src="{{ asset('fotodesain/' . $data->fotod) }}"alt=""
                                            style="width: 40px">
                                        <input type="file" name="fotod" class="form-control" id="inputEmail3"
                                            value="{{ $data->fotod }}">
                                    </div>
                                </div>
                            @endif
                            <div class="text-center mt-4 mb-3">
                                <button type=" submit" class="btn ripple btn-main-primary active mr-1">Simpan</button>
                                <a href="/datadesain" type="button" class="btn ripple btn-secondary">Batal</a>
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
