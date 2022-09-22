<?php

namespace App\Http\Controllers;

use App\Models\barangmasuk;
use Illuminate\Http\Request;

class BarangmasukController extends Controller
{

    public function barangmasuk()
    {
        $data = barangmasuk::all();
        return view('masuk.barangmasuk', compact('data'));
    }

    public function tambahbarangmasuk()
    {
        $data = barangmasuk::all();
        return view('masuk.tambah', compact('data'));
    }

    public function prosestambah(Request $request)
    {
        $data = barangmasuk::create([
            'namabarang' => $request->namabarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->total,
            'foto' => $request->foto,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotobrgmsk/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('barangmasuk');
    }


    public function editbrgmsk($id)
    {
        $data = barangmasuk::findOrFail($id);

        return view('masuk.editbrgmsk', compact('data'));
    }




    public function updatebrgmsk(request $request, $id)
    {
        $data = barangmasuk::find($id);
        $data->update([
            'namabarang' => $request->namabarang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotobrgmsk/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('barangmasuk')->with('success', 'Data berhasil di Update!');
    }


    public function deletee($id)
    {
        $data = barangmasuk::find($id);
        $data->delete();
        return redirect()->route('barangmasuk')->with('success', 'Data Berhasil Di Hapus');
    }
}
