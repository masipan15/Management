<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\barangkeluar;

class PelangganController extends Controller
{
    public function datapelanggan()
    {
        $data = pelanggan::all();

        return view('pelanggan.datapelanggan', compact('data',));
    }

    public function editpelanggan($id)
    {
        $data = pelanggan::findOrFail($id);
        $barangkeluar = barangkeluar::all();

        return view('pelanggan.editpelanggan', compact('data', 'barangkeluar'));
    }

    public function updatepelanggan(request $request, $id)
    {
        $data = pelanggan::find($id);
        $data->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'notelpon' => $request->notelpon,
        ]);
        return redirect()->route('datapelanggan')->with('success', 'Data berhasil di Update!');
    }

    public function hapuspelanggan($id)
    {
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('datapelanggan')->with('success', 'Data Berhasil Di Hapus');
    }
}
