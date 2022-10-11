<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Transaksi() {
        return $this->belongsTo(Transaksi::class);
    }

    public function Produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
