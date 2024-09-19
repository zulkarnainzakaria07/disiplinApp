<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/update',[SiswaController::class, 'update'])->name('siswa.update');
Route::post('/siswa/destroy',[SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
Route::post('/guru/update',[GuruController::class, 'update'])->name('guru.update');
Route::post('/guru/destroy',[GuruController::class, 'destroy'])->name('guru.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
});