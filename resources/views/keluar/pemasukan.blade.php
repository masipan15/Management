@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">

                    <div>
                        <h4>Pemasukan</h4>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div>
                        <a href="/exportpdfm" class="btn btn-primary">Export PDF</a>
                        {{-- <a href="/exportexcelm" class="btn btn-success">Export Excel</a> --}}
                        <p class="text-muted card-sub-title"></p>
                    </div>


                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-20p">Tanggal</th>
                                    <th class="wd-25p">Bulan</th>
                                    <th class="wd-20p">Tahun</th>
                                    <th class="wd-20p">Pemasukan Dari</th>
                                    <th class="wd-15p">Total</th>


                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($array as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row['tanggal'] }}</td>
                                        <td>{{ $row['bulan'] }}</td>
                                        <td>{{ $row['tahun'] }}</td>
                                        <td>{{ $row['type'] }}</td>
                                        <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>


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
