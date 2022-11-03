@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahbarangkeluar" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-15p">Tanggal</th>
                                    <th class="wd-20p">Nama Pelanggan</th>
                                    <th class="wd-20p">Nama Barang</th>
                                    <th class="wd-20p">Kode Barang</th>
                                    <th class="wd-20p">Merk</th>
                                    <th class="wd-25p">Harga Jual</th>
                                    <th class="wd-20p">Jumlah Beli</th>
                                    <th class="wd-15p">Total</th>
                                    <th class="wd-15p">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->created_at->format('d/M/Y : H:i') }}</td>
                                        <td>{{ $row->nama_pelanggan ?: 'Pelanggan Umum' }}</td>

                                        <td>{{ $row->namabarangs->namabarang }}</td>
                                        <td>{{ $row->kodebarang_keluar }}</td>
                                        <td>{{ $row->merk_keluar }}</td>

                                        <td>Rp.{{ number_format($row['harga_jual'], 2, '.', '.') }}</td>
                                        <td>{{ $row->jumlah }}</td>
                                        <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>

                                        <td>
                                            <a href="/editbrgklr/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i></a><br>
                                            {{-- <a href="/delete/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i>Hapus</button></a> --}}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tr>
                                <td colspan="7">
                                </td>
                                <td style="font-weight: 900;">SubTotal :</td>
                                <td style="font-weight: 900;">Rp.{{ number_format($subtotal, 2, '.', '.') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection
