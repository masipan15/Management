@extends('layout.admin')
@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahdesain" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-20p">Tanggal</th>
                                    <th class="wd-25p">Nama Pemesan</th>
                                    <th class="wd-25p">Nama Pedesain</th>
                                    <th class="wd-25p">Ukuran Desain</th>
                                    <th class="wd-25p">Permintaan Desain</th>
                                    <th class="wd-20p">Keterangan</th>
                                    <th class="wd-20p">Harga Desain</th>
                                    <th class="wd-15p">Status Pengerjaan</th>

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
                                        <td>{{ $row->created_at->format('d/m/y') }}</td>
                                        <td>{{ $row->nama_pemesan }}</td>
                                        <td>{{ $row->namapedesain }}</td>
                                        <td>{{ $row->ukuran_desain }}</td>
                                        <td>{{ $row->permintaan_desain }}</td>
                                        <td>{{ $row->keterangan }}</td>
                                        <td>Rp.{{ number_format($row['harga_desain'], 2, '.', '.') }}</td>
                                        <td>{{ $row->status_pengerjaan }}</td>


                                        <td>
                                            <a href="/editdesain/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i>edit</a><br>
                                            <a href="/deletes/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i>hapus</button></a>
                                            {{-- <a href="#" class="btn btn-danger delete"
                                                data-id="{{ $row->id }}"data-nama="{{ $row->nama_pemesan }}">Hapus</a> --}}
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

    @include('sweetalert::alert')
@endsection
