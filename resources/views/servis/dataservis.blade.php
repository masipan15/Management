@extends('layout.admin')
@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    @if (auth()->user()->role == 'admin')
                        <div>
                            <a href="/tambahservis" class="btn btn-primary">Tambah</a>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-20p">Tanggal</th>
                                    <th class="wd-15p">Status</th>
                                    <th class="wd-20p">Foto Barang</th>
                                    <th class="wd-20p">Nama Pelanggan</th>
                                    <th class="wd-20p">Nama Barang</th>
                                    <th class="wd-20p">Detail</th>
                                    <th class="wd-20p">Kerusakan Barang</th>
                                    <th class="wd-15p">Biaya</th>

                                    <th class="wd-20p">Aksi</th>
                                    <th class="wd-20p">Cetak</th>
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
                                        @if ($row->status_pengerjaan == 'Selesai')
                                            <td>
                                                <span class="badge badge-pill badge-success ">Selesai</span>
                                            </td>
                                        @elseif ($row->status_pengerjaan == 'Sedang dalam pengerjaan')
                                            <td>
                                                <span class="badge badge-pill badge-warning ">Sedang Dalam Pengerjaan</span>
                                            </td>
                                        @else
                                            <td>
                                                <span class="badge badge-pill badge-danger ">Belum Dikerjakan</span>
                                            </td>
                                        @endif
                                        <td>
                                            <a href="{{ asset('fotoservis/' . $row->fotos) }}" data-lightbox="">
                                                <img src="{{ asset('fotoservis/' . $row->fotos) }}" alt=""
                                                    class="img-fluid" style="width: 50px";></a>
                                        </td>
                                        <td>{{ $row->nama_pelanggan }}</td>
                                        <td>{{ $row->nama_barang }}</td>
                                        <td><a href="#/{{ $row->id }}" value="{{ route('show', ['id' => $row->id]) }}"
                                                class="modalMd" title="Lihat Deskripsi Barang" data-toggle="modal"
                                                data-target="#modalMd{{ $row->id }}"><i
                                                    class="fas fa-eye text-success  fa-lg"></i>
                                            </a></a>
                                        <td>{{ $row->kerusakan_barang }}</td>
                                        <td>Rp.{{ number_format($row['biaya_pengerjaan'], 2, '.', '.') }}</td>
                                        <td>
                                            <a href="/editservis/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i></a><br>

                                            @if (auth()->user()->role == 'admin')
                                                <a href="/deletet/{{ $row->id }}" class="btn btn-danger"
                                                    onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                        class="fas fa-trash-alt"></i></button></a>

                                                {{-- <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $row->id }}"data-nama="{{ $row->nama }}">Hapus</a> --}}
                                        </td>
                                        <td>
                                            <a href="/shiftdataservis/{{ $row->id }}" target="_blank"
                                                class="btn btn-info mb-1"><i class="fas fa-print"></i></a><br>

                                        </td>
                                @endif
                                </tr>
                                <div class="modal fade" id="modalMd{{ $row->id }}" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header"><b>Detail: </b>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    <h4 class="modal-title" id="modalMdTitle"></h4>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modalError"></div>
                                                <div id="content"><b>Penyervis: </b><br>
                                                    {{ $row->namaservis }}
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modalError"></div>
                                                <div id="content"><b>Merk: </b><br>
                                                    {{ $row->merk_barang }}
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

    @include('sweetalert::alert')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin Mau Hapus?",
                    text: "Kamu Akan Menghapus Data dengan nama " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Data Berhasil Di hapus", {
                            icon: "success",
                        });
                        window.location = "/deletet/" + id + ""
                    } else {
                        swal("Data Tidak Jadi Di hapus");
                    }
                });
        });
    </script>

    <script>
        $(document).on('ajaxComplete ready', function() {
            $('.modalMd').off('click').on('click', function() {
                $('#content').load($(this).attr('value'));
                $('#modalMdTitle').html($(this).attr('title'));
            });
        });
    </script>
@endsection
