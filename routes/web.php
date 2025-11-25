<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

// Route Halaman Depan
Route::get('/', [FrontController::class, 'index'])->name('home');

// Route Berita
Route::get('/berita', [FrontController::class, 'berita'])->name('berita.index');
Route::get('/berita/{slug}', [FrontController::class, 'detailBerita'])->name('berita.show');

// Route Produk
Route::get('/produk', [FrontController::class, 'produk'])->name('produk.index');
Route::get('/produk/{slug}', [FrontController::class, 'detailProduk'])->name('produk.show');

// Route Halaman Statis
Route::get('/tentang-kami', [FrontController::class, 'tentang'])->name('tentang');
Route::get('/demplot', [FrontController::class, 'demplot'])->name('demplot');
Route::get('/kontak', [FrontController::class, 'kontak'])->name('kontak');

// Route Pengurus
Route::get('/pengurus', [FrontController::class, 'pengurus'])->name('pengurus.index');
Route::get('/pengurus/{id}', [FrontController::class, 'detailPengurus'])->name('pengurus.show');