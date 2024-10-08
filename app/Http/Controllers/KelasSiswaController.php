<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasSiswa;
use App\Models\Siswa;
use App\Models\Kelas;

class KelasSiswaController extends Controller
{
    public function list($id)
    {
        $id_kelas = $id;
        // Ambil semua siswa yang sudah ada di kelas_siswa untuk kelas tertentu
        $siswaTerdaftar = KelasSiswa::pluck('siswa_id');

        $students = Siswa::whereNotIn('id', $siswaTerdaftar)->simplePaginate(10);
        return view('kelasSiswa.list',compact(['students','id_kelas']));
    }

    public function listed($id)
    {
        $id_kelas = $id;
        // Ambil semua siswa yang sudah ada di kelas_siswa untuk kelas tertentu
        $siswaTerdaftar = KelasSiswa::where('kelas_id',$id)->pluck('siswa_id');

        $students = Siswa::whereIn('id', $siswaTerdaftar)->simplePaginate(10);
        return view('kelasSiswa.listed',compact(['students','id_kelas']));
    }

    public function add(Request $request)
    {
        // Ambil ID siswa dari checkbox yang dipilih
        $studentIds = $request->input('student_ids');

        // Cek apakah ada siswa yang dipilih
        if (empty($studentIds)) {
            return redirect()->back()->with('error', 'Tidak ada siswa yang dipilih.');
        }

        // Misalnya kita ingin menambahkan siswa ke dalam grup/kelas tertentu
        $kelas = Kelas::find($request->id_kelas);
        foreach ($studentIds as $studentId) {  
            $kelas->siswa()->attach($studentId);
        }

        return redirect()->back()->with('success', 'Siswa berhasil ditambahkan secara massal.');
   
    }

    public function remove(Request $request)
    {
        // Ambil ID siswa dari checkbox yang dipilih
        $studentIds = $request->input('student_ids');

        // Cek apakah ada siswa yang dipilih
        if (empty($studentIds)) {
            return redirect()->back()->with('error', 'Tidak ada siswa yang dipilih.');
        }

        // Misalnya kita ingin menambahkan siswa ke dalam grup/kelas tertentu
        $kelas = Kelas::find($request->id_kelas);
        foreach ($studentIds as $studentId) {  
            $kelas->siswa()->detach($studentId);
        }

        return redirect()->back()->with('success', 'Siswa berhasil ditambahkan secara massal.');
   
    }
}

