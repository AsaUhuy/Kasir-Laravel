<?php

use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\AdminTransaksiDetailController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BerandaController::class,'index']);

//Language
Route::get('/lang/{lang}', [LanguageController::class, 'change'])->name('lang.change');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/create', [BarangController::class,'create']);
Route::post('/barang/store', [BarangController::class,'store']);
Route::get('/barang/hapus/{id}',[BarangController::class,'destroy']);
Route::get('/barang/edit/{id}',[BarangController::class,'edit']);
Route::post('/barang/update',[BarangController::class,'update']);

// Route::resource('transaksi', [AdminTransaksiController::class]);
Route::get('/transaksi', [AdminTransaksiController::class, 'index']);
Route::get('/transaksi/create', [AdminTransaksiController::class, 'create']);
Route::post('/transaksi/store', [AdminTransaksiController::class, 'store']);
Route::get('/trankasi/hapus/{id}', [AdminTransaksiController::class, 'destroy']);
Route::get('/transaksi/edit/{id}', [AdminTransaksiController::class, 'edit']);
Route::post('/transaksi/update', [AdminTransaksiController::class, 'update']);

//LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin',  [LoginController::class, 'actionlogin'])->name('actionlogin');

//LOG OUT
Route::get('beranda', [BerandaController::class, 'index'])->name('beranda')->middleware('auth');
Route::get('/logout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::middleware(['guest'])->group(function(){
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');



});


