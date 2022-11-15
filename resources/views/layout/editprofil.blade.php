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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-cfard">
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
                                        <img class="rounded-circle image-previewer"
                                        src="storage/{{ Auth::user()->foto }}" alt="user">
                                    </div>
                                    <a href="#" class="text-dark">
                                        <h5 class="mt-3 mb-0 font-weight-semibold">{{ Auth::user()->name }}</h5>
                                    </a>
                                </div>
                            </div>
                            <ul class="item1-links nav nav-tabs  mb-0">

                                <li class="nav-item">
                                    <a data-target="#" class="nav-link active" data-toggle="tab"
                                        role="tablist"><i class="ti-credit-card icon1"></i><b>Edit Profil</b></a>
                                </li>
                                <li class="nav-item">
                                    <a href="/profil" class="nav-link"><i
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
                                        {{-- <div class="d-flex align-items-start pb-3 border-bottom"> <img
                                                src="{{ asset('acstemplate/assets/img/wa.png') }}"
                                                class="img rounded-circle avatar-xl" alt="">
                                            <div class="pl-sm-4 pl-2" id="img-section"> <b>Foto Profil</b>
                                                <p class="mb-1"></p> <button
                                                    class="btn button border btn-sm"><b>Upload</b></button>
                                            </div>
                                        </div> --}}
                                        <div class="main-content-body tab-pane p-4 border-top-0" id="edit">
                                            <div class="card-body border">
                                                <div class="mb-4 main-content-label">Informasi Pribadi</div>
                                                <form action="/updateprofil" method="POST" class="form-horizontal">
                                                    @csrf
                                                    <div class="mb-4 main-content-label"></div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label for=""><b>Nama</b></label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    value="{{ Auth::user()->name }}" name="name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label for=""><b>Alamat</b></label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    value="{{ Auth::user()->alamat }}"
                                                                    name="alamat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label for=""><b>No Telpon</b></label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="number" class="form-control"
                                                                    value="{{ Auth::user()->notelpon }}"
                                                                    name="notelpon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row justify-content-end mb-0">
                                                        <div class="col-md-5 pl-md-5 mt-3">                                                            
                                                            <a href="/profil" type="button" class="btn btn-danger">Batal</a>
                                                            <button type="reset" class="btn btn-primary mr-1">Reset</button>
                                                            <button type="submit" class="btn btn-success mr-1">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                    {{-- EDIT PASSWORD --}}
                                            <div class="mt-5">
                                            <div class="card-body border">
                                                <div class="mb-4 main-content-label"><b>Ganti Password</b></div>
                                                <form action="/updatepassword" method="POST" class="form-horizontal">
                                                    @csrf
                                                    
                                                    <div class="mb-4 main-content-label"></div>
                                                    <div class="row row-sm">
                                                        <div class="col-md-12 col-lg-12 col-xl-12"> 
                                                            <label for=""><b>Password Lama</b></label>
                                                            <input type="password" class="form-control"
                                                                name="password_lama" id="password_lama">
                                                                <input type="checkbox" onclick="yFunction()">Tampilkan Sandi
                                                        </div>
                                                        @if($errors->any('password_lama'))
                                                            <span class="text-danger">{{ $errors->first('password_lama') }}</span>
                                                        @endif
                                                    </div><br>


                                                    <div class="form-group ">
                                                            <label for=""><b>Password Baru</b></label>
                                                            <input type="password" class="form-control"
                                                                name="password" id="password">
                                                                <div><input type="checkbox" onclick="myFunction()">Tampilkan Sandi</div>
                                                        @if($errors->any('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div><br>


                                                    <div class="form-group ">
                                                        <label for=""><b>Konfirmasi Sandi</b></label>
                                                            <input type="password" class="form-control"
                                                                name="password_confirmation" id="password_confirmation">
                                                                <div><input type="checkbox" onclick="mFunction()">Tampilkan Sandi</div>
                                                        @if($errors->any('password_confirmation'))
                                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                        @endif
                                                    </div>
                                                    @if (session('success'))
                                                        <div class="text-danger"> {{ session('success') }} </div>
                                                    @endif
                                                {{-- <div class="form-group">
                                                <label for="">Password</label>
                                                    <div class="mt-1">
                                                        <input type="password" name="password" autocomplete="current-password" required="" id="id_password">
                                                        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                                                    </div>
                                                </div> --}}

                                                    <div class="form-group row justify-content-end mb-0">
                                                        <div class="col-md-5 pl-md-5 mt-3">                                                            
                                                            <a href="/profil" type="button" class="btn btn-danger">Batal</a>
                                                            <button type="reset" class="btn btn-primary mr-1">Reset</button>
                                                            <button type="submit" class="btn btn-success mr-1">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function yFunction() {
        var x = document.getElementById("password_lama");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script>
    function mFunction() {
        var x = document.getElementById("password_confirmation");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>
@endsection
