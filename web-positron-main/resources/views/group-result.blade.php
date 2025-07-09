@extends('layouts.app')

@section('content')
    <section id="resultSection" class="py-5 bg-light min-vh-100" style="opacity: 0;">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">Hasil Pencarian</h2>

            @if (count($hasil))
                <p class="text-center text-muted mb-4 animate__animated animate__fadeIn animate__delay-05s">
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

    <!-- Script untuk tampilkan hasil dengan delay -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delay tampilkan hasil 400ms
            setTimeout(function() {
                const section = document.getElementById('resultSection');
                section.style.transition = 'opacity 0.5s ease-in';
                section.style.opacity = 1;
            }, 400);
        });
    </script>
@endsection
