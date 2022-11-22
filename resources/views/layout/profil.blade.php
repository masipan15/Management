@extends('layout.admin')

@section('content')

    <head>
        <style>
            .upload {
                width: 190px;
                position: relative;
                margin: auto;
            }

            .upload img {
                border-radius: 50%;
                border: 4px solid #eaeaea;
            }

            .upload .round {
                position: absolute;
                bottom: 0px;
                right: 30px;
                left: 2, 5;
                background: #00B4FF;
                width: 40px;
                height: 40px;
                line-height: 33px;
                text-align: center;
                border-radius: 50%;
                overflow: hidden;
            }

            .upload .round input[type="file"] {
                position: absolute;
                transform: scale(2);
                opacity: 0;
            }

            input[type=file]::-webkit-file-upload-button {
                cursor: pointer;
            }
            /* i {
                position: relative;
                width: 390px;
                margin: auto;
            } */
            .ion-settings {
                position: relative;
                margin: 9px 0px;
                font-size: 22px;
            }
        </style>
    </head>


    <!-- ijaboCropTool-->
    <link rel="stylesheet" href="{{ asset('acstemplate/assets/ijaboCropTool.min.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h3 class="main-content-label mb-1"><b>Pusat Akun</b></h3>
                        <p class="text-muted card-sub-title"></p>
                    </div>

                    <!-- Row -->
                    <div class="row row-sm">
                        <div class="col-xl-3 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <h3 class="main-content-label"><b>Akun</b></h3>
                                </div>
                                <div class="card-body text-center item-user">
                                    <div class="profile-pic">
                                        <div class="profile-pic-img">
                                            <span class="bg-success dots" data-toggle="tooltip" data-placement="top"
                                                title="online"></span>
                                            <div class="upload">
                                                <img class="rounded-circle image-previewer" data-lightbox="" button="close"
                                                    src="{{ asset('storage/' . Auth::user()->foto) }}" alt="user">
                                                <div class="round">
                                                    <input type="file" name="foto_id" id="edit_foto"
                                                        style="opacity: 0;height: 1px;display:none">
                                                    <a href="javascript:void(0)" id="ganti_foto_btn" class="text-dark"><i
                                                            class="ion-settings" style="color: black;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <h5 class="mt-3 mb-0 font-weight-semibold">{{ Auth::user()->name }}</h5>
                                        </a>
                                    </div>
                                </div>
                                <ul class="item1-links nav nav-tabs  mb-0">

                                    <li class="nav-item">
                                        <a data-target="#" class="nav-link active" data-toggle="tab" role="tablist"><i
                                                class="ti-credit-card icon1"></i><b>Profil</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/welcome" class="nav-link"><i
                                                class="ti-power-off icon1"></i><b>Kembali</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                            <div class="main-content-body tab-pane p-4 border-top-0" id="edit">
                                                <div class="card-body border">
                                                    <div class="mb-4 main-content-label">Informasi Pribadi</div>
                                                    <div class="py-2">
                                                        <div class="row py-2">
                                                            <div class="col-md-6"> <label id="name"><b>Nama</b></label>
                                                                <input type="text" class="form-control" name="name"
                                                                    readonly value="{{ Auth::user()->name }}">
                                                            </div>
                                                            <div class="col-md-6 pt-md-0 pt-3"> <label
                                                                    id="email"><b>Email</b></label> <input
                                                                    type="email" name="email" readonly
                                                                    value="{{ Auth::user()->email }}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row py-2">
                                                            <div class="col-md-6"> <label
                                                                    id="alamat"><b>Alamat</b></label>
                                                                <input type="text" name="alamat" readonly
                                                                    value="{{ Auth::user()->alamat }}" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="notelpon"><b>No
                                                                        Telpon</b></label> <input type="number"
                                                                    name="notelpon" readonly
                                                                    value="{{ Auth::user()->notelpon }}"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group row justify-content-end mb-0">
                                                                <div class="col-md-2 pl-md-4 mt-3">
                                                                    <a href="/editprofil" type="button"
                                                                        class="btn btn-success button border btn-sm mr-1"><b>Edit
                                                                            Profil</b></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- ijaboCropTool js -->
    <script src="{{ asset('acstemplate/assets/jquery-1.7.1.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('acstemplate/assets/ijaboCropTool.min.js') }}"></script>

    <script>
        $(document).on('click', '#ganti_foto_btn', function() {
            $('#edit_foto').click();
        });

        $('#edit_foto').ijaboCropTool({
            preview: '.image-previewer',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['Ganti', 'Batal'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            processUrl: '{{ route('crop') }}',
            withCSRF: ['_token', '{{ csrf_token() }}'],
            onSuccess: function(message, element, status) {
                alert(message);
            },
            onError: function(message, element, status) {
                alert(message);
            }
        });
    </script>

@include('sweetalert::alert')

    </html>
@endsection
