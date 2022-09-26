<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Produk;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginproses(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.required' => 'Harus Diisi!',
            'email.exists' => 'Email Salah!',
            'password.required' => 'Harus Diisi!',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/welcome');
        }
    }


    public function register()
    {
        return view('register');
    }
    public function registeruser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ], [
            'name.required' => 'Harus Diisi!',
            'email.required' => 'Harus Diisi!',
            'email.unique' => 'Email Sudah Dipakai!',
            'password.required' => 'Harus Diisi!',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' =>'-' ,
            'notelpon' => '-',
            'foto' => '-',
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function logout()
    {
        auth::logout();
        return redirect('/login');
    }
}
