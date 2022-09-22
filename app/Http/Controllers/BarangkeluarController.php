<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangkeluar;

class BarangkeluarController extends Controller
{
    public function index()
    {
        $data = barangkeluar::all();
        return view('keluar.barangklr',compact('data'));
    }
    
    
    public function tambahbrgklr()
    {
        return view('keluar.tambahbarangklr');
    }
    public function insertbrgklr(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga_jual' => 'required',
            'jumlah' => 'required',
        ], [
            'nama_barang.required' => 'nama_barang Harus Diisi!',
            'harga_jual.required' => 'harga Harus Diisi!',
            'jumlah.required' => 'jumlah Harus Diisi!',
        ]);

        $data = barangkeluar::create([
            'nama_barang' => $request->nama_barang,
            'harga_jual' => $request->harga_jual,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);
        return redirect()->route('barangkeluar')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editbrgklr($id)
    {
        $data = barangkeluar::findOrFail($id);

        return view('keluar.editbarangklr', compact('data'));
    }




    public function updatebrgklr(request $request, $id)
    {
        $data = barangkeluar::find($id);
        $data->update([
            'nama_barang' => $request->nama_barang,
            'harga_jual' => $request->harga_jual,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);
        return redirect()->route('barangkeluar')->with('success', 'Data berhasil di Update!');
        
    }

    public function delete($id)
    {
        $data = barangkeluar::find($id);
        $data->delete();
        return redirect()->route('barangkeluar')->with('success', 'Data Berhasil Di Hapus');
    }

}
