<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Guru::all();
        return view('guru.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('foto'); //mengambil identitas file yg diupload dari form
        $name = $file->getClientOriginalName(); //mengambil nama file yang diupload
               
        $request->file('foto')->move('foto_guru',$name);    // memidahkan file dari komputer client ke server  
        
        Guru::create([
            'nik' => $request->nik,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'email' => $request->email,
            'telp' => $request->telp,
            'foto' => $name
        ]); // pengiriman nama file ke database

        return redirect()->route('guru.index');
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
        $data = Guru::where('id','=',$id)->first();
        return view('guru.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Guru::where('id','=',$request->id)->first();
        $data->nik = $request->nik;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->jk = $request->jk;
        $data->email = $request->email;
        $data->telp = $request->telp;
        $data->update();

        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //cari data yg akan dihapus sesuai idnya        
        $data = Guru::find($request->id);
        
        //set lokasi penghapusan file
        $lokasi = public_path('foto_guru/'.$data->foto);
        
        //jika file ditemukan makan lakukan penghapusan file
        if (File::exists($lokasi)) {
            File::delete($lokasi);  
        } 

        //hapus data di database
        $data->delete();

        //kembalikan ke halaman guru.index
        return redirect()->route('guru.index');
    }
}
