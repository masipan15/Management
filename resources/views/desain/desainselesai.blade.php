@extends('layout.admin')
@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    @if (auth()->user()->role == 'admin')
                        <div>
                            <a href="/tambahdesain" class="btn btn-primary">Tambah</a>
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
                                    <th class="wd-20p">Hasil Desain</th>
                                    <th class="wd-25p">Nama Pemesan</th>
                                    <th class="wd-25p">Permintaan Desain</th>
                                    <th class="wd-20p">Detail</th>
                                    <th class="wd-20p">Harga Desain</th>
                                    <th class="wd-20p">Aksi</th>
                                    @if (auth()->user()->role == 'admin')
                                        <th class="wd-20p">Cetak</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->created_at->format('d/m/y') }}</td>

                                        <td class="text-center">
                                            @if ($row->status_pengerjaan == 'Selesai')
                                                <span class="badge badge-pill badge-success ">Selesai</span>
                                            @elseif ($row->status_pengerjaan == 'Sedang dalam pengerjaan')
                                                <span class="badge badge-pill badge-warning ">Sedang Dalam Pengerjaan</span>
                                            @else
                                                <span class="badge badge-pill badge-danger  ">Belum Dikerjakan</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ asset('storage/' . $row->fotod) }}" data-lightbox=""
                                                button="close">
                                                <img src="{{ asset('storage/' . $row->fotod) }}" class="img-fluid"
                                                    alt="" style="width: 50px";></a>
                                        </td>
                                        <td>{{ $row->nama_pemesan }}</td>
                                        <td>{{ $row->permintaan_desain }}</td>
                                        <td><a href="#/{{ $row->id }}" value="{{ route('show', ['id' => $row->id]) }}"
                                            class="modalMd" title="Lihat Deskripsi Barang" data-toggle="modal"
                                            data-target="#modalMd{{ $row->id }}"><i
                                                class="fas fa-eye text-success  fa-lg"></i>
                                        </a></a>
                                        </td>
                                        <td>Rp.{{ number_format($row['harga_desain'], 2, '.', '.') }}</td>


                                        <td>
                                            <a href="/editdesainselesai/{{ $row->id }}"
                                                class="btn btn-success mb-1"><i class="fas fa-pencil-alt"></i></a><br>

                                            @if (auth()->user()->role == 'admin')
                                                <a href="/deletes/{{ $row->id }}" class="btn btn-danger"
                                                    onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                        class="fas fa-trash-alt"></i></button></a>
                                        </td>
                                        <td>
                                            <a href="shiftdesainselesai/{{ $row->id }}" target="_blank"
                                                class="btn btn-success mb-1"><i class="fas fa-print"></i></a><br>

                                        </td>
                                @endif
                                </tr>
                                <div class="modal fade" id="modalMd{{ $row->id }}" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header"><b>Detail:</b>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    <h4 class="modal-title" id="modalMdTitle"></h4>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modalError"></div>
                                                <div id="content"><b>keterangan: </b><br>
                                                    {{ $row->keterangan }}
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modalError"></div>
                                                <div id="content"><b>Ukuran: </b><br>
                                                    {{ $row->ukuran_desain }}
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modalError"></div>
                                                <div id="content"><b>Nama Pendesain: </b> <br>
                                                    {{ $row->namapedesain }}
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin Mau Hapus?",
                    text: "Kamu Akan Menghapus Data Agama dengan nama " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Data Berhasil Di hapus", {
                            icon: "success",
                        });
                        window.location = "/deletes/" + id + ""
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

<script>
    $(document).on('ajaxComplete ready', function() {
        $('.modalMd').off('click').on('click', function() {
            $('#content').load($(this).attr('value'));
            $('#modalMdTitle').html($(this).attr('title'));
        });
    });
</script>

    @include('sweetalert::alert')
@endsection
