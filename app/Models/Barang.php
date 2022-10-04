<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\barangkeluar;
use App\Models\barangmasuk;

class Barang extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function namabarangg(){
        return $this -> hasMany(barangkeluar::class);
    }
    public function barangmasuk()
    {
        return $this->hasMany(Barangmasuk::class);
    }
}
