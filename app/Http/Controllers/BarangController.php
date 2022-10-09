<?php

namespace App\Http\Controllers;

use App\Models\Barang;

use App\Models\Barangmasuk;

use App\Models\Barangkeluar;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{

    public function databarang()
    {
        $data = Barang::with('kategori')->get();

        return view('barang.databarang', compact('data'));
    }

    public function tambahbarang()
    {
        $data = Barang::all();
        $kategori = kategori::all();
        return view('barang.tambahdatabarang', compact('data', 'kategori'));
    }

    public function insertbarang(Request $request)
    {

        $validated = $request->validate([
            'kategoris_id' => 'required',
            'namabarang' => 'required',
            'merk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'hargajual' => 'required',
            'foto1' => 'required|mimes:jpg,png,jpeg,jfif,webp',
        ], [
            'kategoris_id.required' => 'kategori Harus Diisi!',
            'namabarang.required' => 'namabarang Harus Diisi!',
            'merk.required' => 'merk Harus Diisi!',
            'deskripsi.required' => 'deskripsi Harus Diisi!',
            'harga.required' => 'harga Harus Diisi!',
            'hargajual.required' => 'harga Harus Diisi!',
            'stok.required' => 'stok Harus Diisi!',
            'foto1.required' => 'foto1 Harus Diisi!',
            'foto1.mimes' => 'Harus Image',
        ]);
        $data = Barang::create([
            'kodebarang' => random_int(1000, 999999),
            'kategoris_id' => $request->kategoris_id,
            'namabarang' => $request->namabarang,
            'merk' => $request->merk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => 0,
            'hargajual' => $request->hargajual,
            'foto1' => $request->foto1,
        ]);
        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('fotobarang/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('databarang')->with('success', 'Data berhasil di Tambahkan');;
    }


    public function editbarang($id)
    {
        $data = Barang::findOrFail($id);
        $kategori = kategori::all();

        return view('barang.editdatabarang', compact('data', 'kategori'));
    }
    public function updatebarang(request $request, $id)
    {
        $data = Barang::find($id);
        $data->update([
            'kodebarang' => $request->kodebarang,
            'kategoris_id' => $request->kategoris_id,
            'namabarang' => $request->namabarang,
            'merk' => $request->merk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'hargajual' => $request->hargajual,
            'stok' => $request->stok,
        ]);


        if ($request->hasfile('foto1')) {
            $request->file('foto1')->move('fotobarang/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('databarang')->with('success', 'Data berhasil di Update!');
    }


    public function deletese($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('databarang')->with('success', 'Data Berhasil Di Hapus');
    }
}
