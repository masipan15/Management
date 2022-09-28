<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function datasupplier()
    {
        $data = supplier::all();
        return view('supplier.datasupplier',compact('data'));
    }


    public function tambahsupplier()
    {
        return view('supplier.tambahsupplier');
    }
    public function insertsupplier(Request $request)
    {
        $validated = $request->validate([
            'nama_supplier' => 'required',
            'alamat_supplier' => 'required',
            'notelpon' => 'required',
            'jenis_kelamin' => 'required',
        ], [
            'nama_supplier.required' => 'nama_supplier Harus Diisi!',
            'alamat_supplier.required' => 'harga Harus Diisi!',
            'notelpon.required' => 'notelpon Harus Diisi!',
            'jenis_kelamin.required' => 'jenis_kelamin Harus Diisi!',
        ]);

        $data = supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat_supplier' => $request->alamat_supplier,
            'notelpon' => $request->notelpon,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect()->route('datasupplier')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editsupplier($id)
    {
        $data = supplier::findOrFail($id);

        return view('supplier.editsupplier', compact('data'));
    }




    public function updatesupplier(request $request, $id)
    {
        $data = supplier::find($id);
        $data->update([
            'nama_supplier' => $request->nama_supplier,
            'alamat_supplier' => $request->alamat_supplier,
            'notelpon' => $request->notelpon,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect()->route('datasupplier')->with('success', 'Data berhasil di Update!');

    }

    public function deletetet($id)
    {
        $data = supplier::find($id);
        $data->delete();
        return redirect()->route('datasupplier')->with('success', 'Data Berhasil Di Hapus');
    }

}
