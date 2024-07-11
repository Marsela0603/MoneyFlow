<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JKController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LandingpageController;


Route::get('/', [LandingpageController::class, 'index']);
Route::get('/detail-kendaraan/{id}', [LandingpageController::class, 'show']);
Route::get('/peminjaman', [LandingpageController::class, 'create']);

// login untuk melakukan peminjaman
Route::middleware('auth')->group(function () {
    Route::post('/peminjaman/store', [LandingpageController::class, 'store']);
});

Route::get('/portofolio-bus', function () {
    return view('landingpage.portofolio-bus');
});

Route::get('/portofolio-minibus', function () {
    return view('landingpage.portofolio-minibus');
});

Route::get('/portofolio-mobil', function () {
    return view('landingpage.portofolio-mobil');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/contact', [ContactController::class, 'index']);
        Route::get('/profil', [ProfilController::class, 'index']);

        // Jenis Kendaraan
        Route::prefix('/jenis_kendaraan')->group(function () { 
            Route::get('/', [JKController::class, 'index']);
            Route::get('/show/{id}', [JKController::class, 'show']);
            //hanya untuk admin
            Route::middleware('admin')->group(function () {
            Route::get('/create', [JKController::class, 'create']);
            Route::post('/store', [JKController::class, 'store']);
            Route::get('/edit/{id}', [JKController::class, 'edit']);
            Route::put('/update/{id}', [JKController::class, 'update']);
            Route::delete('/destroy/{id}', [JKController::class, 'destroy']);
            });
        });

        // Armada
        Route::prefix('/armada')->group(function () { 
            Route::get('/', [ArmadaController::class, 'index']);
            Route::get('/show/{id}', [ArmadaController::class, 'show']);
            //hanya untuk admin
            Route::middleware('admin')->group(function () {
            Route::get('/create', [ArmadaController::class, 'create']);
            Route::post('/store', [ArmadaController::class, 'store']);
            Route::get('/edit/{id}', [ArmadaController::class, 'edit']);
            Route::put('/update/{id}', [ArmadaController::class, 'update']);
            Route::delete('/destroy/{id}', [ArmadaController::class, 'destroy']);
            });
        });

        // Peminjaman
        Route::prefix('/peminjaman')->group(function () { 
            Route::get('/', [PeminjamanController::class, 'index']);
            Route::get('/show/{id}', [PeminjamanController::class, 'show']);
            Route::get('/create', [PeminjamanController::class, 'create']);
            Route::post('/store', [PeminjamanController::class, 'store']);
            //hanya untuk admin
            Route::middleware('admin')->group(function () {
            Route::get('/edit/{id}', [PeminjamanController::class, 'edit']);
            Route::put('/update/{id}', [PeminjamanController::class, 'update']);
            Route::delete('/destroy/{id}', [PeminjamanController::class, 'destroy']);
            });
        });

         // Pembayaran
         Route::prefix('/pembayaran')->group(function () { 
            Route::get('/', [PembayaranController::class, 'index']);
            Route::get('/show/{id}', [PembayaranController::class, 'show']);
            //hanya untuk admin
            Route::middleware('admin')->group(function () {
            Route::get('/create', [PembayaranController::class, 'create']);
            Route::post('/store', [PembayaranController::class, 'store']);
            Route::get('/edit/{id}', [PembayaranController::class, 'edit']);
            Route::put('/update/{id}', [PembayaranController::class, 'update']);
            Route::delete('/destroy/{id}', [PembayaranController::class, 'destroy']);
            });
        });

        
    });
});

require __DIR__.'/auth.php';

