<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Pemasukan;
use App\Models\transaksi;
use App\Models\barangkeluar;
use Illuminate\Http\Request;
use Mike42\Escpos\EscposImage;
use App\Models\detailtransaksi;
use App\Models\Databarangkeluar;
use Illuminate\Support\Facades\DB;
use Google\Service\ServiceControl\Auth;
use Illuminate\Support\Facades\Validator;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;

class BarangkeluarController extends Controller
{
    public function index()
    {

        $data = Databarangkeluar::with('namabarangs', 'kategori')->OrderBy('created_at', 'DESC')->get();
        $subtotal = Databarangkeluar::sum('total');
        return view('keluar.barangklr', compact('data', 'subtotal'));
    }
    public function laporanbarangkeluar()
    {

        $data = Databarangkeluar::with('namabarangs', 'kategori')->OrderBy('created_at', 'DESC')->get();
        $subtotal = Databarangkeluar::sum('total');
        return view('keluar.laporan', compact('data', 'subtotal'));
    }

    public function search(Request $request)
    {
        $mulai = $request->input('mulai');
        $akhir = $request->input('akhir');
        $data = Databarangkeluar::with('namabarangs', 'kategori')->whereBetween(DB::raw("DATE(created_at)"), [$mulai, $akhir])->orderBy('created_at', 'DESC')->get();
        $subtotal = Databarangkeluar::whereBetween(DB::raw("DATE(created_at)"), [$mulai, $akhir])->sum('total');
        return view('keluar.laporan', compact('data', 'subtotal'));
    }

    // public function records(Request $request)
    // {
    //     if ($request->ajax()) {

    //         if ($request->input('start_date') && $request->input('end_date')) {

    //             $start_date = Carbon::parse($request->input('start_date'));
    //             $end_date = Carbon::parse($request->input('end_date'));

    //             if ($end_date->greaterThan($start_date)) {
    //                 $barangkeluar = Databarangkeluar::whereBetween('created_at', [$start_date, $end_date])->get();
    //             } else {
    //                 $barangkeluar = Databarangkeluar::latest()->get();
    //             }
    //         } else {
    //             $barangkeluar = Databarangkeluar::latest()->get();
    //         }

    //         return response()->json([
    //             'barangkeluar' => $barangkeluar
    //         ]);
    //     } else {
    //         abort(403);
    //     }
    // }

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
    public function print($notransaksi)
    {
        $pelanggan = pelanggan::all();
        $transaksi = transaksi::with('notransaksis')->where('notransaksi', $notransaksi)->first();
        return view('keluar.print', compact('transaksi'));
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
            'nama_barang' => 'required|unique:barangkeluars',
            'kodebarang_keluar' => 'required',
            'merk_keluar' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
        ], [
            'nama_barang.unique' => 'Barang sudah di pilih'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()->messages(),
            ]);
        }

        $barang = Barang::find($request->nama_barang);
        $subtotal = barangkeluar::sum('total');
        if ($barang->stok < $request->jumlah) {
            return response()->json([
                'gagal' => 'Jumlah Barang Melebihi Stok',
                'subtotal' => $subtotal
            ]);
        } else {
            barangkeluar::create([

                'nama_barang' => $request->nama_barang,
                'nama_pelanggan' => $request->nama_pelanggan,
                'kodebarang_keluar' => $request->kodebarang_keluar,
                'merk_keluar' => $request->merk_keluar,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok,
                'jumlah' => $request->jumlah,
                'total' => $request->total,
            ]);


            Pemasukan::create([
                'total' => $request->total,
                'tanggal' => Carbon::parse(now())->isoformat('D'),
                'bulan' => Carbon::parse(now())->isoformat('MMM'),
                'tahun' => Carbon::parse(now())->isoformat('Y')
            ]);
            Databarangkeluar::create([

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
            $jumlahstok = $stok_kurang->stok;
            return response()->json([
                'status' => 200,
                'message' => 'barang keluar berhasil ditambahkan',
                'subtotal' => $subtotal,
                'jumlahstok' => $jumlahstok,
            ]);
        }
    }

    public function shiftbarangkeluar(Request $request)
    {
        $pelanggan = Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan
        ]);

        $transaksi = transaksi::create([
            'notransaksi' => 'KT' . date('Ymd') . random_int(1000, 9999),
            'namakasir' =>  Auth()->user()->name,
            'subtotal' =>   $request->subtotal,
            'pembayaran' =>   $request->pembayaran,
            'kembalian' =>   $request->kembalian,
        ]);
        $barangkeluar = barangkeluar::get();
        foreach ($barangkeluar as $key => $value) {
            $produk = array(
                'notransaksi_id' => $transaksi->id,
                'barang_id' => $value->nama_barang,
                'jumlah' => $value->jumlah,
                'harga' => $value->harga_jual,
                'total' => $value->total,
                'created_at' => Carbon::parse(now())

            );
            $idtransaksi = detailtransaksi::insert($produk);
            $deletebarangkeluar = barangkeluar::where('id', $value->id)->delete();
        }
        $detailbarang = detailtransaksi::where('notransaksi_id', $transaksi->id)->get();
        $mid = '+62-8214-1736-147';
        $store_name = 'ACS MultiTechnology';
        $store_address = 'Jl,SoekarnoHatta,RT03/RW01,Jambewangi,Kec.Sempu,Kab.Banyuwangi';
        $store_phone = '+62-8 214-1736-147';
        $store_email = '';
        $store_website = '';
        $tax_percentage = 10;
        $transaction_id = $transaksi->notransaksi;
        $currency = 'Rp';
        $image_path = "acs1.png";
        $pembayaran = $transaksi->pembayaran;
        $request_amount = $transaksi->pembayaran;
        $kembalian = $transaksi->kembalian;

        // Init printer
        $printer = new ReceiptPrinter;
        $printer->init(
            'windows',
            'POS-58'
        );

        // Set store info
        $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);

        // Set currency
        $printer->setCurrency($currency);

        $printer->setRequestAmount($request_amount);

        // Set request amount
        foreach ($detailbarang as $item) {
            $printer->addItem(
                $item->barangtransaksi->namabarang,
                $item->jumlah,
                $item->harga,
                $item->total
            );
        }

        $printer->setPembayaran($pembayaran);

        // Calculate total
        $printer->calculateSubTotal();
        $printer->calculateGrandTotal();

        $printer->setKembalian($kembalian);

        // Set transaction ID
        $printer->setTransactionID($transaction_id);

        // $logo = EscposImage::load(asset("fotobarang/acs.jpg"));
        // $printer->graphics($logo);

        // Set logo
        // Uncomment the line below if $image_path is defined
        // $printer->setLogo("wa.png");

        // Set QR code
        // $printer->setQRcode([
        //     'tid' => $transaction_id,
        //     'amount' => $request_amount,
        // ]);

        // Print payment request
        $printer->printReceipt();

        return back();
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

        $barang = Barang::find($data->nama_barang);
        $barang->update([
            'stok' => (int) $barang->stok + $data->jumlah,
        ]);

        $data->delete();
        $datas->delete();
        $jumlahstok =  $barang->stok;
        return response()->json([
            'status' => 400,
            'message' => 'Data berhasil dihapus',
            'subtotaldelete' => $subtotaldelete,
            'jumlahstok' => $jumlahstok,
        ]);
    }

    public function deletebarangkeluarall()
    {
        $data  = barangkeluar::query()->delete();
        return redirect()->route('tambahbarangkeluar')->with('success', 'Data berhasil dihapus');
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
