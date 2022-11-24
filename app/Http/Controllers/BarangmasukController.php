<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\barangmasuk;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use App\Models\databarangmasuk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BarangmasukController extends Controller
{

    public function barangmasuk()
    {
        $data = databarangmasuk::with('supplier', 'namabarang')->get();
        $subtotal = databarangmasuk::sum('total');
        return view('masuk.barangmasuk', compact('data', 'subtotal'));
    }

    public function tampung()
    {
        $data = barangmasuk::all();
        $supplier = Supplier::all();
        $barang = barang::all();
        return view('Tampung', compact('data', 'supplier', 'barang'));
    }

    public function tambahbarangmasuk()
    {
        $data = barangmasuk::with('supplier', 'barang');
        $supplier = Supplier::all();
        $barang = barang::all();
        return view('masuk.tambah', compact('data', 'supplier', 'barang'));
    }

    public function readbarangmasuk()
    {
        $data = barangmasuk::orderBy('id', 'DESC')->with('barang', 'supplier')->get();
        $barang = Barang::all();
        $supplier = Supplier::all();
        return response()->json([
            'data' => $data,
            'barang' => $barang,
            'supplier' => $supplier,
        ]);
    }

    public function prosestambah(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'suppliers_id' => 'required',
            'barangs_id' => 'required|unique:barangmasuks',
            'jumlah' => 'required'
        ], [
            'suppliers_id.required' => 'Supplier harus diisi',
            'jumlah.required' => 'Jumlah beli harus diisi',
            'barangs_id.required' => 'Barang harus diisi',
            'barangs_id.unique' => 'Barang sudah di pilih'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()->messages(),
            ]);
        }

        $stok_nambah = Barang::find($request->barangs_id);
        $data = barangmasuk::create([
            'suppliers_id' => $request->suppliers_id,
            'barangs_id' => $request->barangs_id,
            'merk' => $request->merk,
            'kategoris_id' => $request->kategoris_id,
            'kodebarang_id' => $request->kodebarang_id,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
            'harga' => $request->harga,
        ]);
        Pengeluaran::create([
            'total' => $request->total,
            'tanggal' => Carbon::parse(now())->isoformat('D'),
            'bulan' => Carbon::parse(now())->isoformat('MMM'),
            'tahun' => Carbon::parse(now())->isoformat('Y')
        ]);




        $stok_nambah->stok += $request->jumlah;
        $stok_nambah->save();
        return response()->json([
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    public function shiftbarangmasuk()
    {
        $barangmasuk = barangmasuk::get();
        foreach ($barangmasuk as $key => $value) {
            $data = array(
                'suppliers_id' => $value->suppliers_id,
                'jumlah' => $value->jumlah,
                'harga' => $value->harga,
                'total' => $value->total,
                'kodebarang_id' => $value->kodebarang_id,
                'kategoris_id' => $value->kategoris_id,
                'barangs_id' => $value->barangs_id,
                'merk' => $value->merk,
                'created_at' => Carbon::parse(now())

            );
            databarangmasuk::insert($data);
            $deletebarangkeluar = barangmasuk::where('id', $value->id)->delete();
        }
        return redirect()->route('barangmasuk');
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


        $data->update([
            'suppliers_id' => $request->suppliers_id,
            'barangs_id' => $request->barangs_id,
            'merk' => $request->merk,
            'kategoris_id' => $request->kategoris_id,
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
        $barang = Barang::find($data->barangs_id);
        $barang->update([
            'stok' => (int) $barang->stok - $data->jumlah,
        ]);
        $data->delete();
        return response()->json();
    }
    public function deletedatabarangmasuk($id)
    {
        $data = databarangmasuk::find($id);
        $data->delete();
        return back();
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
