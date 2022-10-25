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



        $array = [];
        $barangmasuk = barangmasuk::all();
        foreach ($barangmasuk as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
            $b->setAttribute('type', 'Barang Masuk');
            $b->setAttribute('total', $b->total);
            array_push($array, $b->getAttributes());
        }
        return view('masuk.pengeluaran', compact('array'));
    }

    public function exportpdf()
    {
        $array = [];
        $barangmasuk = barangmasuk::all();
        foreach ($barangmasuk as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
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
