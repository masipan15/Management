<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\barangmasuk;
use App\Models\barangkeluar;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangmasukController extends Controller
{

    public function barangmasuk()
    {
        $data = barangmasuk::with('supplier')->get();
        $dataa = barangmasuk::with('barang')->get();
        return view('masuk.barangmasuk', compact('data', 'dataa'));
    }

    public function tambahbarangmasuk()
    {
        $data = barangmasuk::all();
        $supplier = Supplier::all();
        $barang = barang::all();
        return view('masuk.tambah', compact('data', 'supplier', 'barang'));
    }

    public function prosestambah(Request $request)
    {
        $validated = $request->validate([
            'suppliers_id' => 'required',
            'barangs_id' => 'required',
            'jumlah' => 'required',
        ], [
            'suppliers_id.required' => 'supplier Harus Diisi!',
            'barangs_id.required' => 'barang Harus Diisi!',
            'jumlah.required' => 'jumlah Harus Diisi!',
        ]);
        $stok_nambah = Barang::find($request->barangs_id);
        $tanggal = Carbon::parse(now())->isoformat('DD');
        $bulan = Carbon::parse(now())->isoformat('MMMM');
        $tahun = Carbon::parse(now())->isoformat('Y');
        $pengeluaran = Pengeluaran::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun)->first();

        $hariini = Carbon::parse(now())->isoformat('Y-M-DD');
        $barangmasuk = barangmasuk::where('created_at', $hariini)->sum('total');
        




        $data = barangmasuk::create([
            'suppliers_id' => $request->suppliers_id,
            'barangs_id' => $request->barangs_id,
            'merk' => $request->merk,
            'kategoris_id' => $request->kategoris_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->total,
            'created_at' => Carbon::parse(now())->isoformat('Y-M-DD')
        ]);

        if (!$pengeluaran) {
            Pengeluaran::create([
                'tanggal' => $tanggal,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'total' => $barangmasuk + $request->total
            ]);
        } else {
            $update = Pengeluaran::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun);
            $update->update([
                'total' => $barangmasuk + $request->total
            ]);
        }
        $stok_nambah->stok += $request->jumlah;
        $stok_nambah->save();
        return redirect()->route('barangmasuk')->with('success', 'Data berhasil di Tambahkan');;
    }


    public function editbrgmsk($id)
    {
        $data = barangmasuk::findOrFail($id);
        $supplier = Supplier::all();
        $barang = barang::all();

        return view('masuk.editbrgmsk', compact('data', 'supplier', 'barang'));
    }




    public function updatebrgmsk(request $request, $id)
    {

        $data = barangmasuk::find($id);
        $stok_nambah = Barang::find($request->barangs_id);


        $stok_nambah = Barang::find($request->barangs_id);
        $stok_nambah->stok -= $data->jumlah;
        $stok_nambah->stok += $request->jumlah;
        $stok_nambah->save();

        $tanggal = Carbon::parse(now())->isoformat('DD');
        $bulan = Carbon::parse(now())->isoformat('MMMM');
        $tahun = Carbon::parse(now())->isoformat('Y');
        $pengeluaran = Pengeluaran::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun)->first();

        $hariini = Carbon::parse(now())->isoformat('Y-M-DD');
        $barangmasuk = barangmasuk::where('created_at', $hariini)->sum('total');
        $hasilakhir = $request->total - $data->total;

        $data->update([
            'suppliers_id' => $request->suppliers_id,
            'barangs_id' => $request->barangs_id,
            'merk' => $request->merk,
            'kategoris_id' => $request->kategoris_id,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);

        if ($pengeluaran) {
            $update = Pengeluaran::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun);
            $update->update([
                'total' => $barangmasuk + $hasilakhir
            ]);
        }




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
    // public function pengeluaran()
    // {
    //     $pengeluaran = Barangmasuk::select(

    //         DB::raw("(sum(total)) as total"),
    //         DB::raw("(DATE_FORMAT(created_at, '%d')) as day"),
    //         DB::raw("(DATE_FORMAT(created_at, '%M')) as month"),
    //         DB::raw("(DATE_FORMAT(created_at, '%Y')) as year")
    //     )
    //         ->orderBy('created_at')
    //         ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d')"))
    //         ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))
    //         ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
    //         ->get();

    //     return view('masuk.pengeluaran', compact('pengeluaran'));
    // }


}
