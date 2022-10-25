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
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Harus Diisi!',
            'email.exists' => 'Email Salah!',
            'password.required' => 'Harus Diisi!',
            'password.min' => 'Minimal 6 huruf!',
        ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'admin'])) {
            return redirect('/welcome');
        }
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'servis'])) {
            return redirect('/welcome');
        }
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'desain'])) {
            return redirect('/welcome');
        }
        return redirect('login')->with('success', 'Email atau Kata Sandi yang anda masukkan salah');
    }


    public function register()
    {
        return view('register');
    }
    public function registeruser(Request $request)
    {
        User::create([
            'name' => $request->name,   
            'email' => $request->email,
            'role' => 'admin',
            'password' => bcrypt($request->password),
            'alamat' => '-',
            'notelpon' => '-',
            'foto' => '-',
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

   
    public function registerservis()
    {
        return view('registerservis');
    }
    public function createservis(Request $request){
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'servis',
            'password' => bcrypt($request->password),
            'alamat' => '-',
            'notelpon' => '-',
            'foto' => '-',
            'remember_token' => Str::random(60),
        ]);
        return redirect('login');
    }
    public function registerdesain()
    {
        return view('registerdesain');
    }
    public function createdesain(Request $request){
       
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'desain',
            'password' => bcrypt($request->password),
            'alamat' => '-',
            'notelpon' => '-',
            'foto' => '-',
            'remember_token' => Str::random(60),
        ]);
        return redirect('login');
    }

    public function logout()
    {
        auth::logout();
        return redirect('/login');
    }


    public function profil()
    {
        $data = User::all();
        return view('layout.profil', compact('data'));
    }
    // public function editprofil()
    // {
    //     $data = User::all();
    //     return view('layout.editprofil', compact('data'));
    // }


    public function editprofil(request $request)
    {
        $data = User::findOrFail(Auth::user()->id);

        return view('layout.editprofil', compact('data'));
    }

    public function updateprofil(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'foto' => $request->foto,
        ]);
        return redirect()->route('profil')->with('success', 'Data berhasil di Update!');
    }
}
