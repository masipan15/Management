<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databarangkeluar extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function namabarangs()
    {
        return $this->belongsTo(Barang::class, 'nama_barang', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
