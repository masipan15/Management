<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\desain;
use App\Models\penyelesaian;
use App\Models\Pemasukan;
// use App\Models\Userdesain;
use App\Models\barangkeluar;
use App\Models\servis;
use Illuminate\Http\Request;

class DesainController extends Controller
{
    public function index()
    {
        $data = desain::all();
        return view('desain.datadesain', compact('data'));
    }


    public function tambahdesain()
    {
        return view('desain.tambahdesain');
    }
    public function insertdesain(Request $request)
    {
        $validated = $request->validate([
            'nama_pemesan' => 'required',
            'ukuran_desain' => 'required',
            'permintaan_desain' => 'required',
            'keterangan' => 'required',

        ], [
            'nama_pemesan.required' => ' Harus Diisi!',
            'ukuran_desain.required' => ' Harus Diisi!',
            'permintaan_desain.required' => ' Harus Diisi!',
            'keterangan.required' => ' Harus Diisi!',

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
                'total' => $barangkeluar + $request->harga_desain + $desain + $servis,
            ]);
        } else {
            $update = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun);
            $update->update([
                'total' => $barangkeluar + $request->harga_desain + $desain + $servis,
            ]);
        }
        $data = desain::create([
            'nama_pemesan' => $request->nama_pemesan,
            'ukuran_desain' => $request->ukuran_desain,
            'permintaan_desain' => $request->permintaan_desain,
            'keterangan' => $request->keterangan,
            'status_pengerjaan' => $request->status_pengerjaan,
            'created_at' => Carbon::parse(now())->isoformat('Y-M-DD')

        ]);

        // Userdesain::create([
        //     'namapemesan' => $request->nama_pemesan,
        //     'ukuran' => $request->ukuran_desain,
        //     'permintaan' => $request->permintaan_desain,
        //     'keterangan' => $request->keterangan,
        //     'status' => $request->status_pengerjaan,




        // ]);
        return redirect()->route('datadesain')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editdesain($id)
    {
        $data = desain::findOrFail($id);

        return view('desain.editdesain', compact('data'));
    }




    public function updatedesain(request $request, $id)
    {
        $data = desain::findorfail($id);

        $tanggal = Carbon::parse(now())->isoformat('DD');
        $bulan = Carbon::parse(now())->isoformat('MMMM');
        $tahun = Carbon::parse(now())->isoformat('Y');
        $pemasukan = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun)->first();

        $hariini = Carbon::parse(now())->isoformat('Y-M-DD');
        $barangkeluar = barangkeluar::where('created_at', $hariini)->sum('total');
        $desain = desain::where('created_at', $hariini)->sum('harga_desain');
        $servis = servis::where('created_at', $hariini)->sum('biaya_pengerjaan');
        $hasilakhir = $request->harga_desain - $data->harga_desain;
        if ($pemasukan) {
            $update = Pemasukan::where('tanggal', $tanggal)->where('bulan', $bulan)->where('tahun', $tahun);
            $update->update([
                'total' => $barangkeluar + $hasilakhir + $desain + $servis,
            ]);
        }


        $data->update([
            'nama_pemesan' => $request->nama_pemesan,
            'ukuran_desain' => $request->ukuran_desain,
            'permintaan_desain' => $request->permintaan_desain,
            'keterangan' => $request->keterangan,
            'harga_desain' => $request->harga_desain,
        ]);
        if ($request->hasfile('fotod')) {
            $request->file('fotod')->move('fotodesain/', $request->file('fotod')->getClientOriginalName());
            $data->fotod = $request->file('fotod')->getClientOriginalName();
            $data->save();
        }
        // $ipan = Userdesain::findorfail($id);
        // $ipan->update([
        //     'namapemesan' => $request->nama_pemesan,
        //     'ukuran' => $request->ukuran_desain,
        //     'permintaan' => $request->permintaan_desain,
        //     'keterangan' => $request->keterangan,

        // ]);

        return redirect()->route('datadesain')->with('success', 'Data berhasil di Update!');
    }

    public function deletes($id)
    {
        $data = desain::find($id);
        $data->delete();
        return redirect()->route('datadesain')->with('success', 'Data Berhasil Di Hapus');
    }



    public function datapenyelesaiandesain()
    {
        $data = penyelesaian::all();
        // dd($data);s
        return view('penyelesaian.datapenyelesaiandesain', compact('data'));
    }

    public function masukpenyelesaiandesain($id)
    {
        $data = desain::findOrFail($id);
        $tes=  penyelesaian::create([
            'nama_pemesan' => $data->nama_pemesan,
            'ukuran_desain' => $data->ukuran_desain,
            'permintaan_desain' => $data->permintaan_desain,
            'keterangan' => $data->keterangan,
            'harga_desain' => $data->harga_desain,
            'status_pengerjaan' => $data->status_pengerjaan,
        ]);
        // dd($tes);    
        return redirect()->route('datadesain')->with('success', 'Data Sudah Selesai');
    }

    public function hapuspenyelesaian($id)
    {
        $data = penyelesaian::find($id);
        $data->delete();
        return redirect()->route('datapenyelesaiandesain')->with('success', 'Data Berhasil Di Hapus');
    }
}
