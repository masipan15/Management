<?php

namespace App\Http\Controllers;

use App\Models\Barang;

use App\Models\Barangmasuk;

use App\Models\Barangkeluar;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    // public function databarang()
    // {

    //     $data = Barang::all();
    //     return view('barang.databarang', compact('data'));
    // }
    // public function tambahbarang()
    // {
    //     $data = Barang::all();
    //     return view('barang.tambahdatabarang', compact('data'));
    // }
    // public function insertbarang(Request $request)
    // {
    //     $request->validate([
    //         'kodebarang' => 'unique:barangs',
    //         'namabarang' => 'required',
    //         'kategori_id' => 'required',
    //         'harga' => 'required',
    //         'hargajual' => 'required',
    //         'stok' => 'required',
    //         'foto' => 'required|mimes:jpg,png,webp,jpeg',
    //     ], [

    //         'kodebarang.unique' => 'Kode Barang Sudah digunakan.',

    //         'foto.mimes' => 'wajib jpg,png,webp,jpeg',
    //     ]);
    //     $data = Barang::create([
    //         'kodebarang' => random_int(1000, 999999),
    //         'namabarang' => $request->namabarang,
    //         'harga' => $request->harga,
    //         'hargajual' => $request->hargajual,
    //         'stok' =>  $request->hargajual,
    //         'foto' => $request->foto
    //     ]);
    //     if ($request->hasfile('foto')) {
    //         $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
    //         $data->foto = $request->file('foto')->getClientOriginalName();
    //         $data->save();
    //     }
    //     dd($data);
    //     return redirect()->route('index')->with('success', 'Data Berhasil Ditambahkan');
    // }
    // public function editbarang($id)
    // {
    //     $data = Barang::findOrFail($id);

    //     return view('barang.editdatabarang', compact('kategori', 'data'));
    // }
    // public function updatebarang(Request $request, $id)
    // {
    //     $request->validate([
    //         'kodebarang' => ['required', Rule::unique('barangs')->ignore($id)],
    //         'foto' => 'image'
    //     ], [
    //         'kodebarang.required' => 'Kode Barang Harus diisi!',
    //         'kodebarang.unique' => 'Kode Barang Sudah Dipakai!',
    //         'foto.image' => 'Harus bertipe Gambar!'
    //     ]);
    //     $data = Barang::find($id);
    //     $data->update([
    //         'kodebarang' => $request->kodebarang,
    //         'namabarang' => $request->namabarang,
    //         'harga' => $request->harga,
    //         'hargajual' => $request->hargajual,
    //         'stok' => $request->stok

    //     ]);
    //     if ($request->hasfile('foto')) {
    //         $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
    //         $data->foto = $request->file('foto')->getClientOriginalName();
    //         $data->save();
    //     }
    //     return redirect()->route('index')->with('success', 'Data Berhasil Di Ubah');
    // }
    // public function deletese($id)
    // {
    //     $count = Barangmasuk::where('keterangan', $id)->count();
    //     $kont = Barangkeluar::where('nama_barang', $id)->count();
    //     if ($count > 0) {
    //         return back()->with('error', 'Kode Barang sedang digunakan');
    //     } elseif ($kont > 0) {
    //         return back()->with('error', 'Kode barang sedang digunakan');
    //     }
    //     $data = Barang::find($id);
    //     $data->delete();
    //     return redirect()->route('index')->with('success', 'Data Berhasil Dihapus');
    // }

    public function databarang()
    {
        $data = Barang::all();
        return view('barang.databarang', compact('data'));
    }

    public function tambahbarang()
    {
        $data = Barang::all();
        return view('barang.tambahdatabarang', compact('data'));
    }

    public function insertbarang(Request $request)
    {

        $validated = $request->validate([
            'namabarang' => 'required',
            'harga' => 'required',
            'hargajual' => 'required',
            'stok' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg,jfif,webp',
        ], [
            'namabarang.required' => 'namabarang Harus Diisi!',
            'harga.required' => 'harga Harus Diisi!',
            'hargajual.required' => 'harga Harus Diisi!',
            'stok.required' => 'stok Harus Diisi!',
            'foto.required' => 'foto Harus Diisi!',
            'foto.mimes' => 'Harus Image',
        ]);
        $data = Barang::create([
            'kodebarang' => random_int(1000, 999999),
            'namabarang' => $request->namabarang,
            'harga' => $request->harga,
            'hargajual' => $request->hargajual,
            'stok' => $request->stok,
            'foto' => $request->foto,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('databarang');
    }


    public function editbarang($id)
    {
        $data = Barang::findOrFail($id);

        return view('barang.editdatabarang', compact('data'));
    }
    public function updatebarang(request $request, $id)
    {
        $data = Barang::find($id);
        $data->update([
            'namabarang' => $request->namabarang,
            'harga' => $request->harga,
            'hargajual' => $request->hargajual,
            'stok' => $request->stok,
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
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
