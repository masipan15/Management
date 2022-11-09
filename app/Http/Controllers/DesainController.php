<?php

namespace App\Http\Controllers;

use Response;
use Carbon\Carbon;
use App\Models\desain;
use App\Models\servis;
// use App\Models\Userdesain;
use App\Models\Pemasukan;
use App\Models\barangkeluar;
use App\Models\penyelesaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class DesainController extends Controller
{
    public function index()
    {
        $data = desain::orderBy('id', 'DESC')->get();
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



        $data = desain::create([
            'nama_pemesan' => $request->nama_pemesan,
            'ukuran_desain' => $request->ukuran_desain,
            'permintaan_desain' => $request->permintaan_desain,
            'keterangan' => $request->keterangan,
            'status_pengerjaan' => $request->status_pengerjaan,
            'created_at' => Carbon::parse(now())->isoformat('Y-M-DD')

        ]);








        return redirect()->route('datadesain')->with('success', 'Data Berhasil Di Tambahkan');
    }



    public function editdesain($id)
    {
        $data = desain::findOrFail($id);

        return view('desain.editdesain', compact('data'));
    }




    public function updatedesain(request $request, $id)
    {
        $validated = $request->validate([
            'fotod' => 'mimes:jpg,png,jpeg,jfif,webp',
        ], [

            'fotod.mimes' => 'Harus Bertipe Gambar',
        ]);

        $data = desain::findorfail($id);
        $data->update([
            'nama_pemesan' => $request->nama_pemesan,
            'namapedesain' => $request->namapedesain,
            'ukuran_desain' => $request->ukuran_desain,
            'permintaan_desain' => $request->permintaan_desain,
            'status_pengerjaan' => $request->status_pengerjaan,
            'keterangan' => $request->keterangan,
            'harga_desain' => $request->harga_desain,
        ]);
        if ($request->hasfile('fotod')) {
            $request->file('fotod')->move('fotodesain/', $request->file('fotod')->getClientOriginalName());
            $data->fotod = $request->file('fotod')->getClientOriginalName();
            $data->save();
        }

        Pemasukan::create([
            'total' => $request->harga_desain,
        ]);


        return redirect()->route('datadesain')->with('success', 'Data berhasil di Update!');
    }

    public function deletes($id)
    {
        $data = desain::find($id);
        $data->delete();
        return redirect()->route('datadesain')->with('success', 'Data Berhasil Di Hapus');
    }





    public function download($id)
    {
        $data = DB::table('desains')->where('id', $id)->first();
        $filepath = public_path("fotodesain/{$data->fotod}");
        return response()->download($filepath);
    }
}
