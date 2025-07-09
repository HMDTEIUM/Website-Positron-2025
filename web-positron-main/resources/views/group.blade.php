@extends('layouts.app')

@section('content')
    <!-- Section Pencarian -->
    <section class="bg-white min-vh-100 py-5 pt-md-5 pt-4">
        <div class="container animate__animated animate__fadeIn">
            <!-- Judul -->
            <h2 class="text-center fw-bold mb-4 display-5">
                Cari Data Mahasiswa POSITRON 2025
            </h2>

            <!-- Filter Header -->
            <div class="d-flex justify-content-center mb-4 gap-3 flex-wrap">
                <button type="button" class="filter-btn btn btn-outline-dark rounded-pill px-4 py-2 active"
                    data-filter="nama">Nama</button>
                <button type="button" class="filter-btn btn btn-outline-dark rounded-pill px-4 py-2"
                    data-filter="prodi">Prodi</button>
                <button type="button" class="filter-btn btn btn-outline-dark rounded-pill px-4 py-2"
                    data-filter="kelompok">Kelompok</button>
            </div>

            <!-- Search Form -->
            <div class="d-flex justify-content-center mb-4">
                <form action="{{ route('group.search') }}" method="GET" class="w-100" style="max-width: 700px;"
                    onsubmit="showLoading()">
                    <input type="hidden" name="filter_by" id="filter_by" value="nama">
                    <div class="input-group shadow-lg rounded-pill overflow-hidden">
                        <input type="text" name="filter_value" class="form-control border-0 px-4 py-3 fs-5"
                            id="searchInput" placeholder="Masukkan Nama Mahasiswa..." required>
                        <button class="btn btn-dark px-4 fs-5" type="submit">
                            <i class="bi bi-search me-1"></i> Cari
                        </button>
                    </div>
                </form>
            </div>

            <!-- Loading Spinner -->
            <div id="loadingSpinner" class="text-center mt-4 d-none">
                <div class="spinner-border text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="text-muted mt-2 fs-6">Sedang mencari data...</p>
            </div>

            <!-- Teks Petunjuk -->
            <p class="text-center text-muted fst-italic mt-4 fs-6">
                Silakan masukkan data untuk melakukan pencarian.
            </p>
        </div>
    </section>

    <!-- Script Interaktif Filter -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const filterInput = document.getElementById('filter_by');
            const searchInput = document.getElementById('searchInput');

            const placeholderMap = {
                'nama': 'Masukkan Nama Mahasiswa...',
                'prodi': 'Masukkan Program Studi...',
                'kelompok': 'Masukkan Nama Kelompok...'
            };

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const filter = button.getAttribute('data-filter');
                    filterInput.value = filter;
                    searchInput.placeholder = placeholderMap[filter];
                });
            });
        });

        function showLoading() {
            document.getElementById('loadingSpinner').classList.remove('d-none');
        }
    </script>

    <!-- CDN Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
