<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pelanggaran;

class KasusController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        $pelanggaran = Pelanggaran::all();
        return view('kasus.index', compact(['siswa','pelanggaran']));
    }
}
