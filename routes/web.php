<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JKController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfilController;



// DASHBOARD
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/profile', [ProfilController::class, 'index']);
});

// jenis kendaraan
Route::middleware('auth')->group(function(){
    Route::get('/dashboard/jenis_kendaraan', [JKController::class, 'index']);
    Route::get('/dashboard/jenis_kendaraan/create', [JKController::class, 'create']);
    Route::post('/dashboard/jenis_kendaraan/store', [JKController::class, 'store']);
    Route::get('/dashboard/jenis_kendaraan/show/{id}', [JKController::class, 'show']);
    Route::get('/dashboard/jenis_kendaraan/edit/{id}', [JKController::class, 'edit']);
    Route::put('/dashboard/jenis_kendaraan/update/{id}', [JKController::class, 'update']);
    Route::delete('/dashboard/jenis_kendaraan/destroy/{id}', [JkController::class, 'destroy']);
});

// armada
Route::middleware('auth')->group(function(){
    Route::get('/dashboard/armada', [ArmadaController::class, 'index']);
    Route::get('/dashboard/armada/create', [ArmadaController::class, 'create']);
    Route::post('/dashboard/armada/store', [ArmadaController::class, 'store']);
    Route::get('/dashboard/armada/show/{id}', [ArmadaController::class, 'show']);
    Route::get('/dashboard/armada/edit/{id}', [ArmadaController::class, 'edit']);
    Route::put('/dashboard/armada/update/{id}', [ArmadaController::class, 'update']);
    Route::delete('/dashboard/armada/destroy/{id}', [ArmadaController::class, 'destroy']);
});

// peminjaman
Route::middleware('auth')->group(function(){
    Route::get('/dashboard/peminjaman', [PeminjamanController::class, 'index']);
    Route::get('/dashboard/peminjaman/create', [PeminjamanController::class, 'create']);
    Route::post('/dashboard/peminjaman/store', [PeminjamanController::class, 'store']);
    Route::get('/dashboard/peminjaman/show/{id}', [PeminjamanController::class, 'show']);
    Route::get('/dashboard/peminjaman/edit/{id}', [PeminjamanController::class, 'edit']);
    Route::put('/dashboard/peminjaman/update/{id}', [PeminjamanController::class, 'update']);
    Route::delete('/dashboard/peminjaman/destroy/{id}', [PeminjamanController::class, 'destroy']);
});

// pembayaran
Route::middleware('auth')->group(function(){
Route::get('/dashboard/pembayaran', [PembayaranController::class, 'index']);
Route::get('/dashboard/pembayaran/create', [PembayaranController::class, 'create']);
Route::post('/dashboard/pembayaran/store', [PembayaranController::class, 'store']);
Route::get('/dashboard/pembayaran/show/{id}', [PembayaranController::class, 'show']);
Route::get('/dashboard/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
Route::put('/dashboard/pembayaran/update/{id}', [PembayaranController::class, 'update']);
Route::delete('/dashboard/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy']);
});
