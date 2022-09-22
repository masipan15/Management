<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desain;

class DesainController extends Controller
{
    public function index()
    {
        $data = desain::all();
        return view('desain.datadesain',compact('data'));
    }
    
    
    public function tambahdesain()
    {
        return view('desain.tambahdesain');
    }
    public function insertdesain(Request $request)
    {
        $validated = $request->validate([
            'permintaan_desain' => 'required',
            'harga_desain' => 'required',
            'status_pengerjaan' => 'required',
            'tgl_pemesan_desain' => 'required',
        ], [
            'permintaan_desain.required' => ' Harus Diisi!',
            'harga_desain.required' => 'harga Harus Diisi!',
            'status_pengerjaan.required' => 'status_pengerjaan Harus Diisi!',
            'tgl_pemesan_desain.required' => 'status_pengerjaan Harus Diisi!',
        ]);

        $data = desain::create([
            'permintaan_desain' => $request->permintaan_desain,
            'harga_desain' => $request->harga_desain,
            'status_pengerjaan' => $request->status_pengerjaan,
            'tgl_pemesan_desain' => $request->tgl_pemesan_desain,
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
            'permintaan_desain' => $request->permintaan_desain,
            'harga_desain' => $request->harga_desain,
            'status_pengerjaan' => $request->status_pengerjaan,
            'tgl_pemesan_desain' => $request->tgl_pemesan_desain,
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
