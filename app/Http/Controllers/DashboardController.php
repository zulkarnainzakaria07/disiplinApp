<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\PelanggaranSiswa;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index() {
        $kelas = Kelas::count();
        $siswa = Siswa::count();
        $guru = Guru::count();
        $kasus = PelanggaranSiswa::count();
        return view('dashboard', compact(['kelas','siswa','guru','kasus']));
    }
}
