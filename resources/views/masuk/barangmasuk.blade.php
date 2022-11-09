@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahbarangmasuk" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-1p">No</th>
                                    <th class="wd-20p">Tanggal</th>
                                    <th class="wd-25p">Nama Supplier</th>
                                    <th class="wd-20p">Nama Barang</th>
                                    <th class="wd-20p">Kategori</th>
                                    <th class="wd-20p">Merk</th>
                                    <th class="wd-25p">Jumlah Beli</th>
                                    <th class="wd-20p">Harga</th>
                                    <th class="wd-15p">Total</th>
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
                                        <td>{{ $row->created_at->format('d/M/Y-H:i') }}</td>
                                        <td>{{ $row->supplier ? $row->supplier->nama_supplier : 'Data Tidak Ada' }}</td>
                                        <td>{{ $row->namabarang ? $row->namabarang->namabarang : 'Data Tidak Ada' }}</td>
                                        <td>{{ $row->kategoris_id }}</td>
                                        <td>{{ $row->merk }}</td>
                                        <td>{{ $row->jumlah }}</td>
                                        <td>Rp.{{ number_format($row['harga'], 2, '.', '.') }}</td>
                                        <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>
                                        <td>
                                            <a href="/deletedatabarangmasuk/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="7">
                                    </td>
                                    <td style="font-weight: 900;">SubTotal :</td>
                                    <td style="font-weight: 900;">Rp.{{ number_format($subtotal, 2, '.', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('sweetalert::alert')
@endsection
