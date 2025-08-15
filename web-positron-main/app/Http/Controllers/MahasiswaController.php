<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function group(Request $request)
    {
        $query = $request->input('search');
        
        // Ambil semua data mahasiswa jika tidak ada pencarian
        $members = Mahasiswa::when($query, function ($queryBuilder, $search) {
            return $queryBuilder->where('nama_mahasiswa', 'like', "%{$search}%")
                ->orWhere('nim', 'like', "%{$search}%")
                ->orWhere('program_studi', 'like', "%{$search}%")
                ->orWhere('mentor', 'like', "%{$search}%")
                ->orWhere('kelompok', 'like', "%{$search}%");
        })->get();
        
        return view('group', compact('members', 'query'));
    }

    public function search(Request $request)
    {
        $filterBy = $request->input('filter_by', 'nama');
        $filterValue = $request->input('filter_value');
        $perPage = $request->input('per_page', 10); // Default 10 per halaman
        $query = $filterValue; // untuk kompatibilitas dengan view

        // Validasi per_page
        $allowedPerPage = [5, 10, 15, 25, 50];
        if (!in_array($perPage, $allowedPerPage)) {
            $perPage = 10;
        }

        // Validasi input
        if (empty($filterValue)) {
            return redirect()->route('group')->with('error', 'Silakan masukkan kata kunci pencarian.');
        }

        // Initialize query builder
        $queryBuilder = Mahasiswa::query();

        switch ($filterBy) {
            case 'nama':
                // Search by nama mahasiswa (partial match)
                $queryBuilder->where('nama_mahasiswa', 'like', "%{$filterValue}%");
                break;
                
            case 'nim':
                // Search by NIM (exact match - harus utuh)
                $queryBuilder->where('nim', $filterValue);
                break;
                
            case 'prodi':
                // Search mahasiswa yang program studi mengandung input
                $queryBuilder->where('program_studi', 'like', "%{$filterValue}%");
                break;
                
            case 'kelompok':
                // Search by kelompok (partial match)
                $queryBuilder->where('kelompok', 'like', "%{$filterValue}%");
                break;
                
            case 'mentor':
                // Search by mentor (partial match)
                $queryBuilder->where('mentor', 'like', "%{$filterValue}%");
                break;
                
            default:
                // Default search by nama
                $queryBuilder->where('nama_mahasiswa', 'like', "%{$filterValue}%");
                break;
        }

        // Urutkan berdasarkan nama untuk konsistensi
        $queryBuilder->orderBy('nama_mahasiswa', 'asc');

        // Gunakan paginate dengan parameter yang diperlukan untuk mempertahankan query string
        $hasil = $queryBuilder->paginate($perPage)->appends([
            'filter_by' => $filterBy,
            'filter_value' => $filterValue,
            'per_page' => $perPage
        ]);

        return view('group-result', compact('hasil', 'query', 'filterBy', 'filterValue', 'perPage'));
    }
}
