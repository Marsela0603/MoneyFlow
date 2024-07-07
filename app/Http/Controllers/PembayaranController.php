<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index(){
        $pembayarans = Pembayaran::all();
        return view('admin.pembayaran.index', compact('pembayarans'));   
    }
    public function show(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('admin.pembayaran.show', compact('pembayaran'));
    }
}
