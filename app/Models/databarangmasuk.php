<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databarangmasuk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'suppliers_id');
    }
    public function namabarang()
    {
        return $this->belongsTo(Barang::class,'barangs_id');
    }
}
