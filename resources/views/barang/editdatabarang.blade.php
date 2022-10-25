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

        <div class="row row-sm">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Edit Barang</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/updatebarang/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-sm text-center">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <p class="form-label">Nama Barang</p>
                                            <input class="form-control text-center mb-3" required name="namabarang"
                                                type="text" id="namabarang"  value="{{ $data->namabarang }}">
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="form-label">Kategori</p>
                                            <select name="kategoris_id" id="kategoris_id"
                                                class="form-control text-center mb-3">
                                                <option value disabled selected="">Pilih Kategori
                                                </option>
                                                     @foreach ($kategori as $item)
                                                     <option value="{{ $item->id }}"<?php if ($data->kategoris_id == $item->id) {
                                                         echo 'selected';
                                                     } ?>>
                                                        {{ $item->kategori }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm text-center">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                            <p class="form-label">Merk</p>
                                            <input class="form-control text-center" required name="merk"
                                                type="text" id="merk"  value="{{ $data->merk }}">
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="form-label">Harga Beli</p>
                                            <input class="form-control text-center" required name="harga" id="harga"
                                                type="number"  value="{{ $data->harga }}">
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="form-label">Harga Jual</p>
                                            <input class="form-control text-center" required name="hargajual" id="hargajual"
                                                type="number"  value="{{ $data->hargajual }}">
                                        </div>
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                            <p class="form-label">Stok</p>
                                            <input class="form-control text-center" required name="stok" id="stok"
                                                type="number" readonly value="{{ $data->stok }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <label>Deskripsi</label>
                                <div class="form-label">
                                    <textarea class="form-control select2" required type="text" name="deskripsi"   class="" id="deskripsi">{{$data->deskripsi}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <label>Foto</label>
                                <div class="form-label">
                                    <img class="img mb-3" src="{{ asset('fotobarang/' . $data->foto1) }}"alt=""
                                    style="width: 40px">
                                <input type="file" name="foto1" class="form-control" id="inputEmail3"
                                    value="{{ $data->foto1 }}">
                                </div>
                            </div>


                            {{-- <div id="formbaru"></div>
                            <div class="text-center mt-3">
                                <button type="button" value="Tambah" id="tambah" class="btn btn-primary btn-sm"><i
                                        class="fas fa-plus"></i></button>
                                <button type="button" value="Hapus" id="hapus"
                                    class="btn btn-outline-primary btn-sm"><i class="fas fa-minus"></i></button>
                            </div> --}}
                            <div class="text-center mt-4 mb-3">
                                <button type="submit" class="btn ripple btn-main-primary active mr-1">Simpan</button>
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
            let counter = 1
            $('#tambah').click(function() {
                        counter++
                        let tambahform = `
            <div class="row row-sm text-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <p class="form-label">Nama Barang</p>
                                                <input class="form-control text-center mb-3" required name="namabarang"
                                                    type="text" id="namabarang">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Kategori</p>
                                                <select name="kategoris_id" id="kategoris_id"
                                                    class="form-control text-center mb-3">
                                                    @foreach ($kategori as $item)
    <option selected disabled value="">
                                                            Pilih Kategori</option>
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->kategori }}</option>
    @endforeach

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @error('kategoris_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                                @error('nama_barang')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                                <div class="row row-sm text-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <p class="form-label">Merk</p>
                                                <input class="form-control text-center" required name="merk_keluar"
                                                    type="text" id="merk_keluar">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Harga Beli</p>
                                                <input class="form-control text-center" required name="harga" id="harga"
                                                    type="text">
                                            </div>
                                            <div class="col-lg mg-t-10 mg-lg-t-0">
                                                <p class="form-label">Harga Jual</p>
                                                <input class="form-control text-center" required name="hargajual" id="hargajual"
                                                    type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @error('merk')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                                <div class="row mb-3 mt-3">
                                    <label>Deskripsi</label>
                                    <div class="form-label">
                                        <textarea class="form-control select2" required type="text" name="deskripsi" class="" id="deskripsi"></textarea>
                                    </div>
                                </div>
                                @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                                <div class="row mb-3 mt-3">
                                    <label>Foto</label>
                                    <div class="form-label">
                                        <input type="file" name="foto1" class="form-control" id="foto1">
                                    </div>
                                </div>
                                @error('foto1')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror`
    $('#formbaru').append(tambahform)
            });
        </script>

        </body>

        </html>
@endsection
