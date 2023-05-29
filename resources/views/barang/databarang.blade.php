@extends('layout.admin')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <div class="row row-sm mt-3">
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
                                            <a href="{{ asset('fotobarang/' . $row->foto1) }}" data-lightbox=""
                                                button="close"> <img src="{{ asset('fotobarang/' . $row->foto1) }}"
                                                    class="img-fluid" alt="" style="width: 50px";></a>
                                        </td>
                                        <td>{{ $row->kodebarang }}</td>
                                        <td>{{ $row->namabarang }}</td>
                                        <td>{{ $row->merk }}</td>
                                        <td>{{ $row->kategori ? $row->kategori->kategori : 'Data Tidak Ada' }}</td>
                                        <td>{{ $row->stok }}</td>
                                        <td>Rp.{{ number_format($row['harga'], 2, '.', '.') }}</td>
                                        <td>Rp.{{ number_format($row['hargajual'], 2, '.', '.') }}</td>
                                        <td><a href="#/{{ $row->id }}"
                                                value="{{ route('show', ['id' => $row->id]) }}" class="modalMd"
                                                title="Lihat Deskripsi Barang" data-toggle="modal"
                                                data-target="#modalMd{{ $row->id }}"><i
                                                    class="fas fa-eye text-success  fa-lg"></i>
                                            </a></a>


                                        <td>
                                            <a href="/editbarang/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i></a><br>
                                            <a href="/deletese/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i></button></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modalMd{{ $row->id }}" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    Deskripsi
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        <h4 class="modal-title" id="modalMdTitle"></h4>
                                                    </button>
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
    <script>
        $(document).ready(function(e) {

            if ("{{ session('error') }}") {
                Swal.fire({
                    icon: 'error',
                    title: "{{ session('error') }}",

                })
            }

        });
    </script>

    @include('sweetalert::alert')
@endsection
