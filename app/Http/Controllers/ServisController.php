<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servis;
use App\Models\Userservis;

class ServisController extends Controller
{
    public function dataservis()
    {
        $data = servis::all();
        return view('servis.dataservis', compact('data'));
    }


    public function tambahservis()
    {
        return view('servis.tambahservis');
    }
    public function insertservis(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'nama_barang' => 'required',
            'merk_barang' => 'required',
            'kerusakan_barang' => 'required',


        ], [
            'nama_pelanggan.required' => ' Harus Diisi!',
            'nama_barang.required' => ' Harus Diisi!',
            'merk_barang.required' => ' Harus Diisi!',
            'status_pengerjaan.required' => ' Harus Diisi!',
            'kerusakan_barang.required' => ' Harus Diisi!',

        ]);

        $data = servis::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'kerusakan_barang' => $request->kerusakan_barang,
            'status_pengerjaan' => $request->status_pengerjaan,

        ]);
        Userservis::create([
            'namapelanggan' => $request->nama_pelanggan,
            'namabarang' => $request->nama_barang,
            'merk' => $request->merk_barang,
            'kerusakan' => $request->kerusakan_barang,
            'status' => $request->status_pengerjaan,



        ]);



        return redirect()->route('dataservis')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editservis($id)
    {
        $data = servis::findOrFail($id);

        return view('servis.editservis', compact('data'));
    }




    public function updateservis(request $request, $id)
    {
        $data = servis::find($id);
        $data->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'kerusakan_barang' => $request->kerusakan_barang,
            'status_pengerjaan' => $request->status_pengerjaan,
           
        ]);
        return redirect()->route('dataservis')->with('success', 'Data berhasil di Update!');
    }

    public function deletet($id)
    {
        $data = servis::find($id);
        $data->delete();
        return redirect()->route('dataservis')->with('success', 'Data Berhasil Di Hapus');
    }
}
