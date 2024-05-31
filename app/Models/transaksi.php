<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgltransaksi', // Tambahkan properti tgltransaksi di sini
        'waktutransaksi',
        'iduser',
        'idbarang',
        'qty',
        'totalharga',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'idbarang');
    }
}
