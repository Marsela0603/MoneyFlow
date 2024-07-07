<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'nama_peminjam',
        'ktp_peminjam',
        'keperluan_pinjam',
        'mulai',
        'selesai',
        'komentar_peminjam',
        'status_pinjam',
        'armada_id'
    ];
}
