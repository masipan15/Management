<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Modal;
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
        $data = databarangmasuk::with('supplier', 'namabarang')->orderBy('created_at', 'DESC')->get();
        $subtotal = databarangmasuk::sum('total');
        return view('masuk.barangmasuk', compact('data', 'subtotal'));
    }

    public function laporanbarangmasuk()
    {
        $data = databarangmasuk::with('supplier', 'namabarang')->orderBy('created_at', 'DESC')->get();
        $subtotal = databarangmasuk::sum('total');
        return view('masuk.laporan', compact('data', 'subtotal'));
    }

    public function searchmasuk(Request $request)
    {
        $mulai = $request->input('mulai');
        $akhir = $request->input('akhir');
        $data = databarangmasuk::with('supplier', 'namabarang')->whereBetween(DB::raw("DATE(created_at)"), [$mulai, $akhir])->get();
        $subtotal = databarangmasuk::whereBetween(DB::raw("DATE(created_at)"), [$mulai, $akhir])->sum('total');
        return view('masuk.laporan', compact('data', 'subtotal'));
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
        $modal = Modal::sum('modal');
        $data = barangmasuk::with('supplier', 'barang');
        $supplier = Supplier::all();
        $barang = barang::all();
        return view('masuk.tambah', compact('data', 'supplier', 'barang', 'modal'));
    }

    public function readbarangmasuk()
    {
        $data = barangmasuk::orderBy('id', 'DESC')->with('barang', 'supplier')->get();
        $barang = Barang::all();
        $supplier = Supplier::all();
        $subtotal = barangmasuk::select(
            DB::raw("(sum(total)) as total")
        )->get();
        $subtotalakhir = barangmasuk::sum('total');
        return response()->json([
            'data' => $data,
            'barang' => $barang,
            'supplier' => $supplier,
            'subtotal' => $subtotal,
            'subtotalakhir' => $subtotalakhir
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
        $modal_kurang = Modal::find($request->modal);
        $subtotal = barangmasuk::sum('total');
        if ($modal_kurang->modal < $subtotal) {
            return response()->json([
                'gagal' => 'Jumlah Barang Melebihi Stok',
                'subtotal' => $subtotal
            ]);
        } else {
        $data = barangmasuk::create([
            'suppliers_id' => $request->suppliers_id,
            'barangs_id' => $request->barangs_id,
            'modal' => $request->modal,
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
        $modal_kurang->modal -= $subtotal;
        $modal_kurang->save();
    }
        $stok_nambah = Barang::find($request->barang_id);
        $stok_nambah->stok += $request->jumlah;
        $stok_nambah->save();
        $subtotal = barangmasuk::sum('total');
        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'subtotal' => $subtotal,
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


}
