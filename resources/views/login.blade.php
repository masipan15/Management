<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('acstemplate/assets/img/brand/acs1.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Title -->
    <title>ACS Management</title>

</head>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,500">
<link rel="stylesheet" href="{{ asset('acstemplate/assets/login.css') }}">

<body>

    <div class="login">
        <div class="photo">
        </div>
        <span><h5>Masuk ke akun anda</h5></span>

            <div class="form-group1 text-center mt-4">
                {{-- <a href="/registerdesain" class="btn btn-info" id="submit1" type="submit1" ripple>User Desain</a>
                <a href="/registerservis" class="btn btn-info" id="submit2" type="submit2" ripple>User Servis</a> --}}
                <a type="button" href="/registerdesain" class="btn btn-outline-primary">Daftar User Desain</a>
                <a type="button" href="/registerservis" class="btn btn-outline-primary">Daftar User Servis</a>
                {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
            </div>

        <form action="/loginproses" method="POST" id="login-form">
            @csrf
            <div id="u" class="form-group">
                <input id="email" spellcheck=false class="form-control" name="email" type="text" size="18"
                    alt="login" required="">
                <span class="form-highlight"></span>
                <span class="form-bar"></span>
                <label for="email" class="float-label"><b><h6>Email</h6></b></label>
            </div>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div id="p" class="form-group">
                <input id="password" class="form-control" spellcheck=false name="password" type="password"
                    size="18" alt="login" required="">
                <span class="form-highlight"></span>
                <span class="form-bar"></span>
                <label for="password" class="float-label"><b><h6>Sandi</h6></b></label>
            </div>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <input type="checkbox" onclick="myFunction()" id="rem">
                <label for="rem">Tampilkan Sandi</label>
                <button id="submit" type="submit" ripple>Masuk</button>
            </div>
        </form>
        {{-- <footer><a href=""></a></footer>
        <footer1><a href="/registerdesain">Daftar Akun Sebagai User Desain</a></footer1>
        <footer3><a href="/registerservis">Daftar Akun Sebagai User Servis</a></footer3> --}}
    </div>

</body>

<script src="http//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ asset('acstemplate/asset/register.js') }}"></script>

</html>
@include('sweetalert::alert')
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
