<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubKriteriaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Login
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'cekStatusLogin'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// Alternatif
Route::resource('/alternatif', AlternatifController::class)->middleware('auth');

// Sub Ktriteria
Route::get('/subkriteria', [SubKriteriaController::class, 'lihatSub'])->name('sub')->middleware('auth');
Route::get('/subkriteria/tambah/{id}', [SubKriteriaController::class, 'tambahSub'])->name('tambah_sub')->middleware('auth');
Route::post('/subkriteria', [SubKriteriaController::class, 'tambah']);
Route::get('/subkriteria/ubah/{id}', [SubKriteriaController::class, 'ubahSub'])->name('ubah_sub')->middleware('auth');
Route::post('/subkriteria/{id}/edit', [SubKriteriaController::class, 'ubah']);
Route::post('/subkriteria/{id}/delete', [SubKriteriaController::class, 'hapus']);

Route::resource('/kriteria', KriteriaController::class);
// ubah
Route::get('/kriteria/ubah/{id}', [KriteriaController::class, 'ubahKriteria'])->name('ubah_kriteria')->middleware('auth');
Route::post('/kriteria/{id}/edit', [KriteriaController::class, 'ubah']);
