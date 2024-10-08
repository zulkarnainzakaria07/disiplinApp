<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\PelanggaranController;
use App\Models\Pelanggaran;
use App\Models\Siswa;


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

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');

Route::get('/siswaListToAdd/{id}', [KelasSiswaController::class, 'list'])->name('siswa.listToAdd');
Route::get('/siswaListed/{id}', [KelasSiswaController::class, 'listed'])->name('siswa.listed');
Route::post('/addToKelas', [KelasSiswaController::class, 'add'])->name('siswa.addToKelas');
Route::post('/removeFromKelas', [KelasSiswaController::class, 'remove'])->name('siswa.removeFromKelas');

Route::get('/pelanggaran',[PelanggaranController::class, 'index'])->name('pelanggaran.index');
Route::get('/pelanggaran/create',[PelanggaranController::class, 'create'])->name('pelanggaran.create');
Route::post('/pelanggaran/store', [PelanggaranController::class, 'store'])->name('pelanggaran.store');
Route::get('/pelanggaran/edit/{id}', [PelanggaranController::class, 'edit'])->name('pelanggaran.edit');
Route::post('/pelanggaran/update',[PelanggaranController::class, 'update'])->name('pelanggaran.update');
Route::post('/pelanggaran/destroy',[PelanggaranController::class, 'destroy'])->name('pelanggaran.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/tes', function () {
    $siswa = Siswa::find(1);
    $siswa->kelas()->sync(2);
});