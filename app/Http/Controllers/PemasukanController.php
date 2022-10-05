<?php

namespace App\Http\Controllers;

use App\Models\barangkeluar;
use App\Models\Pemasukan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


}
