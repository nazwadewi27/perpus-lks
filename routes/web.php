<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AnggotaController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\BukuController;
use App\Http\Controllers\admin\KategoriController;
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
    //admin
    Route::get('/administrator', [AdminController::class, 'index'])->name('admin.index');
    //anggota
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    //buku
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    //penerbit
    Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit.index');
    //kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    
});