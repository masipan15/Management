@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <h3 class="main-content-label mb-1">Laporan Barang Keluar</h3>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <form action="/laporanbarangkeluar" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="form-group row">
                                        <label for="date" class="col-form-label col-sm-2">Cari Tanggal Dari</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control input-sm" id="mulai"
                                                name="mulai">
                                        </div>
                                        <label for="date" class="col-form-label col-sm-2">Cari Tanggal
                                            Sampai</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control input-sm" id="akhir"
                                                name="akhir">
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-danger" type="submit" name="search" title="Search">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
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


                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->created_at->translatedFormat('l/d/F/Y : H:i') }}</td>
                                        <td>{{ $row->nama_pelanggan ?: 'Pelanggan Umum' }}</td>

                                        <td>{{ $row->namabarangs->namabarang }}</td>
                                        <td>{{ $row->kodebarang_keluar }}</td>
                                        <td>{{ $row->merk_keluar }}</td>

                                        <td>Rp.{{ number_format($row['harga_jual'], 2, '.', '.') }}</td>
                                        <td>{{ $row->jumlah }}</td>
                                        <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>


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
