<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\desain;
use App\Models\servis;
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
            'status' => $request->status,
            'biaya' => $request->biaya,
        ]);

        $ipan = servis::find($id);
        $ipan->update([
            'status_pengerjaan' => $request->status,
            'biaya_pengerjaan' => $request->biaya
        ]);




        return redirect()->route('datauserservis')->with('success', 'Data berhasil di Update!');
    }
}
