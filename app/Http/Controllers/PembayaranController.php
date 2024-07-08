<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Peminjaman;

class PembayaranController extends Controller
{
    public function index(){
        $pembayarans = Pembayaran::all();
        return view('admin.pembayaran.index', compact('pembayarans'));   
    }

    public function create(){
        $peminjamans = Peminjaman::all();
        return view('admin.pembayaran.create', compact('peminjamans'));
    }

    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|exists:peminjaman,id'
        ]);

        Pembayaran::create($validated);
        return redirect('/dashboard/pembayaran/')->with('pesan', 'Data Berhasil Ditambah');
    }

    public function show(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('admin.pembayaran.show', compact('pembayaran'));
    }

    public function edit(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        $peminjamans = Peminjaman::all();
        return view('admin.pembayaran.edit', compact('pembayaran', 'peminjamans'));
    }

    public function update(Request $request, string $id)
    {
         // validasi form input
         $validated = $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|exists:peminjaman,id'
        ]);

        $pembayaran = Pembayaran::find($id);
        $pembayaran->update($validated);

        return redirect('dashboard/pembayaran')->with('pesan', 'Data Berhasil Diperbarui');
    }

    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();

        return redirect('dashboard/pembayaran')->with('pesan', 'Data Berhasil Dihapus');
    }
}
