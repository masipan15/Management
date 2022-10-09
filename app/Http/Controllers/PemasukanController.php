<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Pemasukan;
use PDF;
use App\Exports\PemasukanExport;
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
        $pemasukan = Pemasukan::all();

        return view('keluar.pemasukan', compact('pemasukan'));
    }

    public function exportpdfm()
    {
        $data = Pemasukan::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datapemasukanpdf');
        return $pdf->download('datapemasukan.pdf');
    }

    public function exportexcelm()
    {
        return Excel::download(new PemasukanExport, 'datapemasukan.xlsx');
    }

}
