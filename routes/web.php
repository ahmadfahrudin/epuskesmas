<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;


Route::get('/', [PengunjungController::class, 'index']);

// PENGUNJUNG
Route::get('/pendaftaran', [PengunjungController::class, 'create'])->name('pengunjung.create');
Route::post('/pendaftaran', [PengunjungController::class, 'store'])->name('pengunjung.store');
Route::get('/about', [PengunjungController::class, 'about']);
Route::get('/service', [PengunjungController::class, 'service']);
Route::get('/dokter', [PengunjungController::class, 'dokter']);
Route::get('/contact', [PengunjungController::class, 'contact']);

// ADMIN
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/datacreate', [AdminController::class, 'datacreate'])->name('data.create');
    Route::post('/admin/datacreate', [AdminController::class, 'datastore'])->name('data.store');
    Route::get('/admin/{id}/edit', [AdminController::class, 'dataedit'])->name('data.edit');
    Route::put('/admin/{id}', [AdminController::class, 'dataupdate'])->name('data.update');
    Route::delete('/admin/{id}', [AdminController::class, 'datadestroy'])->name('data.destroy');

    // LAPORAN
    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
    Route::get('/admin/laporan/{tgl_kunjung}', [AdminController::class, 'tgldetail'])->name('admin.tgldetail');
    Route::get('/laporan/poli/{id}', [AdminController::class, 'polidetail']);

    // LAYANAN POLI
    Route::get('/admin/poli', [AdminController::class, 'poliindex'])->name('poli.index');
    Route::post('/admin/poli', [AdminController::class, 'polistore'])->name('poli.store');
    Route::get('/admin/poli/{id}/edit', [AdminController::class, 'poliedit'])->name('poli.edit');
    Route::put('/admin/poli/{id}', [AdminController::class, 'poliupdate'])->name('poli.update');
    Route::delete('/admin/poli/{id}', [AdminController::class, 'polidelete'])->name('poli.delete');

    // USER
    Route::get('/admin/user', [AdminController::class, 'userindex'])->name('user.index');
    Route::post('/admin/user', [AdminController::class, 'userstore'])->name('user.store');
    Route::get('/admin/user/{id}/edit', [AdminController::class, 'useredit'])->name('user.edit');
    Route::put('/admin/user/{id}', [AdminController::class, 'userupdate'])->name('user.update');
    Route::delete('/admin/user/{id}', [AdminController::class, 'userdelete'])->name('user.delete');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

// LOGIN
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');