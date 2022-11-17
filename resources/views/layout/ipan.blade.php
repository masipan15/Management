<form class="mt-4" action="/createservis" method="post">
    @csrf
    <div class="form-group text-left">
        <label>Nama</label>
        <input class="form-control" required name="name"
            placeholder="Masukkan Nama Anda" type="text">
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group text-left">
        <label>Email</label>
        <input class="form-control" required name="email"
            placeholder="Masukkan Email Anda" type="text">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group text-left">
        <label>Sandi</label>
        <input class="form-control" required id="myInput" name="password"
            placeholder="Masukkan Sandi Anda" type="password">
        &nbsp;&nbsp;<input type="checkbox" onclick="myFunction()">Tampilkan
        Sandi

        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <input type="text" value="servis" name="role" hidden>
    <button type="submit" class="btn ripple btn-main-primary btn-block">Buat
        Akun</button>
</form>
<div class="text-left mt-5 ml-0">
    <p class="mb-0">Sudah Punya Akun? <a href="/login">Masuk</a></p>
</div>