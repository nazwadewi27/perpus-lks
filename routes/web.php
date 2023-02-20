<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AnggotaController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\PesanController as AdminPesanController;
use App\Http\Controllers\admin\BukuController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\PeminjamanController;
use App\Http\Controllers\admin\PenerbitController;
use App\Http\Controllers\admin\IdentitasController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PeminjamanController as UserPeminjamanController;
use App\Http\Controllers\user\PengembalianController;
use App\Http\Controllers\user\ProfileController;
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
    //peminjaman
    Route::get('/peminjaman', [UserPeminjamanController::class, 'index'])->name('user.peminjaman.index');
    Route::get('/peminjaman/form' , [UserPeminjamanController::class , 'indexForm'])->name('user.peminjaman.form');
    Route::post('/peminjaman/add', [UserPeminjamanController::class, 'store'])->name('user.peminjaman.add');
    Route::post('/form_peminjaman' , [PeminjamanController::class , 'form']);
    //pengembalian
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('user.pengembalian.index');
    Route::post('/pengembalian/add', [PengembalianController::class, 'store'])->name('user.pengembalian.add');
    Route::get('/pengembalian/form', [PengembalianController::class, 'form'])->name('user.pengembalian.form');
    //profile
    Route::get('/profile' , [ProfileController::class, 'index'])->name('user.profile');
    Route::put('/profile/update/', [ProfileController::class , 'update'])->name('user.profile.update');
    //pessan
    Route::get('/pesan-terkirim', [PesanController::class, 'pesan_terkirim'])->name('user.pesan_terkirim');
    Route::post('/kirim-pesan', [PesanController::class, 'kirim_pesan'])->name('user.kirim_pesan');

    Route::get('/pesan-masuk', [PesanController::class, 'pesan_masuk'])->name('user.pesan_masuk');
    Route::post('/ubah-status', [PesanController::class, 'ubah_status'])->name('user.ubah_status');
});

Route::prefix('admin')->group( function(){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    //peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    //Identitas
    Route::get('/identitas', [IdentitasController::class, 'index'])->name('admin.identitas');
    Route::put('/identitas/edit/{id}', [IdentitasController::class, 'update']);
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
    Route::delete('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.delete');
    //penerbit
    Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit.index');
    Route::post('/penerbit/add', [PenerbitController::class, 'store'])->name('penerbit.add');
    Route::put('/penerbit/update/{id}', [PenerbitController::class , 'update'])->name('penerbit.update');
    Route::delete('/penerbit/delete/{id}', [PenerbitController::class, 'destroy'])->name('penerbit.delete');
    //kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::post('/kategori/add', [KategoriController::class, 'store'])->name('kategori.add');
    Route::put('/kategori/update/{id}', [KategoriController::class , 'update'])->name('kategori.update');
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');
    //pesan
    Route::get('/pesan-masuk', [AdminPesanController::class, 'pesanMasuk'])->name('admin.pesan_masuk');
    Route::post('/admin-status', [AdminPesanController::class, 'admin_status'])->name('admin.ubah_status');

    Route::get('/pesan-terkirim', [AdminPesanController::class, 'pesanTerkirim'])->name('admin.pesan_terkirim');
    Route::post('/kirim-pesan', [AdminPesanController::class, 'kirimPesan'])->name('admin.kirim_pesan');

});