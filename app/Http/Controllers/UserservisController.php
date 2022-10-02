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




    public function updateuserservis(request $request, $id)
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
        $data = servis::find($request->namabarang);
        $data->servis::update([



            'status_pengerjaan' => $request->status,
            'harga_pengerjaan' => $request->harga,



        ]);
        return redirect()->route('datauserservis')->with('success', 'Data berhasil di Update!');
    }
}
