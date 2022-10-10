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
                                    <th class="wd-20p">Nama Pemesan</th>
                                    <th class="wd-20p">Permintaan</th>
                                    <th class="wd-25p">Keterangan</th>
                                    <th class="wd-20p">Ukuran</th>
                                    <th class="wd-20p">Status</th>
                                    <th class="wd-20p">Harga</th>
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
                                        <td>{{ $row->namapemesan }}</td>
                                        <td>{{ $row->permintaan }}</td>
                                        <td>{{ $row->keterangan }}</td>
                                        <td>{{ $row->ukuran }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>Rp.{{ number_format($row['harga'], 2, '.', '.') }}</td>
                                        <td>
                                            <a href="/hapuspenyelesaian/{{ $row->id }}" class="btn btn-danger"
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
