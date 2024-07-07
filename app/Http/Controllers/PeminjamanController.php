<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Armada;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjamans = Peminjaman::all();
        return view('admin.peminjaman.index', compact('peminjamans'));   
    }

    public function create(){
        $peminjamans = Peminjaman::all();
        return view('admin.peminjaman.create', compact('peminjamans'));
    }

    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama_peminjam' => 'required|string',
            'ktp_peminjam' => 'required|string',
            'keperluan_pinjam' => 'required|int',
            'mulai' => 'required|date',
            'selesai' => 'required|date',
            'komentar_peminjam' => 'required|string',
            'status_pinjam' => 'required|string',
            'armada_id' => 'required|exists:Armada,id'
        ]);

        Peminjaman::create($validated);
        return redirect('/dashboard/peminjaman/')->with('pesan', 'Data Berhasil Ditambah');
    }
}
