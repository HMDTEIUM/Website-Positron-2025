<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    // Halaman awal pencarian (form saja, belum ada hasil)
    public function index()
    {
        return view('group');
    }

    // Halaman hasil pencarian
    public function search(Request $request)
    {
        $hasil = null;

        if ($request->filled('filter_by') && $request->filled('filter_value')) {
            $filterBy = $request->input('filter_by');
            $filterValue = $request->input('filter_value');

            // Validasi kolom yang boleh digunakan
            $allowedFilters = ['nama', 'prodi', 'kelompok'];
            if (in_array($filterBy, $allowedFilters)) {
                $hasil = Mahasiswa::where($filterBy, 'like', '%' . $filterValue . '%')->get();
            }
        }

        return view('group-result', compact('hasil'));
    }
}
