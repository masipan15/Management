@extends('layout.admin')

@section('content')

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div>
                    <h4>Pengeluaran</h4>
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
                                <th class="wd-15p">Pengeluaran</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pengeluaran as $row)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $row->day }}</td>
                                    <td>{{ $row->month }}</td>
                                    <td>{{ $row->year }}</td>

                                    <td>Rp.{{ number_format($row['total'], 2, '.', '.') }}</td>
                                    <td>
                                        <img src="{{ asset('fotobrgmsk/' . $row->foto) }}"
                                            alt="" style="width: 50px;">
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
