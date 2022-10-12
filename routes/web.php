<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Models\DetailTransaksi;
use App\Models\Produk;
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

Route::get('/', [ProdukController::class , 'index'])->name('home');
Route::get('/login', [UserController::class, 'login'])->name('view.login');
Route::post('/login', [UserController::class, 'postlogin'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('view.register');
Route::post('/register', [UserController::class, 'postregister'])->name('register');
Route::get('/detail/{produk}', [ProdukController::class, 'detail'])->name('view.detail');
Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::post('/keranjang/{produk}', [ProdukController::class, 'postkeranjang'])->name('keranjang');
    Route::get('/keranjang', [ProdukController::class, 'keranjang'])->name('view.keranjang');
    Route::get('/bayar/{detailtransaksi}', [DetailTransaksiController::class, 'bayar'])->name('view.bayar');
    Route::post('/bayar/{detailtransaksi}', [DetailTransaksiController::class, 'postbayar'])->name('bayar');
    Route::get('/sumary', [UserController::class , 'summary'])->name('view.summary');

    Route::get('/admin/produk', [AdminController::class , 'index'])->name('view.produk.admin');
    Route::get('/admin/produk/add', [ProdukController::class, 'addproduk'])->name('view.produk.add');
    Route::post('/admin/produk', [AdminController::class, 'storeproduk'])->name('store.produk');
    Route::delete('/admin/produk/{produk}', [ProdukController::class, 'destroy'])->name('destroy.produk');
    Route::put('/edit/produk/{produk}', [AdminController::class, 'updateproduk'])->name('edit.produk');
    Route::get('/edit/produk/{produk}', [AdminController::class, 'edit'])->name('view.edit');

    Route::get('/admin/user', [AdminController::class, 'userindex'])->name('view.kelolauser');
    Route::delete('/admin/user/{user}', [AdminController::class, 'destroyuser'])->name('user.delete');
});