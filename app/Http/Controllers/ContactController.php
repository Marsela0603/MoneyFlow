<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class ContactController extends Controller
{
    public function index(){
        return view('dashboard.contact');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'description' => 'required|string',
        ]);

        Testimoni::create([
            'nama' => $request->nama,
            'rating' => $request->rating,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Terima kasih atas testimoni Anda!');
    }
}
