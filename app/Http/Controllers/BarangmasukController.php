<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use App\Models\barangmasuk;
use App\Models\barangkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangmasukController extends Controller
{

    public function barangmasuk()
    {
        $data = barangmasuk::with('supplier')->get();
        $dataa = barangmasuk::with('barang')->get();
        return view('masuk.barangmasuk', compact('data','dataa'));
    }

    public function tambahbarangmasuk()
    {
        $data = barangmasuk::all();
        $supplier = Supplier::all();
        $barang = barang::all();
        return view('masuk.tambah', compact('data', 'supplier','barang'));
    }

    public function prosestambah(Request $request)
    {
        $data = barangmasuk::create([
            'suppliers_id' => $request->suppliers_id,
            'barangs_id' => $request->barangs_id,
            'merk' => $request->merk,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->total,
        ]);
        return redirect()->route('barangmasuk');
    }


    public function editbrgmsk($id)
    {
        $data = barangmasuk::findOrFail($id);
        $supplier = Supplier::all();
        $barang = barang::all();

        return view('masuk.editbrgmsk', compact('data', 'supplier','barang'));
    }




    public function updatebrgmsk(request $request, $id)
    {
       
        $data = barangmasuk::find($id);
        $data->update([
            'suppliers_id' => $request->suppliers_id,
            'barangs_id' => $request->barangs_id,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);


        return redirect()->route('barangmasuk')->with('success', 'Data berhasil di Update!');
    }


    public function deletee($id)
    {
        $data = barangmasuk::find($id);
        $data->delete();
        return redirect()->route('barangmasuk')->with('success', 'Data Berhasil Di Hapus');
    }
    public function pengeluaran()
    {
        $pengeluaran = Barangmasuk::select(

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

        return view('masuk.pengeluaran', compact('pengeluaran'));
    }

    public function shiftdata()
    {
        $ipan = barangmasuk::get();

        foreach ($ipan as $key => $value) {
            Barang::create([
                'namabarang' => $value->namabarang,
                'stok' => $value->jumlah,
                'harga' => $value->harga,

            ]);
            return 'peeler';
        }
    }
}
