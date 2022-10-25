<?php

namespace App\Exports;

use App\Models\Pengeluaran;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PengeluaranExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(string $keyword)
    {
        $this->tanggal = $keyword;
    }
    public function view(): View
    {
        return view('pengeluaranexcel', [
            'data' => Pengeluaran::where('tanggal', 'like', '%' . $this->tanggal . '%')->get()
        ]);
    }
    // public function collection()
    // {
    //     return Pengeluaran::all();
    // }
}
