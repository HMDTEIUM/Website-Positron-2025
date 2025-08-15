<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'data_mahasiswa'; // ganti sesuai nama tabel asli di database
    protected $fillable = [
        'nama_mahasiswa',
        'program_studi',
        'nim',
        'mentor',
        'kelompok',
    ];
}
