<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modal;

class ModalController extends Controller
{
    public function modal()
    {
        $modal = Modal::all();
        return view('modal.modal', compact('modal'));
    }

    public function tambahmodal()
    {
        return view('modal.tambahmodal');
    }

    public function insertmodal(Request $request)
    {
        $validated = $request->validate([
            'modal' => 'required',
            'tanggal' => 'required|after:yesterday|before:tomorrow',
        ], [
            'modal.required' => 'Modal Harus Diisi!',
            'tanggal.required' => 'Tanggal Harus Diisi!',
            'tanggal.after' => 'Tanggal harus sesuai dengan hari ini!',
            'tanggal.before' => 'Tanggal harus sesuai dengan hari ini!',
        ]);

        $data = modal::create([
            'modal' => $request->modal,
            'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('modal')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editmodal($id)
    {
        $data = modal::findOrFail($id);

        return view('modal.editmodal', compact('data'));
    }




    public function updatemodal(request $request, $id)
    {
        $data = modal::find($id);
        $data->update([
            'modal' => $request->modal,
            'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('modal')->with('success', 'Data berhasil di Update!');
    }
}
