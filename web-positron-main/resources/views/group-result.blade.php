@extends('layouts.app')

@section('content')
<section id="resultSection" class="result-section py-5 min-vh-100" style="opacity: 0;">
    <div class="container">
        <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown text-light">
            Hasil Pencarian
        </h2>

        @if (count($hasil))
            <p class="text-center text-light mb-4 animate__animated animate__fadeIn animate__delay-05s">
                Jika Anda adalah mahasiswa baru yang terdaftar, silakan hubungi <strong>mentor</strong> pada baris di
                bawah ini untuk bergabung ke grup POSITRON.
            </p>

            <div class="table-responsive animate__animated animate__fadeIn animate__delay-1s">
                <table class="table table-bordered table-hover bg-white shadow-sm rounded-3 text-center">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Kelompok</th>
                            <th>Mentor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil as $index => $mahasiswa)
                            <tr
                                class="animate__animated animate__fadeIn animate__delay-{{ number_format(1.2 + $index * 0.05, 2) }}s">
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->prodi }}</td>
                                <td>{{ $mahasiswa->kelompok }}</td>
                                <td>{{ $mahasiswa->mentor }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center text-warning mt-4 fw-semibold animate__animated animate__fadeIn animate__delay-1s">
                Data tidak ditemukan.
            </p>
        @endif

        <div class="text-center mt-5">
            <a href="{{ route('group') }}" class="btn btn-outline-light rounded-pill px-4 py-2">
                <i class="bi bi-arrow-left me-1"></i> Kembali ke Pencarian
            </a>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
.result-section {
    position: relative;
    background: url('/images/background-positron-results.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
}

/* Overlay */
.result-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
}

/* Keep content above overlay */
.result-section > * {
    position: relative;
    z-index: 1;
}

/* Glow for the entire section border */
.result-section {
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.3) inset;
}
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Delay tampilkan hasil 400ms
    setTimeout(function () {
        const section = document.getElementById('resultSection');
        section.style.transition = 'opacity 0.5s ease-in';
        section.style.opacity = 1;
    }, 400);
});
</script>

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
