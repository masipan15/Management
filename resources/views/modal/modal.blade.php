@extends('layout.admin')
@section('content')


<link rel="stylesheet" href="sweetalert2.min.css">


    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahmodal" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-25p">Modal</th>
                                    <th class="wd-25p">Tanggal</th>
                                    <th class="wd-20p">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($modal as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>Rp.{{ number_format($row['modal'], 2, '.', '.') }}</td>
                                        <td>{{ $row->tanggal }}</td>


                                        <td>
                                            <a href="/editmodal/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i></a><br>
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
@endsection

