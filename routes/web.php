<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AnggotaController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\BukuController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\PeminjamanController;
use App\Http\Controllers\admin\PenerbitController;
use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
});

Route::prefix('admin')->group( function(){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    //peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    //admin
    Route::get('/administrator', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/administrator/add', [AdminController::class, 'store'])->name('admin.add');
    Route::put('/administrator/update/{id}', [AdminController::class , 'update'])->name('admin.update');
    Route::delete('/administrator/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    //anggota
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    Route::post('/anggota/add', [AnggotaController::class, 'store'])->name('anggota.add');
    Route::put('/anggota/update/{id}', [AnggotaController::class , 'update'])->name('anggota.update');
    Route::delete('/anggota/delete/{id}', [AnggotaController::class, 'destroy'])->name('anggota.delete');
    //buku
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::post('/buku/add', [BukuController::class, 'store'])->name('buku.add');
    Route::put('/buku/update/{id}', [BukuController::class , 'update'])->name('buku.update');
    //penerbit
    Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit.index');
    Route::post('/penerbit/add', [PenerbitController::class, 'store'])->name('penerbit.add');
    Route::put('/penerbit/update/{id}', [PenerbitController::class , 'update'])->name('penerbit.update');
    //kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::post('/kategori/add', [KategoriController::class, 'store'])->name('kategori.add');
    Route::put('/kategori/update/{id}', [KategoriController::class , 'update'])->name('kategori.update');

});