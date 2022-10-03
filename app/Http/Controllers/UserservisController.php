<?php

namespace App\Http\Controllers;

use App\Models\servis;
use App\Models\Userservis;
use Illuminate\Http\Request;

class UserservisController extends Controller
{
    public function datauserservis()
    {
        $data = Userservis::all();
        return view('userservis.datauserservis', compact('data'));
    }

    public function edituserservis($id)
    {
        $data = Userservis::findOrFail($id);

        return view('userservis.editservis', compact('data'));
    }




    public function updateuserservis(Request $request, $id)
    {
        $data = Userservis::find($id);
        $data->update([
            'namapelanggan' => $request->namapelanggan,
            'namabarang' => $request->namabarang,
            'merk' => $request->merk,
            'kerusakan' => $request->kerusakan,
            'status' => $request->status,
            'biaya' => $request->biaya,
        ]);

        $ipan = servis::find($id);
        $ipan->update([
            'status_pengerjaan' => $request->status,
            'biaya_pengerjaan' => $request->biaya
        ]);


        return redirect()->route('datauserservis')->with('success', 'Data berhasil di Update!');
    }
}
