<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
        'tanggal',
        'jumlah_bayar',
        'peminjaman_id'
    ];

    public $timestamps = false;

    public function Peminjaman(){
        return $this->belongsTo(Peminjaman::class);
    }
}
