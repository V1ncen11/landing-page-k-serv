<?php
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [LandingController::class, 'index']);

// Informasi Routes
Route::get('/syarat-ketentuan', function () { return view('informasi.syarat'); })->name('informasi.syarat');
Route::get('/kebijakan-privasi', function () { return view('informasi.privasi'); })->name('informasi.privasi');
Route::get('/garansi-revisi', function () { return view('informasi.garansi'); })->name('informasi.garansi');
Route::get('/cara-pembayaran', function () { return view('informasi.pembayaran'); })->name('informasi.pembayaran');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes (Protected)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('produk', ProdukController::class);
    Route::patch('produk/{id}/toggle', [ProdukController::class, 'toggleActive'])->name('produk.toggle');
});
