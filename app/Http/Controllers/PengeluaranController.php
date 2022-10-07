<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;


use PDF;

class PengeluaranController extends Controller
{
    public function pengeluaran()
    {
        $pengeluaran = Pengeluaran::all();
        return view('masuk.pengeluaran', compact('pengeluaran'));
    }

    public function exportpdf()
    {
        $data = Pengeluaran::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datapengeluaranpdf');
        return $pdf->download('datapengeluaran.pdf');
    }
}
