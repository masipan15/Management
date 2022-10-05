<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
class kategori extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

}
