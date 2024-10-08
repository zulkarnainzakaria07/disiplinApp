<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;

class PelanggaranController extends Controller
{
    public function index()
    {
        $data = Pelanggaran::all();
        return view('pelanggaran.index', compact(['data']));
    }

    public function create()
    {
        return view('pelanggaran.create');
    }

    public function store(Request $request)
    {
        $nama = $request->nama;
        $poin = $request->poin;

        Pelanggaran::create(
            [
                'nama' => $nama,
                'poin' => $poin
            ]
        );
        
        return redirect(route('pelanggaran.index'));
    }

    public function edit($id)
    {
        $data = Pelanggaran::where('id','=',$id)->first();
        return view('pelanggaran.edit',compact(['data']));
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $data = Pelanggaran::where('id','=',$id)->first();
        $data['nama'] = $request->nama;
        $data['poin'] = $request->poin;
        $data->update();

        return redirect(route('pelanggaran.index'));
    }

    public function destroy(Request $request)
    {    
        $data = Pelanggaran::find($request->id);
        $data->delete();
        return redirect()->route('pelanggaran.index');
    }
}
