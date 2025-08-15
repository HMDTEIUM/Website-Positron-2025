@extends('layouts.app')

@section('content')
    <section id="resultSection" class="py-5 bg-light min-vh-100" style="opacity: 0;">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown text-black">Hasil Pencarian</h2>
            
            @if (!empty($hasil) && $hasil->count())
                <!-- Filter & Pagination Controls -->
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
                    <div class="mb-2 mb-md-0">
                        <span class="text-muted">
                            Menampilkan {{ $hasil->firstItem() ?? 0 }} - {{ $hasil->lastItem() ?? 0 }} 
                            dari {{ $hasil->total() ?? 0 }} hasil
                        </span>
                    </div>
                    
                    <!-- Dropdown untuk mengatur jumlah data per halaman -->
                    <div class="d-flex align-items-center gap-2">
                        <label for="perPage" class="text-muted mb-0">Tampilkan:</label>
                        <select id="perPage" class="form-select form-select-sm" style="width: auto;" onchange="changePerPage()">
                            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per_page') == 10 || !request('per_page') ? 'selected' : '' }}>10</option>
                            <option value="15" {{ request('per_page') == 15 ? 'selected' : '' }}>15</option>
                            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                        </select>
                        <span class="text-muted">per halaman</span>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive animate__animated animate__fadeIn animate__delay-1s">
                    <table class="table table-bordered table-hover bg-white shadow-sm rounded-3 text-center">
                        <thead class="table-dark text-white">
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Kelompok</th>
                                <th>Mentor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $index => $mahasiswa)
                                <tr class="animate__animated animate__fadeIn animate__delay-{{ number_format(1.2 + $index * 0.05, 2) }}s">
                                    <td>{{ $hasil->firstItem() + $index }}</td>
                                    <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                    <td>{{ $mahasiswa->program_studi }}</td>
                                    <td>{{ $mahasiswa->kelompok }}</td>
                                    <td>{{ $mahasiswa->mentor }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Custom Pagination -->
                @if ($hasil->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        <nav aria-label="Pagination Navigation">
                            <ul class="pagination pagination-lg">
                                {{-- Previous Page Link --}}
                                @if ($hasil->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link px-3 py-2">Previous</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link px-3 py-2" href="{{ $hasil->previousPageUrl() }}" rel="prev">Previous</a>
                                    </li>
                                @endif

                                {{-- First Page --}}
                                @if ($hasil->currentPage() > 3)
                                    <li class="page-item">
                                        <a class="page-link px-3 py-2" href="{{ $hasil->url(1) }}">1</a>
                                    </li>
                                    @if ($hasil->currentPage() > 4)
                                        <li class="page-item disabled">
                                            <span class="page-link px-3 py-2">...</span>
                                        </li>
                                    @endif
                                @endif

                                {{-- Page Numbers Around Current Page --}}
                                @for ($i = max(1, $hasil->currentPage() - 2); $i <= min($hasil->lastPage(), $hasil->currentPage() + 2); $i++)
                                    @if ($i == $hasil->currentPage())
                                        <li class="page-item active">
                                            <span class="page-link px-3 py-2">{{ $i }}</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link px-3 py-2" href="{{ $hasil->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endif
                                @endfor

                                {{-- Last Page --}}
                                @if ($hasil->currentPage() < $hasil->lastPage() - 2)
                                    @if ($hasil->currentPage() < $hasil->lastPage() - 3)
                                        <li class="page-item disabled">
                                            <span class="page-link px-3 py-2">...</span>
                                        </li>
                                    @endif
                                    <li class="page-item">
                                        <a class="page-link px-3 py-2" href="{{ $hasil->url($hasil->lastPage()) }}">{{ $hasil->lastPage() }}</a>
                                    </li>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($hasil->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link px-3 py-2" href="{{ $hasil->nextPageUrl() }}" rel="next">Next</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link px-3 py-2">Next</span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                @endif

                <!-- Page Info -->
                <div class="text-center mt-3">
                    <small class="text-muted">
                        Halaman {{ $hasil->currentPage() }} dari {{ $hasil->lastPage() }}
                    </small>
                </div>

            @else
                <p class="text-center text-danger mt-4 fw-semibold animate__animated animate__fadeIn animate__delay-1s">
                    Data tidak ditemukan.
                </p>
            @endif

            <div class="text-center mt-5">
                <a href="{{ route('group') }}" class="btn btn-outline-dark rounded-pill px-4 py-2">
                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Pencarian
                </a>
            </div>
        </div>
    </section>

    <!-- CDN Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const section = document.getElementById('resultSection');
                section.style.transition = 'opacity 0.5s ease-in';
                section.style.opacity = 1;
            }, 400);
        });

        function changePerPage() {
            const perPage = document.getElementById('perPage').value;
            const url = new URL(window.location);
            url.searchParams.set('per_page', perPage);
            url.searchParams.set('page', 1); // Reset ke halaman pertama
            window.location.href = url.toString();
        }
    </script>

    <style>
        .pagination {
            --bs-pagination-padding-x: 0.75rem;
            --bs-pagination-padding-y: 0.5rem;
            --bs-pagination-font-size: 0.95rem;
            --bs-pagination-color: #6c757d;
            --bs-pagination-bg: #fff;
            --bs-pagination-border-width: 1px;
            --bs-pagination-border-color: #dee2e6;
            --bs-pagination-border-radius: 0.375rem;
            --bs-pagination-hover-color: #495057;
            --bs-pagination-hover-bg: #f8f9fa;
            --bs-pagination-hover-border-color: #dee2e6;
            --bs-pagination-focus-color: #495057;
            --bs-pagination-focus-bg: #f8f9fa;
            --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            --bs-pagination-active-color: #fff;
            --bs-pagination-active-bg: #6f42c1;
            --bs-pagination-active-border-color: #6f42c1;
            --bs-pagination-disabled-color: #6c757d;
            --bs-pagination-disabled-bg: #fff;
            --bs-pagination-disabled-border-color: #dee2e6;
        }
        
        .pagination .page-link {
            border-radius: 0.375rem !important;
            margin: 0 1px;
            min-width: 45px;
            text-align: center;
            font-weight: 500;
            transition: all 0.15s ease-in-out;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #212529;
            border-color: #212529;
            box-shadow: 0 2px 4px rgba(33, 37, 41, 0.3);
        }
        
        .pagination .page-link:hover:not(.disabled) {
            background-color: #f8f9fa;
            border-color: #212529;
            color: #212529;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .pagination .page-item.disabled .page-link {
            color: #adb5bd;
            background-color: #f8f9fa;
        }
        
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            font-weight: 600;
            min-width: 80px;
        }
    </style>
@endsection