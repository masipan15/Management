<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PengeluaranExport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportexcel()
    {
        return Excel::download(new PengeluaranExport, 'dataengeluaran.xlsx');
    }
}
