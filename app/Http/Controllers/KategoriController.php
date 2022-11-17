<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class kategoriController extends Controller
{
    public function index()
    {
        $data = kategori::all();
        return view('kategori.datakategori', compact('data'));
    }



    public function tambahkategori()
    {
        return view('kategori.tambahkategori');
    }
    public function insertkategori(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required',
        ], [
            'kategori.required' => 'kategori Harus Diisi!',
        ]);

        $data = kategori::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('datakategori')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editkategori($id)
    {
        $data = kategori::findOrFail($id);

        return view('kategori.editkategori', compact('data'));
    }




    public function updatekategori(request $request, $id)
    {
        $data = kategori::find($id);
        $data->update([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('datakategori')->with('success', 'Data berhasil di Update!');
    }



    // public function hapusktgr($id)
    // {
    //     $data = kategori::find($id);
    //     $data->delete();
    //     return redirect()->route('datakategori')->with('success', 'Data Berhasil Di Hapus');
    // }

    public $delete_id;

    protected $Listeners = ['deleteConfirmed'=>'hapusktgr'];
     
    public function deleteConfirmation($id)
    {
        try {
            $kategori = kategori::find($id);
            $kategori->delete();
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1451) {
                return to_route('datakategori')->with('error', 'Data masih digunakan');
            }
        }
        return redirect()->route('datakategori')->with('success', 'Data Berhasil Di Hapus');
    }
}
