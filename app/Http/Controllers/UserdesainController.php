<?php

namespace App\Http\Controllers;

use App\Models\desain;
use App\Models\Userdesain;
use App\Models\penyelesaian;
use Illuminate\Http\Request;

class UserdesainController extends Controller
{
    public function datauserdesain()
    {
        $data = Userdesain::all();
        return view('userdesain.datauserdesain', compact('data'));
    }

    public function edituserdesain($id)
    {
        $data = Userdesain::findOrFail($id);

        return view('userdesain.edituserdesain', compact('data'));
    }




    public function updateuserdesain(Request $request, $id)
    {
        $data = Userdesain::find($id);
        $data->update([
            'namapemesan' => $request->namapemesan,
            'permintaan' => $request->permintaan,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'ukuran' => $request->ukuran,
            'status' => $request->status,
        ]);

        $ipan = desain::find($id);
        $ipan->update([
            'status_pengerjaan' => $request->status,
            'harga_desain' => $request->harga
        ]);
        return redirect()->route('datauserdesain')->with('success', 'Data berhasil di Update!');
    }




    public function datapenyelesaiandesain()
    {
        $data = penyelesaian::all();
        // dd($data);s
        return view('penyelesaian.datapenyelesaiandesain', compact('data'));
    }

    public function masukpenyelesaiandesain($id)
    {
        $data = Userdesain::find($id);
        $tes=  penyelesaian::create([
            'namapemesan' => $data->namapemesan,
            'permintaan' => $data->permintaan,
            'harga' => $data->harga,
            'keterangan' => $data->keterangan,
            'ukuran' => $data->ukuran,
            'status' => $data->status,
        ]);
        // dd($tes);    
        return redirect()->route('datauserdesain')->with('success', 'Data Sudah Selesai');
    }

    public function hapuspenyelesaian($id)
    {
        $data = penyelesaian::find($id);
        $data->delete();
        return redirect()->route('datapenyelesaiandesain')->with('success', 'Data Berhasil Di Hapus');
    }
}
