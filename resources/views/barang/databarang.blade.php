@extends('layout.admin')

@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <div>
                            <a href="/tambahbarang" class="btn btn-primary">Tambah</a>
                            <p class="text-muted card-sub-title"></p>
                        </div>

                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-20p">Foto</th>
                                    <th class="wd-25p">Kode Barang</th>
                                    <th class="wd-20p">Nama Barang</th>
                                    <th class="wd-15p">Merk</th>
                                    <th class="wd-25p">Kategori Barang</th>
                                    <th class="wd-15p">stok</th>
                                    <th class="wd-20p">Harga Beli</th>
                                    <th class="wd-20p">Harga Jual</th>
                                    <th class="wd-15p">Deskripsi</th>
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
                                        <td>
                                            <img src="{{ asset('fotobarang/' . $row->foto1) }}" alt=""
                                                style="width: 50px";>
                                        </td>
                                        <td>{{ $row->kodebarang }}</td>
                                        <td>{{ $row->namabarang }}</td>
                                        <td>{{ $row->merk }}</td>
                                        <td>{{ $row->kategori ? $row->kategori->kategori : 'Data Tidak Ada' }}</td>
                                        <td>{{ $row->stok }}</td>
                                        <td>Rp.{{ number_format($row['harga'], 2, '.', '.') }}</td>
                                        <td>Rp.{{ number_format($row['hargajual'], 2, '.', '.') }}</td>
                                        <td>{{ $row->deskripsi }}


                                        <td>
                                            <a href="/editbarang/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i>edit</a><br>
                                            <a href="/deletese/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i>hapus</button></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modalMd" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    {{ $row->namabarang }}
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="modalMdTitle"></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modalError"></div>
                                                    <div id="modalMdContent">
                                                        {{ $row->deskripsi }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('ajaxComplete ready', function() {
            $('.modalMd').off('click').on('click', function() {
                $('#modalMdContent').load($(this).attr('value'));
                $('#modalMdTitle').html($(this).attr('title'));
            });
        });
    </script>
    @include('sweetalert::alert')
@endsection
