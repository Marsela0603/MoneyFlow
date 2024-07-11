<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_kendaraan;
use App\Models\Armada;
use App\Models\Peminjaman;

class AdminController extends Controller
{
    public function index(){
        $totalJenisKendaraan = jenis_kendaraan::count();
    
        // Menghitung total armada per jenis kendaraan
        $totalArmadaPerJenis = Armada::selectRaw('jenis_kendaraan_id, count(*) as total')
                                     ->groupBy('jenis_kendaraan_id')
                                     ->get();
    
        $totalPeminjamanPerluKonfirmasi = Peminjaman::where('status_pinjam', 'Sedang diajukan')->count();
    
        return view('admin.index', [
            'totalJenisKendaraan' => $totalJenisKendaraan,
            'totalArmadaPerJenis' => $totalArmadaPerJenis,
            'totalPeminjamanPerluKonfirmasi' => $totalPeminjamanPerluKonfirmasi
        ]);
    }
    
}
