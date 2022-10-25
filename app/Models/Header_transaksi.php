<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header_transaksi extends Model
{
    use HasFactory;
    protected $guarded= [];

    static function tambah_header_transaksi(){
        Product::create([
            'tanggal_transaksi' => date('Y/m/d')
        ]);
    }

}
