<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pengeluaran;
use App\Models\Pemasukan;
use App\Models\Barang;
use App\Models\pelanggan;
use App\Models\Supplier;
use App\Models\desain;
use App\Models\servis;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $jumlahbarang = Barang::count();
        $jumlahsupplier = Supplier::count();
        $jumlahpermintaandesain = desain::count();
        $jumlahservis = servis::count();
        $jumlahpelanggan = pelanggan::count();

        $jumlahpem = Pemasukan::sum('total');
        $jumlahpeng = Pengeluaran::sum('total');
        $keuntungan = $jumlahpem - $jumlahpeng;
        // dd($jumlahpem - $jumlahpeng);
    
    
        $pemasukan = pemasukan::query()
            ->selectRaw('id, tanggal, bulan, tahun, created_at, SUM(total) as total')
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();
        $pengeluaran = pengeluaran::query()
            ->selectRaw('id, tanggal, bulan, tahun, created_at, SUM(total) as total')
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();

        $previousMonths = [];

        $currentDate = now()->startOfMonth();
        while ($currentDate->year == Carbon::now()->year) {
            $previousMonths[] = $currentDate->format('F');
            $currentDate->subMonth();
        }

        $previousMonths = array_reverse($previousMonths);
        
        $array_pengeluaran = array();
        foreach($previousMonths as $key => $val){
            $array_pengeluaran[$key] = 0;
            foreach ($pengeluaran as $mp) {
                $waktu = Carbon::parse($mp->created_at)->format('F');
            
                if($val == $waktu){
                    $array_pengeluaran[$key] = $mp->total;
                }
            }
        }

        $array_pemasukan = array();
        foreach($previousMonths as $key => $val){
            $array_pemasukan[$key] = 0;
            foreach ($pemasukan as $rudi) {
                $waktu = Carbon::parse($rudi->created_at)->format('F');
            
                if($val == $waktu){
                    $array_pemasukan[$key] = $rudi->total;
                }
            }
        }

        $pendapatan = [];

        foreach ($array_pemasukan as $key => $value) {
            $pendapatan[$key] = $value - $array_pengeluaran[$key];
        }

        // dd($pendapatan);
        return view('welcome', compact('jumlahbarang', 'jumlahsupplier', 'jumlahpermintaandesain', 'jumlahservis', 'jumlahpelanggan', 'previousMonths', 'array_pengeluaran', 'array_pemasukan','pendapatan', 'keuntungan'));

    }























    

    public function cobagrafik()
    {
        $pemasukan = pemasukan::query()
        ->selectRaw('id, tanggal, bulan, tahun, created_at, SUM(total) as total')
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();
    $pengeluaran = pengeluaran::query()
        ->selectRaw('id, tanggal, bulan, tahun, created_at, SUM(total) as total')
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

    $previousMonths = [];

    $currentDate = now()->startOfMonth();
    while ($currentDate->year == Carbon::now()->year) {
        $previousMonths[] = $currentDate->format('F');
        $currentDate->subMonth(); 
    }

    $previousMonths = array_reverse($previousMonths);
    
    $array_pengeluaran = array();
    foreach($previousMonths as $key => $val){
        $array_pengeluaran[$key] = 0;
        foreach ($pengeluaran as $mp) {
            $waktu = Carbon::parse($mp->created_at)->format('F');
        
            if($val == $waktu){
                $array_pengeluaran[$key] = $mp->total;
            }
        }
    }

    $array_pemasukan = array();
    foreach($previousMonths as $key => $val){
        $array_pemasukan[$key] = 0;
        foreach ($pemasukan as $rudi) {
            $waktu = Carbon::parse($rudi->created_at)->format('F');
        
            if($val == $waktu){
                $array_pemasukan[$key] = $rudi->total;
            }
        }
    }

    $pendapatan = [];

    foreach ($array_pemasukan as $key => $value) {
        $pendapatan[$key] = $value - $array_pengeluaran[$key];
    }


        return view('cobagrafik', compact('previousMonths', 'array_pengeluaran', 'array_pemasukan', 'pendapatan'));

    }
}
