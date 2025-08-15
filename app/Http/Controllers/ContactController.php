<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Data dummy untuk CP Prodi
        $cpProdi = [
            ['nama' => 'Afra', 'prodi' => 'Teknik Informatika', 'wa' => '6281234567890'],
            ['nama' => 'Nini', 'prodi' => 'Pendidikan Teknik Informatika', 'wa' => '6281234567891'],
            ['nama' => 'Adit', 'prodi' => 'Teknik Elektro', 'wa' => '6281234567892'],
            ['nama' => 'Fither', 'prodi' => 'Pendidikan Teknik Elektro', 'wa' => '6281234567893'],
        ];

        // Data dummy untuk 40 Kakak Mentor
        $mentors = [];
        for ($i = 1; $i <= 40; $i++) {
            $mentors[] = [
                'nama' => 'Mentor ' . $i,
                'kelompok' => $i,
                'wa' => '6281234567' . str_pad($i, 3, '0', STR_PAD_LEFT)
            ];
        }

        return view('contact', compact('cpProdi', 'mentors'));
    }
}
