<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Armada;
use App\Models\jenis_kendaraan;

class LandingpageController extends Controller
{
    public function index(){
        $armadas = Armada::with('jenis_kendaraan')->get();
        return view('landingpage.index', compact('armadas'));   
    }

    public function create(){
        $armadas = Armada::all();
        return view('landingpage.peminjaman', compact('armadas'));
    }

    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama_peminjam' => 'required|string',
            'ktp_peminjam' => 'required|string',
            'keperluan_pinjam' => 'required|string',
            'mulai' => 'required|date',
            'selesai' => 'required|date',
            'komentar_peminjam' => 'required|string',
            'armada_id' => 'required|exists:armada,id'
        ]);

        $validated['status_pinjam'] = 'Sedang diajukan';
        
        Peminjaman::create($validated);
        return redirect('/peminjaman/')->with('pesan', 'Peminjaman sedang diajukan. Silahkan cek status peminjaman di dashboard peminjaman.');
    }

    public function show(string $id)
    {
        $armada = Armada::with('jenis_kendaraan')->find($id);
        return view('landingpage.show', compact('armada'));
    }


}
