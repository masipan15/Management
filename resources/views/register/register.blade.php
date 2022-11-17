<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('acstemplate/assets/register.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>



<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form name="form1" class="box" onsubmit="return checkStuff()">
      <h4>LOGIN<span></span></h4>
      <h5>Masuk ke akun anda.</h5>
        <input type="text" name="email" placeholder="Masukkan Email Anda" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="password" placeholder="Masukkan Sandi Anda" id="pwd" autocomplete="off">
        <label>
          <input type="checkbox">
        <input type="submit" value="Sign in" class="btn1">
      </form>
        <a href="#" class="dnthave">Belum Punya Akun? Daftar</a>
  </div>
</div>



</body>
<script src="{{ asset('acstemplate/assets/register.js') }}"></script>
<script src="https://cldup.com/S6Ptkwu_qA.js"></script>
</html>