<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\servis;
use App\Models\Pemasukan;
use App\Models\servisselesai;
// use App\Models\Userservis;
use App\Models\barangkeluar;
use App\Models\desain;
use App\Models\detailservis;
use App\Models\pelanggan;
use App\Models\servis_selesai;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function dataservis()
    {
        $data = servis::orderBy('id', 'DESC')->get();
        return view('servis.dataservis', compact('data'));
    }
    public function servis_selesai()
    {
        $data = servis_selesai::orderBy('id', 'DESC')->get();
        return view('servis.servis_selesai', compact('data'));
    }


    public function tambahservis()
    {
        return view('servis.tambahservis');
    }
    public function insertservis(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'nama_barang' => 'required',
            'merk_barang' => 'required',
            'kerusakan_barang' => 'required',
            'fotos' => 'required|mimes:jpg,png,jpeg,jfif,webp',

        ], [
            'nama_pelanggan.required' => ' Harus Diisi!',
            'nama_barang.required' => ' Harus Diisi!',
            'merk_barang.required' => ' Harus Diisi!',
            'kerusakan_barang.required' => ' Harus Diisi!',
            'fotos.required' => 'foto Harus Diisi!',
            'fotos.mimes' => 'Harus Image',
        ]);




        $data = servis::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'kerusakan_barang' => $request->kerusakan_barang,
            'status_pengerjaan' => $request->status_pengerjaan,
            'fotos' => $request->fotos,
            'created_at' => Carbon::parse(now())->isoformat('Y-M-DD')

        ]);
        if ($request->hasFile('fotos')) {
            $request->file('fotos')->move('fotoservis/', $request->file('fotos')->getClientOriginalName());
            $data->fotos = $request->file('fotos')->getClientOriginalName();
            $data->save();
        }

        pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
        ]);




        return redirect()->route('dataservis')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function printdataservis($notransaksi_id)
    {
        $pelanggan = pelanggan::all();
        $transaksi = detailservis::where('notransaksi_id', $notransaksi_id)->first();
        return view('servis.printdataservis', compact('transaksi'));
    }

    public function shiftdataservis($id)
    {
        $servis = servis::find($id);
        $transaksi = detailservis::create([
            'notransaksi_id' => 'KT' . date('Ymd') . random_int(1000, 9999),
            'peservis' => Auth()->user()->name,
            'pemesan' => $servis->nama_pelanggan,
            'namabarang' => $servis->nama_barang,
            'status' => $servis->status_pengerjaan,
            'kerusakan' => $servis->kerusakan_barang,
            'merk' => $servis->merk_barang,
            'created_at' => Carbon::parse(now())
        ]);
        return redirect()->to('/printdataservis/' . $transaksi->notransaksi_id);
    }
    public function shiftdataservis_selesai($id)
    {
        $servis = servis_selesai::find($id);
        $transaksi = detailservis::create([
            'notransaksi_id' => 'KT' . date('Ymd') . random_int(1000, 9999),
            'peservis' => Auth()->user()->name,
            'pemesan' => $servis->nama_pelanggan,
            'namabarang' => $servis->nama_barang,
            'status' => $servis->status_pengerjaan,
            'kerusakan' => $servis->kerusakan_barang,
            'merk' => $servis->merk_barang,
            'biaya' => $servis->biaya_pengerjaan,
            'created_at' => Carbon::parse(now())
        ]);
        return redirect()->to('/printdataservis/' . $transaksi->notransaksi_id);
    }



    public function editservis($id)
    {
        $data = servis::findOrFail($id);

        return view('servis.editservis', compact('data'));
    }
    public function editservis_selesai($id)
    {
        $data = servis_selesai::findOrFail($id);

        return view('servis.editservis_selesai', compact('data'));
    }




    public function updateservis(request $request, $id)
    {
        $data = servis::find($id);
        if ($request->status_pengerjaan == 'Selesai') {
            $ipan =  servis_selesai::create([
                'nama_pelanggan' => $request->nama_pelanggan,
                'namaservis' => $request->namaservis,
                'nama_barang' => $request->nama_barang,
                'merk_barang' => $request->merk_barang,
                'status_pengerjaan' => $request->status_pengerjaan,
                'kerusakan_barang' => $request->kerusakan_barang,
                'biaya_pengerjaan' => $request->biaya_pengerjaan,
                'fotos' => $data->fotos,
            ]);

            servis::find($id)->delete();
        } else {
            $data->update([
                'nama_pelanggan' => $request->nama_pelanggan,
                'namaservis' => $request->namaservis,
                'nama_barang' => $request->nama_barang,
                'merk_barang' => $request->merk_barang,
                'status_pengerjaan' => $request->status_pengerjaan,
                'kerusakan_barang' => $request->kerusakan_barang,
                'biaya_pengerjaan' => $request->biaya_pengerjaan,
            ]);
            if ($request->hasFile('fotos')) {
                $request->file('fotos')->move('fotoservis/', $request->file('fotos')->getClientOriginalName());
                $data->fotos = $request->file('fotos')->getClientOriginalName();
                $data->save();
            }
        }

        return redirect()->route('dataservis')->with('success', 'Data berhasil di Update!');
    }

    public function deletet($id)
    {
        $data = servis::find($id);
        $data->delete();
        return redirect()->route('dataservis')->with('success', 'Data Berhasil Di Hapus');
    }
}
