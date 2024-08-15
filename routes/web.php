<?php

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
// BELAJARRR
Route::resource('belajar', \App\Http\Controllers\BelajarController::class);
Route::get('tambah', [\App\Http\Controllers\BelajarController::class, 'tambah']);
Route::post('store_tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store_tambah');
Route::get('kurang', [\App\Http\Controllers\BelajarController::class, 'kurang']);
Route::post('store_kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store_kurang');
Route::get('bagi', [\App\Http\Controllers\BelajarController::class, 'bagi']);
Route::post('store_bagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store_bagi');
Route::get('kali', [\App\Http\Controllers\BelajarController::class, 'kali']);
Route::post('store_kali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('store_kali');


// resource adalah get,update,delete
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::post('actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');
Route::resource('book', \App\Http\Controllers\BooksController::class);
Route::resource('pinjam', \App\Http\Controllers\PinjamController::class);
Route::get('getBuku/{category_id}', [\App\Http\Controllers\AjaxController::class, 'getDataBuku']);
Route::get('getBuku/{buku_id}', [\App\Http\Controllers\AjaxController::class, 'getBuku']);

Route::get('/', function () {
    return view('welcome');
});
