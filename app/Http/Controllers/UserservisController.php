<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\desain;
use App\Models\servis;
use App\Models\servisselesai;
use App\Models\Pemasukan;
use App\Models\Userservis;
use App\Models\barangkeluar;
use Illuminate\Http\Request;

class UserservisController extends Controller
{
    public function datauserservis()
    {
        $data = Userservis::all();
        return view('userservis.datauserservis', compact('data'));
    }

    public function edituserservis($id)
    {
        $data = Userservis::findOrFail($id);

        return view('userservis.editservis', compact('data'));
    }




    public function updateuserservis(Request $request, $id)
    {
        $data = Userservis::find($id);


        $tanggal = Carbon::parse(now())->isoformat('DD');
        $bulan = Carbon::parse(now())->isoformat('MMMM');
        $tahun = Carbon::parse(now())->isoformat('Y');
        $pemasukan = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun)->first();

        $hariini = Carbon::parse(now())->isoformat('Y-M-DD');
        $barangkeluar = barangkeluar::where('created_at', $hariini)->sum('total');
        $desain = desain::where('created_at', $hariini)->sum('harga_desain');
        $servis = servis::where('created_at', $hariini)->sum('biaya_pengerjaan');
        $hasilakhir = $request->biaya - $data->biaya;
        if ($pemasukan) {
            $update = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun);
            $update->update([
                'total' => $barangkeluar + $hasilakhir + $desain + $servis,
            ]);
        }

        $data->update([
            'namapelanggan' => $request->namapelanggan,
            'namabarang' => $request->namabarang,
            'merk' => $request->merk,
            'kerusakan' => $request->kerusakan,
            'biaya' => $request->biaya,
            'status' => $request->status,
        ]);

        $ipan = servis::find($id);
        $ipan->update([
            'status_pengerjaan' => $request->status,
            'biaya_pengerjaan' => $request->biaya
        ]);
        return redirect()->route('datauserservis')->with('success', 'Data berhasil di Update!');
    }


    public function dataservisselesai()
    {
        $data = servisselesai::all();
        // dd($data);s
        return view('penyelesaian.dataservisselesai', compact('data'));
    }

    public function masukservisselesai($id)
    {
        $data = Userservis::find($id);
        $tes=  servisselesai::create([
            'namapelanggan' => $data->namapelanggan,
            'namabarang' => $data->namabarang,
            'merk' => $data->merk,
            'kerusakan' => $data->kerusakan,
            'biaya' => $data->biaya,
            'status' => $data->status,
        ]);
        // dd($tes);    
        return redirect()->route('datauserservis')->with('success', 'Data Sudah Selesai');
    }

    public function hapusservisselesai($id)
    {
        $data = servisselesai::find($id);
        $data->delete();
        return redirect()->route('dataservisselesai')->with('success', 'Data Berhasil Di Hapus');
    }


    // public function servisselesai($id)
    // {
    //     $data = servisselesai::findOrFail($id);

    //     return view('servisselesai.servisselesai', compact('data'));
    // }
    // public function updateservisselesai(request $request, $id)
    // {
    //     $data = servisselesai::find($id);
    //     $data->update([
    //         'servisselesai' => $request->servisselesai,
    //     ]);
    //     return redirect()->route('dataservisselesai')->with('success', 'Data berhasil di Update!');
    // }
}
