<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PengeluaranExport;
use App\Models\barangmasuk;
use Maatwebsite\Excel\Facades\Excel;

class PengeluaranController extends Controller
{
    public function pengeluaran()
    {
        $pengeluaran = Pengeluaran::all();
        return view('masuk.pengeluaran', compact('pengeluaran'));

        $barangmasuk = barangmasuk::all();


        foreach ($barangmasuk as $b) {
            $b->setAttribute('tanggal', date('D', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('M', strtotime($b->created_at)));
            $b->setAttribute('type', 'Barang Masuk');
            $b->setAttribute('total', $b->total);
            array_push($array, $b->getAttributes());
        }
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
