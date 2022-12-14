@extends('layout.admin')

@section('content')


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <div class="row row-sm mt-3">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Edit Kategori</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>
                        <form action="/updatekategori/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori
                                    </label>
                                <div class="col-sm-10">
                                    <input type="text" name="kategori" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->kategori }}" id="inputEmail3">
                                </div>
                            </div>

                            <div class="mb-4 main-content-label"></div>
                            <div class="form-group mb-0">
                                <div class="row row-sm">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="custom-controls-stacked">
                                        </div>
                                        <div class="text-center mt-4 mb-3">
                                            <button type="submit"
                                                class="btn ripple btn-main-primary active mr-1">Simpan</button>
                                            <a href="/datakategori" type="button" onclick="contoh()" class="btn ripple btn-secondary">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                                    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
                                </script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                                    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
                                </script>
                                -->
    </body>

    </html>
    <script>
    function contoh() {
		swal(
			{
				title: 'Well done!',
				text: 'You clicked the button!',
				type: 'success',
				confirmButtonColor: '#57a94f'
			}
		)
	};
    </script>
@endsection
