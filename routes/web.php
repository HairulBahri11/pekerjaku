<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePenjualController;
use App\Http\Controllers\KatalogProdukController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProfileController;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});;

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('siswa', App\Http\Controllers\siswaController::class);
    Route::resource('buku', App\Http\Controllers\bukuController::class);
    Route::resource('peminjaman', App\Http\Controllers\peminjamanController::class);
    Route::resource('pengembalian', App\Http\Controllers\pengembalianController::class);
    Route::get('/kembalikan_buku/{id}', [App\Http\Controllers\pengembalianController::class, 'create'])->name('kembalikan_buku');

    Route::get('/edit_profile/{id}', [App\Http\Controllers\UserController::class, 'edit_profile']);
    Route::post('/edit_profile_proses/{id}', [App\Http\Controllers\UserController::class, 'edit_profile_proses']);
    Route::get('/cetak_peminjaman', [App\Http\Controllers\peminjamanController::class, 'cetak_peminjaman'])->name('cetak_peminjaman');
    Route::get('/cetak_pengembalian', [App\Http\Controllers\pengembalianController::class, 'cetak_pengembalian'])->name('cetak_pengembalian');
});

Auth::routes();
