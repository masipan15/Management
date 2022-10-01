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
    //         'foto1' => 'required|mimes:jpg,png,webp,jpeg',
    //     ], [

    //         'kodebarang.unique' => 'Kode Barang Sudah digunakan.',

    //         'foto1.mimes' => 'wajib jpg,png,webp,jpeg',
    //     ]);
    //     $data = Barang::create([
    //         'kodebarang' => random_int(1000, 999999),
    //         'namabarang' => $request->namabarang,
    //         'harga' => $request->harga,
    //         'hargajual' => $request->hargajual,
    //         'stok' =>  $request->hargajual,
    //         'foto1' => $request->foto1
    //     ]);
    //     if ($request->hasfile('foto1')) {
    //         $request->file('foto1')->move('fotobarang/', $request->file('foto1')->getClientOriginalName());
    //         $data->foto1 = $request->file('foto1')->getClientOriginalName();
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
    //         'foto1' => 'image'
    //     ], [
    //         'kodebarang.required' => 'Kode Barang Harus diisi!',
    //         'kodebarang.unique' => 'Kode Barang Sudah Dipakai!',
    //         'foto1.image' => 'Harus bertipe Gambar!'
    //     ]);
    //     $data = Barang::find($id);
    //     $data->update([
    //         'kodebarang' => $request->kodebarang,
    //         'namabarang' => $request->namabarang,
    //         'harga' => $request->harga,
    //         'hargajual' => $request->hargajual,
    //         'stok' => $request->stok

    //     ]);
    //     if ($request->hasfile('foto1')) {
    //         $request->file('foto1')->move('fotobarang/', $request->file('foto1')->getClientOriginalName());
    //         $data->foto1 = $request->file('foto1')->getClientOriginalName();
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
            'kategori' => 'required',
            'namabarang' => 'required',
            'merk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'hargajual' => 'required',
            'stok' => 'required',
            'foto1' => 'required|mimes:jpg,png,jpeg,jfif,webp',
        ], [
            'kategori.required' => 'kategori Harus Diisi!',
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
            'kategori' => $request->kategori,
            'namabarang' => $request->namabarang,
            'merk' => $request->merk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'hargajual' => $request->hargajual,
            'stok' => $request->stok,
            'foto1' => $request->foto1,
        ]);
        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('fotobarang/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
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
            'kodebarang' => random_int(1000, 99999),
            'kategori' => $request->kategori,
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
