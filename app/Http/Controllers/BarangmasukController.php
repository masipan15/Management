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
            'total' => $request->total
        ]);
        return redirect()->route('barangmasuk');
    }
}
