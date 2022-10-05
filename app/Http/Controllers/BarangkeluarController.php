<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Barang;
use App\Models\barangkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangkeluarController extends Controller
{
    public function index()
    {

        $data = barangkeluar::with('namabarangs','kategori')->get();
        return view('keluar.barangklr', compact('data'));
    }


    public function tambahbrgklr()
    {
        $barang = Barang::all();
        $kategori = kategori::all();
        return view('keluar.tambahbarangklr', compact('barang','kategori'));
    }
    public function insertbrgklr(Request $request)
    {

        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga_jual' => 'required',
            'jumlah' => 'required',
        ], [
            'nama_barang.required' => 'nama_barang Harus Diisi!',
            'harga_jual.required' => 'harga Harus Diisi!',
            'jumlah.required' => 'jumlah Harus Diisi!',
        ]);
        $stok_kurang = Barang::find($request->nama_barang);


        if ($stok_kurang->stok < $request->jumlah) {
            return redirect()->route('tambahbarangkeluar');
        } else {
            $data = barangkeluar::create([
                'nama_barang' => $request->nama_barang,
                'kodebarang_keluar' => $request->kodebarang_keluar,
                'merk_keluar' => $request->merk_keluar,
                'kategori_keluar' => $request->kategori_keluar,
                'harga_jual' => $request->harga_jual,
                'jumlah' => $request->jumlah,
                'total' => $request->total,
            ]); 
        }


        $stok_kurang->stok -= $request->jumlah;
        $stok_kurang->save();
        return redirect()->route('barangkeluar')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editbrgklr($id)
    {
        $data = barangkeluar::findOrFail($id);
        $barang = barang::all();
        $kategori = kategori::all();
        return view('keluar.editbarangklr', compact('data','barang','kategori'));
    }




    public function updatebrgklr(request $request, $id)
    {
        $data = barangkeluar::find($id);
        $data->update([
            'nama_barang' => $request->nama_barang,
            'kodebarang_keluar' => $request->kodebarang_keluar,
            'merk_keluar' => $request->merk_keluar,
            'kategori_keluar' => $request->kategori_keluar,
            'harga_jual' => $request->harga_jual,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);
        $stok_kurang = Barang::find($request -> nama_barang);
        $stok_kurang->stok -= $request->jumlah;
        $stok_kurang->save();
        return redirect()->route('barangkeluar')->with('success', 'Data berhasil di Update!');
    }

    public function delete($id)
    {
        $data = barangkeluar::find($id);
        $data->delete();
        return redirect()->route('barangkeluar')->with('success', 'Data Berhasil Di Hapus');
    }

    public function pemasukan()
    {
        $pemasukan = barangkeluar::select(

            DB::raw("(sum(total)) as total"),
            DB::raw("(DATE_FORMAT(created_at, '%d')) as day"),
            DB::raw("(DATE_FORMAT(created_at, '%M')) as month"),
            DB::raw("(DATE_FORMAT(created_at, '%Y')) as year")
        )
            ->orderBy('created_at')
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d')"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
            ->get();

        return view('keluar.pemasukan', compact('pemasukan'));
    }
}
