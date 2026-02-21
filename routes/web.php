<?php
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\ProdukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing');
// });
Route::get('/', [LandingController::class, 'index']);
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('produk', ProdukController::class);

});
