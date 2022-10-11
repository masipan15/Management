<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Pemasukan;
use PDF;
use App\Exports\PemasukanExport;
use App\Models\barangkeluar;
use App\Models\desain;
use App\Models\servis;
use Maatwebsite\Excel\Facades\Excel;



class PemasukanController extends Controller
{
    public function pemasukan()
    {
        // dd($now = Carbon::parse(now())->isoformat('dddd'));



        //     DB::raw("(sum(total)) as total"),
        //     DB::raw("(DATE_FORMAT(created_at, '%d')) as day"),
        //     DB::raw("(DATE_FORMAT(created_at, '%M')) as month"),
        //     DB::raw("(DATE_FORMAT(created_at, '%Y')) as year")
        // )
        //     ->orderBy('created_at')
        //     ->groupBy(DB::raw("DATE_FORMAT(created_at, '%d')"))
        //     ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))
        //     ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
        //     ->get();
        // $pemasukan = Pemasukan::all();

        $barang = barangkeluar::all();
        $desain = desain::all();
        $service = servis::all();

        $array = [];

        foreach ($barang as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
            $b->setAttribute('type', 'Barang Keluar');
            $b->setAttribute('total', $b->total);
            array_push($array, $b->getAttributes());
        }
        foreach ($desain as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
            $b->setAttribute('total', $b->harga_desain);
            $b->setAttribute('nama_pelanggan', $b->nama_pemesan);
            $b->setAttribute('type', 'Desain');
            array_push($array, $b->getAttributes());
        }
        foreach ($service as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
            $b->setAttribute('total', $b->biaya_pengerjaan);
            $b->setAttribute('type', 'Servis');
            array_push($array, $b->getAttributes());
        }

        // dd($array);

        return view('keluar.pemasukan', compact('array'));
    }

    public function exportpdfm()
    {
        $array = [];





        $barang = barangkeluar::all();
        $desain = desain::all();
        $service = servis::all();


        foreach ($barang as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
            $b->setAttribute('type', 'Barang Keluar');
            $b->setAttribute('total', $b->total);
            array_push($array, $b->getAttributes());
        }
        foreach ($desain as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
            $b->setAttribute('total', $b->harga_desain);

            $b->setAttribute('type', 'Desain');
            array_push($array, $b->getAttributes());
        }
        foreach ($service as $b) {
            $b->setAttribute('tanggal', date('d', strtotime($b->created_at)));
            $b->setAttribute('tahun', date('Y', strtotime($b->created_at)));
            $b->setAttribute('bulan', date('m', strtotime($b->created_at)));
            $b->setAttribute('total', $b->biaya_pengerjaan);
            $b->setAttribute('type', 'Servis');
            array_push($array, $b->getAttributes());
        }
        view()->share('array', $array);
        $pdf = PDF::loadview('datapemasukanpdf');
        return $pdf->download('datapemasukan.pdf', compact('array'));
    }

    public function exportexcelm()
    {
        
        return Excel::download(new PemasukanExport, 'datapemasukan.xlsx');
    }
}
