@extends('layout.admin')

@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahservis" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-20p">Nama Pelanggan</th>
                                    <th class="wd-20p">Nama Barang</th>
                                    <th class="wd-25p">Merk</th>
                                    <th class="wd-20p">Kerusakan</th>
                                    <th class="wd-15p">Status</th>
                                    <th class="wd-20p">Biaya</th>
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
                                        <td>{{ $row->nama_pelanggan }}</td>
                                        <td>{{ $row->nama_barang }}</td>
                                        <td>{{ $row->merk_barang }}</td>
                                        <td>{{ $row->kerusakan_barang }}</td>
                                        <td>{{ $row->status_pengerjaan }}</td>
                                        <td>Rp.{{ number_format($row['biaya_servis'], 2, '.', '.') }}</td>

                                        <td>
                                            <a href="/editservis/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i>edit</a><br>
                                            <a href="/deletet/{{ $row->id }}" class="btn btn-danger"
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
