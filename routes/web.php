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

Route::get('/', [App\Http\Controllers\websiteController::class, 'index'])->name('home.website');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('profesi',  App\Http\Controllers\ProfesiController::class);
    Route::resource('latar_belakang',  App\Http\Controllers\LatarBelakangController::class);
    Route::resource('majikan',  App\Http\Controllers\MajikanController::class);
    Route::post('/aktif_majikan/{id}', [App\Http\Controllers\MajikanController::class, 'aktif_majikan'])->name('aktif_majikan');
    Route::resource('file_berkas_majikan', App\Http\Controllers\FileBerkasMajikanController::class);
    Route::resource('pekerja', App\Http\Controllers\PekerjaController::class);
    Route::post('/aktif_pekerja/{id}', [App\Http\Controllers\PekerjaController::class, 'aktif_pekerja'])->name('aktif_pekerja');
    Route::resource('foto_detail_pekerjaan',  App\Http\Controllers\FotoDetailPekerjaanController::class);
    Route::resource('file_berkas_pekerja', App\Http\Controllers\FileBerkasPekerjaController::class);
    Route::resource('lokasi_kerja', App\Http\Controllers\LokasiKerjaController::class);
    Route::resource('pemesanan', App\Http\Controllers\PemesananController::class);
    Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);
    Route::resource('detail_transaksi', App\Http\Controllers\DetailTransaksiController::class);
    Route::resource('ulasan', App\Http\Controllers\UlasanController::class);
    Route::resource('payment_method', App\Http\Controllers\PaymentMethodController::class);

    Route::get('/edit_profile/{id}', [App\Http\Controllers\UserController::class, 'edit_profile']);
    Route::post('/edit_profile_proses/{id}', [App\Http\Controllers\UserController::class, 'edit_profile_proses']);

    Route::post('/edit_profile_majikan_proses/{id}', [App\Http\Controllers\UserController::class, 'edit_profile_majikan_proses']);

    Route::post('/edit_profile_pekerja_proses/{id}', [App\Http\Controllers\UserController::class, 'edit_profile_pekerja_proses']);
    Route::get('/hapus_gallery/{id}', [App\Http\Controllers\UserController::class, 'hapus_gallery'])->name('hapus_gallery');
    Route::post('/hapus_berkas_pekerja', [App\Http\Controllers\UserController::class, 'hapus_berkas_pekerja'])->name('hapus_berkas_pekerja');
    Route::post('/hapus_berkas_majikan', [App\Http\Controllers\UserController::class, 'hapus_berkas_majikan'])->name('hapus_berkas_majikan');
    Route::post('/hapus_notif', [App\Http\Controllers\HomeController::class, 'hapus_notif'])->name('hapus_notif');
});

Auth::routes();
Route::post('/register_proses', [App\Http\Controllers\UserController::class, 'register_proses'])->name('register_proses');
Route::post('/register_proses', [App\Http\Controllers\UserController::class, 'register_proses'])->name('register_proses');


Route::get('/home_latar_belakang/{id}', [App\Http\Controllers\websiteController::class, 'home_latar_belakang'])->name('home_latar_belakang');
Route::get('/home_profesi/{id}', [App\Http\Controllers\websiteController::class, 'home_profesi'])->name('home_profesi');
Route::get('/pekerja_detail/{id}', [App\Http\Controllers\websiteController::class, 'pekerja_detail'])->name('pekerja_detail');
Route::get('/website', [App\Http\Controllers\websiteController::class, 'index'])->name('home.website');
Route::get('/billing', [App\Http\Controllers\websiteController::class, 'billing'])->name('home.billing');
Route::get('/details', [App\Http\Controllers\websiteController::class, 'details'])->name('home.details');
Route::get('/order', [App\Http\Controllers\websiteController::class, 'order'])->name('home.order');
