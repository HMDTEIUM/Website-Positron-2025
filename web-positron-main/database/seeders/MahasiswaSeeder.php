<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::insert([
            [
                'nama' => 'Aldi Pratama',
                'prodi' => 'Teknik Elektro',
                'kelompok' => 'Alpha',
                'mentor' => 'Kak Budi',
            ],
            [
                'nama' => 'Nina Safira',
                'prodi' => 'Teknik Informatika',
                'kelompok' => 'Beta',
                'mentor' => 'Kak Rina',
            ],
            [
                'nama' => 'Rizki Hidayat',
                'prodi' => 'Pendidikan Teknologi Informasi',
                'kelompok' => 'Gamma',
                'mentor' => 'Kak Arif',
            ],
        ]);
    }
}
