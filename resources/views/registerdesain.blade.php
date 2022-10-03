<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from laravel.spruko.com/spruha/ltr/signup by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:20:03 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('acstemplate/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>ACS Management</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('acstemplate/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('acstemplate/assets/css/style/style.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/css/colors/default.css') }}" rel="stylesheet">


    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('acstemplate/assets/css/colors/color.css') }}">

    <!-- Switcher css-->
    <link href="{{ asset('acstemplate/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('acstemplate/assets/switcher/demo.css') }}" rel="stylesheet">



</head>

<body class="main-body leftmenu">

    <!-- Switcher -->
    <div class="switcher-wrapper">

    </div>
    <!-- End Switcher -->

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('acstemplate/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->


    <!-- Page -->
    <div class="page main-signin-wrapper">

        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-5 p-2 pos-absolute">
                                {{-- <img src="{{ asset('acstemplate/assets/img/brand/logo-light.png') }}"
                                    class="header-brand-img mb-4" alt="logo"> --}}
                                <div class="clearfix"></div>
                                <img src="{{ asset('acstemplate/assets/img/svgs/user.svg') }}" class="ht-100 mb-0"
                                    alt="user">
                                <h5 class="mt-4 text-white">Buat akunmu</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Daftar untuk membuat, menemukan, dan
                                    terhubung dengan komunitas global</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        {{-- <img src="{{ asset('acstemplate/assets/img/brand/logo.png') }}"
                                            class=" d-lg-none header-brand-img text-left float-left mb-4"
                                            alt="logo"> --}}
                                        <div class="clearfix"></div>
                                        <h5 class="text-left mb-2">Anda Akan Daftar Sebagai User Desain</h5>
                                        <p class="mb-4 text-muted tx-13 ml-0 text-left"></p>
                                        <nav class="navbar navbar-light bg-light">
                                            <form class="container-fluid justify-content-start">
                                                <a href="registerdesain" class="btn btn-sm btn-outline-primary active"
                                                    type="button">User Desain</a>
                                                <a href="registerservis" class="btn btn-sm btn-outline-primary"
                                                    type="button">User Servis</a>
                                            </form>
                                        </nav>
                                        <form class="mt-4" action="/createdesain" method="post">
                                            @csrf
                                            <div class="form-group text-left">
                                                <label>Nama</label>
                                                <input class="form-control" name="name"
                                                    placeholder="Masukkan Nama Anda" type="text">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group text-left">
                                                <label>Email</label>
                                                <input class="form-control" name="email"
                                                    placeholder="Masukkan Email Anda" type="text">
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group text-left">
                                                <label>Sandi</label>
                                                <input class="form-control" id="myInput" name="password"
                                                    placeholder="Masukkan Sandi Anda" type="password">
                                                &nbsp;&nbsp;<input type="checkbox" onclick="myFunction()">Tampilkan
                                                Sandi

                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                @if (session('success'))
                                                    <div class="text-danger"> {{ session('success') }} </div>
                                                @endif
                                            </div>
                                            <input type="text" value="desain" name="role" hidden>
                                            <button type="submit" class="btn ripple btn-main-primary btn-block">Buat
                                                Akun</button>
                                        </form>
                                        <div class="text-left mt-5 ml-0">
                                            <p class="mb-0">Sudah Punya Akun? <a href="/login">Masuk</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Page -->

    <!-- Jquery js-->
    <script src="{{ asset('acstemplate/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('acstemplate/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('acstemplate/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('acstemplate/assets/plugins/select2/js/select2.min.js') }}"></script>


    <!-- Custom js -->
    <script src="{{ asset('acstemplate/assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('acstemplate/assets/switcher/js/switcher.js') }}"></script>


    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type == "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>


</body>

<!-- Mirrored from laravel.spruko.com/spruha/ltr/signup by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 01:20:03 GMT -->

</html>
