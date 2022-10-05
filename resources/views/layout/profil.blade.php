@extends('layout.admin')

@section('content')
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @endpush

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ACS Management</title>
    </head>

    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <div class="row row-sm">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h3 class="main-content-label mb-1">Pusat Akun</h3>
                            <p class="text-muted card-sub-title"></p>
                        </div>

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-xl-3 col-lg-12 col-md-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <h3 class="main-content-label">Akun</h3>
                                    </div>
                                    <div class="card-body text-center item-user">
                                        <div class="profile-pic">
                                            <div class="profile-pic-img">
                                                <span class="bg-success dots" data-toggle="tooltip" data-placement="top"
                                                    title="online"></span>
                                                <img class="rounded-circle"
                                                    src="{{ asset('acstemplate/assets/img/wa.png') }}" alt="user">
                                            </div>
                                            <a href="#" class="text-dark">
                                                <h5 class="mt-3 mb-0 font-weight-semibold">{{ Auth::user()->name }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="item1-links nav nav-tabs  mb-0">

                                        <li class="nav-item">
                                            <a data-target="/profil" class="nav-link active" data-toggle="tab"
                                                role="tablist"><i class="ti-credit-card icon1"></i>Profil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/welcome" class="nav-link"><i
                                                    class="ti-power-off icon1"></i>Kembali</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-12 col-md-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                                <div class="d-flex align-items-start pb-3 border-bottom"> <img
                                                        src="{{ asset('acstemplate/assets/img/wa.png') }}"
                                                        class="img rounded-circle avatar-xl" alt="">
                                                    <div class="pl-sm-4 pl-2" id="img-section"> <b>Foto Profil</b>
                                                        <p class="mb-1">
                                                        </p> <button class="btn button border btn-sm mr-5"><b>Edit
                                                                Foto</b></button>
                                                    </div>
                                                    </p> <a href="/editprofil" type="button"
                                                        class="btn btn-success button border btn-sm mr-1"><b>Edit
                                                            Profil</b></a>
                                                    {{-- </p> <a href="/editprofil" type="button" class="btn btn-success button border btn-sm mr-1"><b>Edit Email & Sandi</b></a> --}}

                                                </div>
                                                <div class="main-content-body tab-pane p-4 border-top-0" id="edit">
                                                    <div class="card-body border">
                                                        <div class="mb-4 main-content-label">Informasi Pribadi</div>
                                                        <div class="py-2">
                                                            <div class="row py-2">
                                                                <div class="col-md-6"> <label id="name">Nama</label>
                                                                    <input type="text" class="form-control"
                                                                        name="name" readonly
                                                                        value="{{ Auth::user()->name }}"> </div>
                                                                <div class="col-md-6 pt-md-0 pt-3"> <label
                                                                        id="email">Email</label> <input type="email"
                                                                        name="email" readonly
                                                                        value="{{ Auth::user()->email }}"
                                                                        class="form-control"> </div>
                                                            </div>
                                                            <div class="row py-2">
                                                                <div class="col-md-6"> <label id="alamat">Alamat</label>
                                                                    <input type="text" name="alamat" readonly
                                                                        value="{{ Auth::user()->alamat }}"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="col-md-6 pt-md-0 pt-3"> <label id="notelpon">No
                                                                        Telpon</label> <input type="number" name="notelpon"
                                                                        readonly value="{{ Auth::user()->notelpon }}"
                                                                        class="form-control"> </div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    @endsection
