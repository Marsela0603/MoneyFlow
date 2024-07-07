<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JKController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// DASHBOARD
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);

// jenis kendaraan
Route::get('/dashboard/jenis_kendaraan', [JKController::class, 'index']);
Route::get('/dashboard/jenis_kendaraan/create', [JKController::class, 'create']);
Route::post('/dashboard/jenis_kendaraan/store', [JKController::class, 'store']);
Route::get('/dashboard/jenis_kendaraan/show/{id}', [JKController::class, 'show']);

// armada
Route::get('/dashboard/armada', [ArmadaController::class, 'index']);
Route::get('/dashboard/armada/create', [ArmadaController::class, 'create']);
Route::post('/dashboard/armada/store', [ArmadaController::class, 'store']);
Route::get('/dashboard/armada/show/{id}', [ArmadaController::class, 'show']);

// peminjaman
Route::get('/dashboard/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/dashboard/peminjaman/create', [PeminjamanController::class, 'create']);
Route::get('/dashboard/peminjaman/store', [PeminjamanController::class, 'store']);

// pembayaran
Route::get('/dashboard/pembayaran', [PembayaranController::class, 'index']);
Route::get('/dashboard/pembayaran/show/{id}', [PembayaranController::class, 'show']);
