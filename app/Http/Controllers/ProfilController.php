<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function profil()
    {
        $data = User::all();
        return view('layout.profil', compact('data'));
    }
    public function editprofil()
    {
        $data = User::all();
        return view('layout.editprofil', compact('data'));
    }


    // public function editkategori($id)
    // {
    //     $data = User::findOrFail($id);

    //     return view('layout.editprofil', compact('data'));
    // }

    public function updateprofil(request $request, $id)
    {
        $data = User::find($id);
        $data->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelon' => $request->notelon,
        ]);
        return redirect()->route('profil')->with('success', 'Data berhasil di Update!');
    }
}
