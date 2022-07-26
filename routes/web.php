<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\MasterPelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('admin')->group(function (){
    Route::prefix('user')->group(function (){
        Route::match(['POST','GET'],'', [UserController::class, 'index']);
    });
    Route::prefix('barang')->group(function (){
        Route::match(['POST','GET'],'', [BarangController::class, 'index']);

    });
});


Route::get('/admin', [UserController::class, 'index']);
Route::get('/admin/beranda', [BerandaController::class, 'index']);
Route::get('/admin/tipe', [TipeController::class, 'index']);
Route::get('/admin/laporan', [LaporanController::class, 'index']);
Route::get('/admin/harga', [HargaController::class, 'index']);
Route::get('/admin/klinik', [KlinikController::class, 'index']);
Route::get('/admin/transaksi', [TransaksiController::class, 'index']);
Route::get('/admin/transaksi/cetak/{id}', [TransaksiController::class, 'cetakLaporan']);
Route::get('/admin/laporanpesanan', [LaporanPesananController::class, 'index']);
Route::get('/admin/masterbarang', [MasterBarangController::class, 'index']);
Route::get('/admin/masterpelanggan', [MasterPelangganController::class, 'index']);

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);
