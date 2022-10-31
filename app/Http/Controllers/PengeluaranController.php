<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PengeluaranExport;
use App\Models\barangmasuk;
use App\Models\pemasukan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PengeluaranController extends Controller
{
    public function pengeluaran()
    {


        $subtotal = barangmasuk::sum('total');
        $barangmasuk = barangmasuk::all();
        $array = [];
        $barangmasuk = barangmasuk::all();
        foreach ($barangmasuk as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('M', strtotime($b->created_at)));
            $b->setAttribute('type', 'Barang Masuk');
            $b->setAttribute('total', $b->total);
            array_push($array, $b->getAttributes());
        }
        return view('masuk.pengeluaran', compact('array', 'subtotal'));
    }

    public function exportpdf()
    {
        $array = [];
        $barangmasuk = barangmasuk::all();
        foreach ($barangmasuk as $b) {
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

    public function grafik()
    {
        // $total = barangmasuk::select(DB::raw("CAST(SUM(total) as int) as total"))
        // ->GroupBy(DB::raw("Day(created_at)"))   
        // ->pluck('total');
        // dd($total); 

        // $bulan = barangmasuk::select(DB::raw("MONTHNAME(created_at) as bulan"))
        // ->GroupBy(DB::raw("MONTHNAME(created_at)"))   
        // ->pluck('bulan');
        // dd($bulan);
        $bulan = pengeluaran::all();

        $month = [];
        $data = [];

        foreach($bulan as $mp) {
            $month[] = $mp->bulan;
            $data[] = $mp->id;
        }
        // dd($data); 
        

        return view('masuk.charts', compact('bulan','month','data'));
    }
}
