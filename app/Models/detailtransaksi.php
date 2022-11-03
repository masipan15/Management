<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailtransaksi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function barangtransaksi(){
        return $this->belongsTo(Barang::class,'barang_id');
    }
}
