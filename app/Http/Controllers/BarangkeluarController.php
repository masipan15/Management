<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Pemasukan;
use App\Models\barangkeluar;
use App\Models\Databarangkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BarangkeluarController extends Controller
{
    public function index()
    {

        $data = Databarangkeluar::with('namabarangs', 'kategori')->get();
        $subtotal = Databarangkeluar::sum('total');
        return view('keluar.barangklr', compact('data', 'subtotal'));
    }
    public function tambahbrgklr(Request $request)
    {

        $data = barangkeluar::all();
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        $subtotal = barangkeluar::select(

            DB::raw("(sum(total)) as total")
        )->get();




        return view('keluar.tambahbarangklr', compact('data', 'barang', 'pelanggan', 'subtotal'));
    }

    public function print()
    {
        $barangkeluar = Barangkeluar::all();
        return view('keluar.print', compact('barangkeluar'));
    }
    public function read()
    {
        $data = barangkeluar::orderBy('id', 'DESC')->with('namabarangs')->get();
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        $subtotal = barangkeluar::select(
            DB::raw("(sum(total)) as total")
        )->get();
        $subtotalakhir = barangkeluar::sum('total');


        return response()->json([
            'data' => $data,
            'barang' => $barang,
            'pelanggan' => $pelanggan,
            'subtotal' => $subtotal,
            'subtotalakhir' => $subtotalakhir
        ]);
    }
    public function insertbrgklr(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',

            'kodebarang_keluar' => 'required',
            'merk_keluar' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        $barang = Barang::find($request->nama_barang);
        $barang = Barang::find($request->nama_barang);
        if ($barang->stok < $request->jumlahbarang) {

            return redirect('tambahbarangkeluar')->with('success', 'Jumlah Barang melebihi stok');
        } else {
            barangkeluar::create([
                'kodetransaksi' => random_int(10000, 99999),
                'nama_barang' => $request->nama_barang,
                'nama_pelanggan' => $request->nama_pelanggan,
                'kodebarang_keluar' => $request->kodebarang_keluar,
                'merk_keluar' => $request->merk_keluar,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok,
                'jumlah' => $request->jumlah,
                'total' => $request->total,
            ]);
            Pelanggan::create([
                'nama_pelanggan' => $request->nama_pelanggan,
            ]);
            Pemasukan::create([
                'total' => $request->total,
            ]);
            Databarangkeluar::create([
                'kodetransaksi' => $request->kodetransaksi,
                'nama_barang' => $request->nama_barang,
                'nama_pelanggan' => $request->nama_pelanggan,
                'kodebarang_keluar' => $request->kodebarang_keluar,
                'merk_keluar' => $request->merk_keluar,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok,
                'jumlah' => $request->jumlah,
                'total' => $request->total,
            ]);

            $stok_kurang = Barang::find($request->nama_barang);
            $stok_kurang->stok -= $request->jumlah;
            $stok_kurang->save();
            $subtotal = barangkeluar::sum('total');


            return response()->json([
                'status' => 200,
                'message' => 'barang keluar berhasil ditambahkan',
                'subtotal' => $subtotal,
            ]);
        }




        //     $data['nama_pelanggan'] = $request->nama_pelanggan;
        //     $data['nama_barang'] = $request->nama_barang;
        //     $data['kodebarang_keluar'] = $request->kodebarang_keluar;
        //     $data['merk_keluar'] = $request->merk_keluar;
        //     $data['kodetransaksi'] = random_int(10000, 999999);
        //     $data['harga_jual'] = $request->harga_jual;
        //     $data['stok'] = $request->stok;
        //     $data['jumlah'] = $request->jumlah;
        //     $data['total'] = $request->total;
        //     barangkeluar::insert($data);






    }



    public function editbrgklr($id)
    {
        $data = barangkeluar::findOrFail($id);
        $barang = barang::all();
        $pelanggan = Pelanggan::all();
        return view('keluar.editbarangklr', compact('data', 'barang', 'pelanggan'));
    }




    public function updatebrgklr(request $request, $id)
    {

        $data = barangkeluar::find($id);
        $stok_kurang = Barang::find($request->nama_barang);

        $stok_kurang->stok += $data->jumlah;
        $stok_kurang->stok -= $request->jumlah;
        $stok_kurang->save();



        $data->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'kodetransaksi' => $request->kodetransaksi,
            'nama_barang' => $request->nama_barang,
            'kodebarang_keluar' => $request->kodebarang_keluar,
            'merk_keluar' => $request->merk_keluar,

            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ]);
        $ipan = Pelanggan::find($id);
        $ipan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
        ]);


        return redirect()->route('barangkeluar')->with('success', 'Data berhasil di Update!');
    }

    public function deletebarangkeluar($id)
    {
        $data = barangkeluar::find($id);
        $subtotaldelete = barangkeluar::sum('total');
        $datas = databarangkeluar::find($id);
        $data->delete();
        $datas->delete();

        return response()->json([
            'status' => 400,
            'message' => 'Data berhasil dihapus',
            'subtotaldelete' => $subtotaldelete
        ]);
    }

    // public function pemasukan()
    // {
    //     $pemasukan = barangkeluar::select(

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

    //     return view('keluar.pemasukan', compact('pemasukan'));
    // }   git 
}
