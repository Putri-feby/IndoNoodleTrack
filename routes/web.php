<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermintaanMasukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    // Redirect dashboard to permintaan-masuk
    Route::get('/dashboard', function() {
        return redirect()->route('permintaan-masuk');
    })->name('dashboard');
    
    // Permintaan Masuk - Main focus
    Route::get('/permintaan-masuk', [PermintaanMasukController::class, 'index'])->name('permintaan-masuk');
    
    // Placeholder routes - just redirect to permintaan-masuk for now
    Route::get('/retur-masuk', function() { 
        return redirect()->route('permintaan-masuk'); 
    })->name('retur-masuk');
    
    Route::get('/monitoring', function() { 
        return redirect()->route('permintaan-masuk'); 
    })->name('monitoring');
    
    Route::get('/riwayat', function() { 
        return redirect()->route('permintaan-masuk'); 
    })->name('riwayat');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
