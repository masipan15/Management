<?php

namespace App\Models;


use App\Models\detailtransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'notransaksi',
        'namakasir',
        'subtotal',
        'pembayaran',
        'kembalian',
    ];
    public function notransaksis()
    {
        return $this->hasMany(detailtransaksi::class, 'notransaksi_id');
    }
}
