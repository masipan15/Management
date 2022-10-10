<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\servis;
use App\Models\Pemasukan;
use App\Models\servisselesai;
// use App\Models\Userservis;
use App\Models\barangkeluar;
use App\Models\desain;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function dataservis()
    {
        $data = servis::all();
        return view('servis.dataservis', compact('data'));
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


        $tanggal = Carbon::parse(now())->isoformat('DD');
        $bulan = Carbon::parse(now())->isoformat('MMMM');
        $tahun = Carbon::parse(now())->isoformat('Y');
        $pemasukan = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun)->first();

        $hariini = Carbon::parse(now())->isoformat('Y-M-DD');
        $barangkeluar = barangkeluar::where('created_at', $hariini)->sum('total');
        $desain = desain::where('created_at', $hariini)->sum('harga_desain');
        $servis = servis::where('created_at', $hariini)->sum('biaya_pengerjaan');
        if (!$pemasukan) {
            Pemasukan::create([
                'tanggal' => $tanggal,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'total' => $barangkeluar + $request->biaya_pengerjaan + $desain + $servis,
            ]);
        } else {
            $update = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun);
            $update->update([
                'total' => $barangkeluar + $request->biaya_pengerjaan + $desain + $servis,
            ]);
        }

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
        // Userservis::create([
        //     'namapelanggan' => $request->nama_pelanggan,
        //     'namaservis' => $request->namaservis,
        //     'namabarang' => $request->nama_barang,
        //     'merk' => $request->merk_barang,
        //     'kerusakan' => $request->kerusakan_barang,
        //     'status' => $request->status_pengerjaan,



        // ]);



        return redirect()->route('dataservis')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editservis($id)
    {
        $data = servis::findOrFail($id);

        return view('servis.editservis', compact('data'));
    }




    public function updateservis(request $request, $id)
    {
        $data = servis::find($id);

        $tanggal = Carbon::parse(now())->isoformat('dddd');
        $bulan = Carbon::parse(now())->isoformat('MMMM');
        $tahun = Carbon::parse(now())->isoformat('Y');
        $pemasukan = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun)->first();

        $hariini = Carbon::parse(now())->isoformat('Y-M-DD');
        $barangkeluar = barangkeluar::where('created_at', $hariini)->sum('total');
        $desain = desain::where('created_at', $hariini)->sum('harga_desain');
        $servis = servis::where('created_at', $hariini)->sum('biaya_pengerjaan');
        $hasilakhir = $request->biaya_pengerjaan - $data->biaya_pengerjaan;
        if ($pemasukan) {
            $update = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun);
            $update->update([
                'total' => $barangkeluar + $hasilakhir + $desain + $servis,
            ]);
        }

        $data->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'namaservis' => $request->namaservis,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'kerusakan_barang' => $request->kerusakan_barang,
            'biaya_pengerjaan' => $request->biaya_pengerjaan,
        ]);
        if ($request->hasfile('fotos')) {
            $request->file('fotos')->move('fotobarang/', $request->file('fotos')->getClientOriginalName());
            $data->fotos = $request->file('fotos')->getClientOriginalName();
            $data->save();
        }
       
        // $ipan = Userservis::findorfail($id);
        // $ipan->update([
        //     'namapelanggan' => $request->nama_pelanggan,
        //     'namaservis' => $request->namaservis,
        //     'namabarang' => $request->nama_barang,
        //     'merk' => $request->merk_barang,
        //     'kerusakan' => $request->kerusakan_barang,
        // ]);


        return redirect()->route('dataservis')->with('success', 'Data berhasil di Update!');
    }

    public function deletet($id)
    {
        $data = servis::find($id);
        $data->delete();
        return redirect()->route('dataservis')->with('success', 'Data Berhasil Di Hapus');
    }


    public function dataservisselesai()
    {
        $data = servisselesai::all();
        // dd($data);s
        return view('penyelesaian.dataservisselesai', compact('data'));
    }

    public function masukservisselesai($id)
    {
        $data = servis::findOrFail($id);
        $tes=  servisselesai::create([
            'nama_pelanggan' => $data->nama_pelanggan,
            'namaservis' => $data->namaservis,
            'nama_barang' => $data->nama_barang,
            'merk_barang' => $data->merk_barang,
            'kerusakan_barang' => $data->kerusakan_barang,
            'biaya_pengerjaan' => $data->biaya_pengerjaan,
        ]);
        // dd($tes);    
        return redirect()->route('dataservis')->with('success', 'Data Sudah Selesai');
    }

    public function hapusservisselesai($id)
    {
        $data = servisselesai::find($id);
        $data->delete();
        return redirect()->route('dataservisselesai')->with('success', 'Data Berhasil Di Hapus');
    }
}
