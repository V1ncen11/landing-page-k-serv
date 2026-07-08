<?php
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/tentang-kami', [LandingController::class, 'about'])->name('about');
Route::get('/portofolio', [LandingController::class, 'portofolioIndex'])->name('portofolio.index');
Route::get('/portofolio/{id}', [LandingController::class, 'portofolioShow'])->name('portofolio.show');
Route::get('/blog', [LandingController::class, 'blogIndex'])->name('blog.index');
Route::get('/blog/{slug}', [LandingController::class, 'blogShow'])->name('blog.show');
Route::post('/contact', [LandingController::class, 'storeContact'])->name('contact.store');

// Informasi Routes
Route::get('/syarat-ketentuan', function () { return view('informasi.syarat'); })->name('informasi.syarat');
Route::get('/kebijakan-privasi', function () { return view('informasi.privasi'); })->name('informasi.privasi');
Route::get('/garansi-revisi', function () { return view('informasi.garansi'); })->name('informasi.garansi');
Route::get('/cara-pembayaran', function () { return view('informasi.pembayaran'); })->name('informasi.pembayaran');

// Auth Routes
Route::get('/masuk-bosKevin', [AuthController::class, 'showLogin'])->name('login');
Route::post('/masuk-bosKevin', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes (Protected)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('produk', ProdukController::class);
    Route::patch('produk/{id}/toggle', [ProdukController::class, 'toggleActive'])->name('produk.toggle');
    Route::resource('produk.fitur', \App\Http\Controllers\Admin\ProdukFiturController::class);
    Route::resource('blog', AdminBlogController::class);
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show', 'destroy']);
});
