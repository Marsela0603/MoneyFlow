<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_kendaraan extends Model
{
    use HasFactory;
    protected $table = 'jenis_kendaraan';
    protected $fillable = ['nama', 'deskripsi'];

    public $timestamps = false;
}
