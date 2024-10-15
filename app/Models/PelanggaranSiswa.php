<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelanggaranSiswa extends Model
{
    use HasFactory;

    protected $fillable = ['siswa_id','pelanggaran_id','waktu','catatanTemuan','foto','catatanPenanganan','status'];
}
