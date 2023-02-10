<?php

namespace App\Http\Controllers;

use App\Models\barangmasuk;
use Illuminate\Http\Request;
use App\Models\databarangmasuk;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PengeluaranExport;
use Maatwebsite\Excel\Facades\Excel;

class PengeluaranController extends Controller
{
    public function pengeluaran()
    {


        $subtotal = databarangmasuk::sum('total');
        $databarangmasuk = databarangmasuk::all();
        $array = [];
        $databarangmasuk = databarangmasuk::all();
        foreach ($databarangmasuk as $b) {
            $b->setAttribute('bulan', date('d-M-Y', strtotime($b->created_at)));
            $b->setAttribute('type', 'Barang Masuk');
            $b->setAttribute('total', $b->total);
            array_push($array, $b->getAttributes());
        }
        return view('masuk.pengeluaran', compact('array', 'subtotal'));
    }

    public function exportpdf()
    {
        $array = [];
        $databarangmasuk = databarangmasuk::all();
        foreach ($databarangmasuk as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('M', strtotime($b->created_at)));
            $b->setAttribute('type', 'Barang Masuk');
            $b->setAttribute('total', $b->total);
            array_push($array, $b->getAttributes());
        }

        view()->share('array', $array);
        $pdf = PDF::loadview('datapengeluaranpdf');
        return $pdf->download('datapengeluaran.pdf', compact('array'));
    }

    public function exportexcel()
    {
        return Excel::download(new PengeluaranExport('rangga'), 'datapengeluaran.xlsx');
    }
}
