<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
            'email.exists' => 'Email yang anda masukkan belum terdaftar!',
            'password.required' => 'Harus Diisi!',
            'password.min' => 'Minimal 6 huruf!',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
            return redirect('/welcome');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'servis'])) {
            return redirect('/welcome');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'desain'])) {
            return redirect('/welcome');
        }
        return redirect('login')->with('success', 'Berhasil Login');
    }


    public function register()
    {
        return view('register');
    }
    public function registeruser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib di Isi!',
            'password.required' => 'password Harus Diisi!',
            'email.unique' => 'Email sudah digunakan',
            'password.min' => ' Password Minimal 6 huruf'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'admin',
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'foto' => 'wa.png',
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }


    public function registerservis()
    {
        return view('registerservis');
    }
    public function createservis(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib di Isi!',
            'password.required' => 'password Harus Diisi!',
            'email.unique' => 'Email sudah digunakan',
            'password.min' => ' Password Minimal 6 huruf'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'servis',
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'foto' => 'wa.png',
            'remember_token' => Str::random(60),
        ]);
        return redirect()->route('login')->with('success', 'Berhasil register sebagai user Servis!');
    }
    public function registerdesain()
    {
        return view('registerdesain');
    }
    public function createdesain(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib di Isi!',
            'password.required' => 'password Harus Diisi!',
            'email.unique' => 'Email sudah digunakan',
            'password.min' => ' Password Minimal 6 huruf'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'desain',
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'foto' => 'wa.png',
            'remember_token' => Str::random(60),
        ]);
        return redirect()->route('login')->with('success', 'Berhasil register sebagai user Desain!');
    }

    public function logout()
    {
        auth::logout();
        return redirect()->route('login')->with('success', 'Anda berhasil di Keluar!');
    }


    // public function profil()
    // {
    //     $data = User::all();
    //     return view('layout.profil', compact('data'));
    // }
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
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profil')->with('success', 'Profil berhasil di Ganti!');
    }


    public function editpassword()
    {
        return view('layout.editprofil');
    }
    public function updatepassword(Request $request)
    {
        $request->validate([
            'password_lama' => 'required|min:6|max:100',
            'password' => 'required|min:6|max:100|confirmed',
            'password_confirmation' => 'required'
        ], [
           'password_lama.required' => 'sandi lama harus diisi',
           'password_lama.min' => 'sandi harus lebih dari 6',
           'password.required' => 'sandi baru harus diisi',
           'password.min' => 'sandi harus lebih dari 6',
           'password.confirmed' => 'sandi ini harus sama dengan sandi baru',
           'password_confirmation.required' => 'konfirmasi sandi harus diisi',

        ]);
        // if(Auth::attempt($request->only('password_lama'))){
        //     return redirect('profil')->with('success', 'Kata Sandi Yang anda masukkan benar');
        // } else {
        //     return redirect()->back()->with('password', 'Kata Sandi Yang anda masukkan salah');

        // }

        $current_user = Auth()->user();

        if (Hash::check($request->password_lama, $current_user->password)) {
            $current_user->update([
                'password' => bcrypt($request->password)
            ]);

            return redirect()->back()->with('success', 'Password Berhasil Di Ganti');

        } else {
            return redirect()->back()->with('error', 'Password Tidak Terdeteksi');
        }
    }

    public function profil()
    {
        $data = User::all();
        return view('layout.profil', compact('data'));
    }

    function crop(Request $request){
        $path = '';
        $file = $request->file('foto_id')->store('', 'public');

        if (!$file) {
            return response()->json(['status' => 0, 'msg' => 'Terjadi kesalahan, unggah foto baru gagal.']);
        } else {
            $fotoLama = User::find(Auth::user()->id)->getAttributes()['foto'];

            if ($fotoLama != '') {
                if (File::exists(public_path($path . $fotoLama))) {
                    File::delete(public_path($path . $fotoLama));
                }
            }

            //Update foto
            $update = User::find(Auth::user()->id)->update(['foto' => $file]);

            if (!$file) {
                return response()->json(['status' => 0, 'msg' => 'Terjadi kesalahan, pembaruan foto dalam Database gagal.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Foto profil Anda telah berhasil diperbarui.']);
            }
        }
    }

}
