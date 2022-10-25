<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory;
    protected $guarded= [];


    static function tambah_detail_transaksi($id_produk,$id_header_transaksi,$jumlah){
        Product::create([
            'id_produk' => $id_produk,
            'id_header_transaksi' => $id_header_transaksi,
            'jumlah' => $jumlah,
        ]);
    }
}
