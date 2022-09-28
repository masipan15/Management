@extends('layout.admin')

@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahbarang" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-25p">Kode Barang</th>
                                    <th class="wd-20p">Nama Barang</th>
                                    <th class="wd-15p">Stok</th>
                                    <th class="wd-20p">Harga</th>
                                    <th class="wd-20p">Harga Jual</th>
                                    <th class="wd-20p">Foto</th>
                                    <th class="wd-20p">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->kodebarang }}</td>
                                        <td>{{ $row->namabarang }}</td>
                                        <td>{{ $row->stok }}</td>
                                        <td>Rp.{{ number_format($row['harga'], 2, '.', '.') }}</td>
                                        <td>Rp.{{ number_format($row['hargajual'], 2, '.', '.') }}</td>
                                        <td>
                                            <img src="{{ asset('fotobarang/' . $row->foto) }}" alt=""
                                                style="width: 50px";>
                                        </td>


                                        <td>
                                            <a href="/editbarang/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i>edit</a><br>
                                            <a href="/deletese/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i>hapus</button></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
