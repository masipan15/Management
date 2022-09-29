<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class barangmasuk extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function supplier() {
        return $this->belongsTo(Supplier::class,'suppliers_id','id');
    }

    
}
