<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;

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
// frontview
Route::get('/', [ClientController::class, 'showHome' ]);
Route::get('shop', [ClientController::class, 'showshop' ]);
Route::get('home', [ClientController::class, 'showHome' ]);
Route::get('about', [ClientController::class, 'showAbout' ]);
Route::get('about/{produk}', [ClientController::class, 'showAbout' ]);
Route::get('blog', [ClientController::class, 'showBlog' ]);
Route::get('contact', [ClientController::class, 'showBlog']);
Route::get('cart', [ClientController::class, 'showCart']);

Route::get('/beranda', [HomeController::class, 'showBeranda']);
Route::get('/kategori', [HomeController::class, 'showKategori']);

Route::get('/promo', [HomeController::class, 'showPromo']);
Route::get('/pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('/supplier', [HomeController::class, 'showSupplier']);
Route::get('/login', [HomeController::class, 'showLogin']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
