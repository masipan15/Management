@extends('layout.admin')
@push('css')
    <link href="{{ asset('acstemplate/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('acstemplate/assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Basic DataTable</h6>
                        <p class="text-muted card-sub-title">Searching, ordering and paging goodness will be immediately
                            added to the table, as shown in this example.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-25p">Nama</th>
                                    <th class="wd-20p">Harga</th>
                                    <th class="wd-15p">Jumlah</th>
                                    <th class="wd-20p">Total</th>
                                    <th class="wd-20p">Foto</th>
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
                                        <td>{{ $row->namabarang }}</td>
                                        <td>Rp.{{ $row->harga }}</td>
                                        <td>{{ $row->jumlah }}</td>
                                        <td>Rp.{{ $row->total }}</td>
                                        <td>
                                            <img src="{{ asset('fotobrgmsk/' . $row->foto) }}" alt=""
                                                style="width: 75px; height: 80px;">
                                        </td>
                                        <td>
                                            <a href="/editbrgmsk/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i></a><br>
                                            <a href="/delete/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i></button></a>
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
    <script src="{{ asset('acstemplate/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/jszip.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/pdfmake.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/vfs_fonts.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.print.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/datatable/fileexport/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/js/table-data.js') }}"></script>
@endsection
