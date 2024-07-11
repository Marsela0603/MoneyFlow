<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armada;
use App\Models\jenis_kendaraan;
use Illuminate\Support\Facades\Storage;

class ArmadaController extends Controller
{
    public function index(){
        $armadas = Armada::with('jenis_kendaraan')->get();
        return view('admin.armada.index', compact('armadas'));   
    }

    public function create(){
        $jenis_kendaraans = jenis_kendaraan::all();
        return view('admin.armada.create', compact('jenis_kendaraans'));
    }

    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'merk' => 'required|string',
            'nopol' => 'required|string',
            'thn_beli' => 'required|int',
            'deskripsi' => 'required|string',
            'kapasitas_kursi' => 'required|int',
            'rating' => 'required|string|min:1|max:5',
            'biaya' => 'required|string',
            'jenis_kendaraan_id' => 'required|exists:jenis_kendaraan,id',
            'gambar' => 'nullable|mimes:jpeg,jpg,png|max:5120'
        ]);

        //menyimpan gambar
        $gambarPath = $request->file('gambar')->store('public/armada');
        $validated['gambar'] = $gambarPath;

        Armada::create($validated);
        return redirect('/dashboard/armada/')->with('pesan', 'Data Berhasil Ditambah');
    }

    public function show(string $id)
    {
        $armada = Armada::find($id);
        return view('admin.armada.show', compact('armada'));
    }

    public function edit(string $id)
    {
        $armada = Armada::find($id);
        $jenis_kendaraans = jenis_kendaraan::all();
        return view('admin.armada.edit', compact('armada', 'jenis_kendaraans'));
    }

    public function update(Request $request, string $id)
    {
         // validasi form input
         $validated = $request->validate([
            'merk' => 'required|string',
            'nopol' => 'required|string',
            'thn_beli' => 'required|int',
            'deskripsi' => 'required|string',
            'kapasitas_kursi' => 'required|int',
            'rating' => 'required|string|min:1|max:5',
            'biaya' => 'required|string',
            'jenis_kendaraan_id' => 'required|exists:jenis_kendaraan,id',
            'gambar' => 'nullable|mimes:jpeg,jpg,png|max:5120'
        ]);

        $armada = Armada::find($id);

        // jika ada gambar baru di-upload, simpan gambar baru
        if ($request->hasFile('gambar')) {
            // hapus gambar lama jika ada
            Storage::delete($armada->gambar);

            // simpan gambar baru
            $gambarPath = $request->file('gambar')->store('public/armada');
            $validated['gambar'] = $gambarPath;
        }

        $armada->update($validated);

        return redirect('dashboard/armada')->with('pesan', 'Data Berhasil Diperbarui');
    }

    public function destroy(string $id)
    {
        $armada = Armada::find($id);
        $armada->delete();

        return redirect('dashboard/armada')->with('pesan', 'Data Berhasil Dihapus');
    }
}
