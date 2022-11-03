<?php

namespace App\Exports;

use App\Models\Pemasukan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PemasukanExport implements FromView
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
        $data = Pemasukan::all();
        return view('pemasukanexcel', compact('data'));
    }
    // public function collection()
    // {
    //     return Pemasukan::all();
    // }
}
