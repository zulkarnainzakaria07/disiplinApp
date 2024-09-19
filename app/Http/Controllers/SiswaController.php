<?php

namespace App\Http\Controllers;
use App\Models\Siswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $name = $file->getClientOriginalName();

        $request->file('foto')->move('foto_siswa',$name);  
        
        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tahunMasuk' => $request->tahunMasuk,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'telp' => $request->telp,
            'foto' => $name
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Siswa::where('id','=',$id)->first();
        return view('siswa.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {     
        $data = Siswa::where('id','=',$request->id)->first();
        $data->nama = $request->nama;
        $data->jk = $request->jk;
        $data->tahunMasuk = $request->tahunMasuk;
        $data->tempatLahir = $request->tempatLahir;
        $data->tanggalLahir = $request->tanggalLahir;
        $data->telp = $request->telp;
        if($request->file('foto') != null){
            $file = $request->file('foto');
            $name = $file->getClientOriginalName();
            $request->file('foto')->move('foto_siswa',$name);  

            $data->foto = $name;
        }
        $data->update();

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //cari data yg akan dihapus sesuai idnya        
        $data = Siswa::find($request->id);
        
        //set lokasi penghapusan file
        $lokasi = public_path('foto_siswa/'.$data->foto);
        
        //jika file ditemukan makan lakukan penghapusan file
        if (File::exists($lokasi)) {
            File::delete($lokasi);  
        } 

        //hapus data di database
        $data->delete();

        //kembalikan ke halaman guru.index
        return redirect()->route('siswa.index');
    }
}
