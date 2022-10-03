<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desain;
use App\Models\Userdesain;

class DesainController extends Controller
{
    public function index()
    {
        $data = desain::all();
        return view('desain.datadesain', compact('data'));
    }


    public function tambahdesain()
    {
        return view('desain.tambahdesain');
    }
    public function insertdesain(Request $request)
    {
        $validated = $request->validate([
            'nama_pemesan' => 'required',
            'ukuran_desain' => 'required',
            'permintaan_desain' => 'required',
            'keterangan' => 'required',
            'harga_desain' => 'required',

        ], [
            'nama_pemesan.required' => ' Harus Diisi!',
            'ukuran_desain.required' => ' Harus Diisi!',
            'permintaan_desain.required' => ' Harus Diisi!',
            'keterangan.required' => ' Harus Diisi!',
            'harga_desain.required' => 'harga Harus Diisi!',

        ]);

        $data = desain::create([
            'nama_pemesan' => $request->nama_pemesan,
            'ukuran_desain' => $request->ukuran_desain,
            'permintaan_desain' => $request->permintaan_desain,
            'keterangan' => $request->keterangan,
            'harga_desain' => $request->harga_desain,


        ]);

        Userdesain::create([
            'namapemesan' => $request->nama_pemesan,
            'ukuran' => $request->ukuran_desain,
            'permintaan' => $request->permintaan_desain,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga_desain,




        ]);
        return redirect()->route('datadesain')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editdesain($id)
    {
        $data = desain::findOrFail($id);

        return view('desain.editdesain', compact('data'));
    }




    public function updatedesain(request $request, $id)
    {
        $data = desain::find($id);
        $data->update([
            'nama_pemesan' => $request->nama_pemesan,
            'ukuran_desain' => $request->ukuran_desain,
            'permintaan_desain' => $request->permintaan_desain,
            'keterangan' => $request->keterangan,
            'harga_desain' => $request->harga_desain,
            'status_pengerjaan' => $request->status_pengerjaan,

        ]);
        return redirect()->route('datadesain')->with('success', 'Data berhasil di Update!');
    }

    public function deletes($id)
    {
        $data = desain::find($id);
        $data->delete();
        return redirect()->route('datadesain')->with('success', 'Data Berhasil Di Hapus');
    }
}
