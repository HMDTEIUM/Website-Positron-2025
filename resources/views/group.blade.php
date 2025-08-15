@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endpush

@section('content')
<section class="bg-white min-vh-100 py-5 pt-md-5 pt-4">
    <div class="container animate__animated animate__fadeIn">

        <!-- Judul -->
        <h2 class="text-center fw-bold mb-4 display-5">
            Cari Data Mahasiswa POSITRON 2025
        </h2>

        <!-- Filter Header -->
        <div class="d-flex justify-content-center mb-4 gap-3 flex-wrap">
            @php
                $filters = [
                    'nama' => 'Nama',
                    'nim' => 'NIM',
                    'kelompok' => 'Kelompok',
                    'mentor' => 'Mentor'
                ];
            @endphp
            @foreach ($filters as $key => $label)
                <button type="button"
                    class="filter-btn btn btn-outline-dark rounded-pill px-4 py-2 {{ $key === 'nama' ? 'active' : '' }}"
                    data-filter="{{ $key }}">
                    {{ $label }}
                </button>
            @endforeach
        </div>

        <!-- Search Form -->
        <div class="d-flex justify-content-center mb-4">
            <form action="{{ route('group.search') }}" method="GET" class="w-100" style="max-width: 700px;"
                onsubmit="showLoading()">
                <input type="hidden" name="filter_by" id="filter_by" value="nama">
                <!-- Tambahan untuk mempertahankan per_page setting -->
                <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                
                <div class="input-group shadow-lg rounded-pill overflow-hidden">
                    <input type="text" name="filter_value" id="searchInput"
                        class="form-control border-0 px-4 py-3 fs-5"
                        placeholder="Masukkan Nama Mahasiswa..."
                        aria-label="Input pencarian" required>
                    <button class="btn btn-dark px-4 fs-5" type="submit">
                        <i class="bi bi-search me-1"></i> Cari
                    </button>
                </div>
            </form>
        </div>

        <!-- Loading Spinner -->
        <div id="loadingSpinner" class="text-center mt-4 d-none">
            <div class="spinner-border text-dark" role="status" aria-hidden="true"></div>
            <p class="text-muted mt-2 fs-6">Sedang mencari data, mohon tunggu...</p>
        </div>

        <!-- Teks Petunjuk -->
        <p class="text-center text-muted fst-italic mt-4 fs-6">
            Silakan masukkan data sesuai filter untuk melakukan pencarian.
        </p>

        <!-- Display success/error messages -->
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</section>
@endsection

@push('scripts')
<script>
(function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const filterInput = document.getElementById('filter_by');
    const searchInput = document.getElementById('searchInput');

    const placeholderMap = {
        nama: 'Masukkan Nama Mahasiswa...',
        nim: 'Masukkan NIM Lengkap (harus utuh)...',
        kelompok: 'Masukkan Nomor atau Nama Kelompok...',
        mentor: 'Masukkan Nama Mentor...'
    };

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Hapus aktif dari semua tombol
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Aktifkan tombol ini
            this.classList.add('active');

            // Ambil jenis filter dari data-filter
            const filter = this.dataset.filter;
            filterInput.value = filter;

            // Update placeholder
            searchInput.placeholder = placeholderMap[filter] || 'Masukkan kata kunci...';

            // Reset input pencarian & fokus
            searchInput.value = '';
            searchInput.focus();
        });
    });
})();

function showLoading() {
    document.getElementById('loadingSpinner').classList.remove('d-none');
}

function updatePerPageDefault() {
    const perPage = document.getElementById('defaultPerPage').value;
    document.querySelector('input[name="per_page"]').value = perPage;
}
</script>
@endpush