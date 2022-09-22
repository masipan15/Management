@extends('layout.admin')

@section('content')
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
    @endpush



    @push('scripts')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-15">
                            <h1 class="text-center">Barang Keluar</h1>



                            <div class="container">
                                <a href="/tambahservis" class="btn btn-primary">Tambah Barang</a>


                                <div class="row">
                                    <div class="row mt-3">
                                        <table class="table align-middle table-bordered table-hover" id="example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Merek</th>
                                                    <th scope="col">Kerusakan Barang</th>
                                                    <th scope="col">Status Pengerjaan</th>
                                                    <th scope="col">Biaya Servis</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($data as $row)
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $row->nama_barang }}</td>
                                                        <td>{{ $row->merk_barang }}</td>
                                                        <td>{{ $row->kerusakan_barang }}</td>
                                                        <td>{{ $row->status_pengerjaan }}</td>
                                                        <td>Rp.{{ $row->biaya_servis }}</td>

                                                        <td>
                                                            <a href="/editservis/{{ $row->id }}"
                                                                class="btn btn-success mb-1"><i class="fas fa-pencil-alt"></i>edit</a><br>
                                                            <a href="/deletet/{{ $row->id }}" class="btn btn-danger"
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
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
                    }
                });
            });
        </script>

        {{-- @include('sweetalert::alert') --}}
</body>
</html>
@endpush
@endsection