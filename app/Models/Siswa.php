<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable =  ['nis', 
                            'nama', 
                            'tahunMasuk', 
                            'tempatLahir',
                            'tanggalLahir',
                            'telp',
                            'foto'];

    public $timestamps = false;

    public function kelas(){
        return $this->belongsToMany(Kelas::class, 'kelas_siswa');
    }

    public function kelass()
    {
        return $this->belongsTo(Kelas::class);
    }
}
