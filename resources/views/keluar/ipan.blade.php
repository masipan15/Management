@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahbarangkeluar" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-15p">Tanggal</th>
                                    <th class="wd-15p">Total</th>


                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($ipan as $row)
                                    <tr>
                                        <th scope="row">{{ $row->day }}</th>
                                        <td>{{ $row->month }}</td>
                                        <td>{{ $row->year }}</td>
                                        <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>
                                        <td>
                                            <a href="/editbrgklr/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i></a><br>
                                            {{-- <a href="/delete/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i>Hapus</button></a> --}}
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
@endsection
