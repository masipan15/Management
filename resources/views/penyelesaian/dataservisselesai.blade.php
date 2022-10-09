@extends('layout.admin')

@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <div>
                        {{-- <a href="/tambahbarang" class="btn btn-primary">Tambah</a> --}}
                        <p class="text-muted card-sub-title"></p>
                    </div>

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
                                    <th class="wd-15p">Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->namapelanggan }}</td>
                                        <td>{{ $row->namabarang }}</td>
                                        <td>{{ $row->merk }}</td>
                                        <td>{{ $row->kerusakan }}</td>
                                        <td>Rp.{{ number_format($row['biaya'], 2, '.', '.') }}</td>
                                        <td>
                                            <a href="/hapusservisselesai/{{ $row->id }}" class="btn btn-danger"
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

    @include('sweetalert::alert')
@endsection
