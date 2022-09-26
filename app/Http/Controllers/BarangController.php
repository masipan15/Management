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
    public function databarang()
    {

        $data = Barang::all();
        return view('barang.databarang', compact('data'));
    }
    public function tambahdata()
    {
        $data = Barang::all();
        return view('barang.tambahdatabarang', compact('data'));
    }
    public function insertdata(Request $request)
    {
        $request->validate([
            'kodebarang' => 'unique:barangs',
            'namabarang' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required',
            'hargajual' => 'required',
            'rak' => 'required',




            'foto' => 'required|mimes:jpg,png,webp,jpeg',
        ], [

            'kodebarang.unique' => 'Kode Barang Sudah digunakan.',

            'foto.mimes' => 'wajib jpg,png,webp,jpeg',
        ]);
        $data = Barang::create([
            'kodebarang' => random_int(1000, 999999),
            'namabarang' => $request->namabarang,


            'harga' => $request->harga,
            'hargajual' => $request->hargajual,
            'stok' =>  '0',




            'foto' => $request->foto
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('index')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function editdata($id)
    {
        $data = Barang::findOrFail($id);

        return view('barang.editdatabarang', compact('kategori', 'data'));
    }
    public function updatedata(Request $request, $id)
    {
        $request->validate([
            'kodebarang' => ['required', Rule::unique('barangs')->ignore($id)],
            'foto' => 'image'
        ], [
            'kodebarang.required' => 'Kode Barang Harus diisi!',
            'kodebarang.unique' => 'Kode Barang Sudah Dipakai!',
            'foto.image' => 'Harus bertipe Gambar!'
        ]);
        $data = Barang::find($id);
        $data->update([
            'kodebarang' => $request->kodebarang,
            'namabarang' => $request->namabarang,


            'harga' => $request->harga,
            'hargajual' => $request->hargajual,
            'stok' => $request->stok

        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('index')->with('success', 'Data Berhasil Di Ubah');
    }
    public function delete($id)
    {
        $count = Barangmasuk::where('keterangan', $id)->count();
        $kont = Barangkeluar::where('nama_barang', $id)->count();
        if ($count > 0) {
            return back()->with('error', 'Kode Barang sedang digunakan');
        } elseif ($kont > 0) {
            return back()->with('error', 'Kode barang sedang digunakan');
        }
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('index')->with('success', 'Data Berhasil Dihapus');
    }
}
