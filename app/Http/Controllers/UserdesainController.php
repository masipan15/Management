<?php

namespace App\Http\Controllers;

use App\Models\Userdesain;
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




    public function updateuserdesain(request $request, $id)
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
        return redirect()->route('datauserdesain')->with('success', 'Data berhasil di Update!');
    }
}
