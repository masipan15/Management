<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Barang;

use App\Models\Kategori;
use App\Models\Barangmasuk;
use App\Models\Barangkeluar;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class BarangController extends Controller
{

    public function databarang()
    {
        $data = Barang::orderBy('id', 'DESC')->with('kategori')->get();

        return view('barang.databarang', compact('data'));
    }

    public function tambahbarang()
    {
        $data = Barang::all();
        $kategori = kategori::all();
        return view('barang.tambahdatabarang', compact('data', 'kategori'));
    }

    public function insertbarang(Request $request)
    {
        $validated = $request->validate([
            'kategoris_id' => 'required',
            'namabarang' => 'required',
            'merk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'hargajual' => 'required',
            'foto1' => 'required',
        ], [
            'kategoris_id.required' => 'kategori Harus Diisi!',
            'namabarang.required' => 'namabarang Harus Diisi!',
            'merk.required' => 'merk Harus Diisi!',
            'deskripsi.required' => 'deskripsi Harus Diisi!',
            'harga.required' => 'harga Harus Diisi!',
            'hargajual.required' => 'harga Harus Diisi!',
            'stok.required' => 'stok Harus Diisi!',
            'foto1.required' => 'foto1 Harus Diisi!',
        ]);

        $images = array();

        $namabarang = $request->namabarang;
        $kategoris_id = $request->kategoris_id;
        $merk = $request->merk;
        $harga = $request->harga;
        $hargajual = $request->hargajual;
        $deskripsi = $request->deskripsi;


        if ($files = $request->file('foto1')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('fotobarang/', $name);
                $images[] = $name;
            }
        }

        for ($i = 0; $i < count($namabarang) - 1; $i++) {
            $data = Barang::insert([
                'kodebarang' => random_int(10000, 999999),
                'namabarang' => $namabarang[$i],
                'kategoris_id' => $kategoris_id[$i],
                'merk' => $merk[$i],
                'stok' => 0,
                'harga' => $harga[$i],
                'hargajual' => $hargajual[$i],
                'deskripsi' => $deskripsi[$i],
                'foto1' => $images[$i],
            ]);
        }

        return redirect()->route('databarang')->with('success', 'Data berhasil di Tambahkan');;
    }


    public function editbarang($id)
    {
        $data = Barang::findOrFail($id);
        $kategori = kategori::all();

        return view('barang.editdatabarang', compact('data', 'kategori'));
    }
    public function updatebarang(request $request, $id)
    {
        $data = Barang::find($id);
        $data->update([
            'kategoris_id' => $request->kategoris_id,
            'namabarang' => $request->namabarang,
            'merk' => $request->merk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'hargajual' => $request->hargajual,
            'stok' => $request->stok,
        ]);


        if ($request->hasfile('foto1')) {
            $request->file('foto1')->move('fotobarang/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('databarang')->with('success', 'Data berhasil di Update!');
    }


    public function deletese($id)
    {
        try {
            $data = Barang::find($id);
            $data->delete();
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1451) {
                return to_route('databarang')->with('error', 'Data masih digunakan');
            }
            return redirect()->route('databarang')->with('success', 'Data Berhasil Di Hapus');
        }
    }

    public function show(Request $request, $id)
    {
        $ipan = Barang::find($id);
        return view('databarang', compact('ipan'));
    }
}
