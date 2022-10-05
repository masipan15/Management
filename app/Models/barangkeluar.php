<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barangkeluar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function namabarangs(){
        return $this -> belongsTo(Barang::class,'nama_barang','id');
    }
}
