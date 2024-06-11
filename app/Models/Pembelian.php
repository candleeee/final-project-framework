<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_profile',
        'nama_barang',
        'jumlah_produk',
        'harga_barang',
        'total_harga',
        'alamat',
        'metode_pembayaran',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
