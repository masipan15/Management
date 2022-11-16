@extends('layout.admin')
@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <a href="/tambahkategori" class="btn btn-primary">Tambah</a>
                        <p class="text-muted card-sub-title"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-20p">No</th>
                                    <th class="wd-25p">Kategori</th>
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
                                        <td>{{ $row->kategori }}</td>


                                        <td>
                                            <a href="/editkategori/{{ $row->id }}" class="btn btn-success mb-1"><i
                                                    class="fas fa-pencil-alt"></i></a><br>
                                            {{-- <a href="/hapusktgr/{{ $row->id }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Ini ')"><i
                                                    class="fas fa-trash-alt"></i></button></a> --}}
                                            <a href="#" class="btn btn-danger" id="hapus"
                                                data-id="{{ $row->id }}"data-nama="{{ $row->kategori }}">Hapus</a>
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

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <script>
        $('#hapus').click(function () {
		swal({
		  title: "Are you sure?",
		  text: "Your will not be able to recover this imaginary file!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn btn-danger",
		  confirmButtonText: "Yes, delete it!",
		  closeOnConfirm: false
		},
		function(){
		  swal("Deleted!", "Your imaginary file has been deleted.", "success");
		})
        .then((willDelete) => {
            if (willDelete) {
                swal("Data Berhasil Di hapus", {
                    icon: "success",
                });
                window.location = "/hapusktgr/" + id + ""
            } else {
                swal("Data Tidak Jadi Di hapus");
            }
        });
	});
    </script>
@endsection
