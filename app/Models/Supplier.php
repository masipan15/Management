<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barangmasuk;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function barangmasuk()
    {
        return $this->hasMany(Barangmasuk::class);
    }
}
