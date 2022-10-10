@extends('layout.admin')

@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>

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
                                    <th class="wd-15p">Status</th>
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
                                            <a href="/edituserdesain/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i>edit</a><br>
                                            <a href="/prosesselesai/{{ $row->id }}" class="btn btn-danger mb-1"><i
                                                    class="fas fa-pencil-alt"></i>selesai</a>
                                            

                                            
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

    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    </script> --}}
@endsection
