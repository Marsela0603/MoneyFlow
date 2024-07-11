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
        $armadas = Armada::all();
        return view('admin.peminjaman.create', compact('armadas'));
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
            'komentar_peminjam' => 'nullable|string',
            'armada_id' => 'required|exists:armada,id'
        ]);

        $validated['status_pinjam'] = 'Sedang diajukan';
        
        Peminjaman::create($validated);
        return redirect('/dashboard/peminjaman/')->with('pesan', 'Data Berhasil Ditambah');
    }
    
    public function show(string $id)
    {
        $peminjaman = Peminjaman::find($id);
        return view('admin.peminjaman.show', compact('peminjaman'));
    }

    public function edit(string $id)
    {
        $peminjaman = Peminjaman::find($id);
        $armadas = Armada::all();
        return view('admin.peminjaman.edit', compact('peminjaman', 'armadas'));
    }


    public function update(Request $request, string $id)
    {
         // validasi form input
         $validated = $request->validate([
            'nama_peminjam' => 'required|string',
            'ktp_peminjam' => 'required|string',
            'keperluan_pinjam' => 'required|string',
            'mulai' => 'required|date',
            'selesai' => 'required|date',
            'komentar_peminjam' => 'nullable|string',
            'armada_id' => 'required|exists:armada,id',
            'status_pinjam' => 'required|string',
        ]);

        $peminjaman = Peminjaman::find($id);
        $peminjaman->update($validated);

        return redirect('dashboard/peminjaman')->with('pesan', 'Data Berhasil Diperbarui');
    }

    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return redirect('dashboard/peminjaman')->with('pesan', 'Data Berhasil Dihapus');
    }
}
