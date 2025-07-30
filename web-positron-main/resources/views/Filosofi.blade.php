@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Tentang POSITRON 2025</h2>
            <p class="text-center mb-5">Ini adalah halaman tentang untuk kegiatan ospek Departemen Teknik Elektro dan
                Informatika Universitas Negeri Malang.</p>

            <h3 class="text-center fw-semibold mb-4">Filosofi Logo POSITRON 2025</h3>
            
            <!-- Logo Display -->
            <div class="text-center mb-5">
                <img src="{{ asset('images/logo-positron.png') }}" alt="Logo POSITRON 2025" class="img-fluid" style="max-height: 200px;">
            </div>

            <!-- Logo Elements Explanation -->
            <div class="row g-4 mb-5">
                <div class="col-lg-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                <i class="bi bi-shield-check text-primary fs-4"></i>
                            </div>
                            <h5 class="fw-semibold mb-0">Perisai (Shield)</h5>
                        </div>
                        <p class="text-muted mb-0">Melambangkan perlindungan, keteguhan, dan kesiapan mahasiswa baru dalam menghadapi tantangan perkuliahan dan dunia luar. Ini menunjukkan bahwa POSITRON hadir sebagai wadah pembentukan karakter dan nilai kebersamaan.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                                <i class="bi bi-lightning-fill text-warning fs-4"></i>
                            </div>
                            <h5 class="fw-semibold mb-0">Petir di Tengah</h5>
                        </div>
                        <p class="text-muted mb-0">Petir menggambarkan "energi", "kekuatan", dan "transformasi". Dalam konteks logo ini, petir bermakna sebagai "Unity" — yaitu kekuatan yang menyatukan keempat prodi dalam satu keluarga besar DTEI. Petir menjadi pusat dari konektivitas.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-info bg-opacity-10 rounded-circle p-2 me-3">
                                <i class="bi bi-circle-fill text-info fs-4"></i>
                            </div>
                            <h5 class="fw-semibold mb-0">Empat Lingkaran yang Terhubung</h5>
                        </div>
                        <p class="text-muted mb-0">Melambangkan empat program studi di bawah naungan Departemen Teknik Elektro dan Informatika (DTEI) UM. Empat lingkaran ini saling terhubung, menggambarkan kolaborasi dan sinergi antarmahasiswa lintas prodi.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-secondary bg-opacity-10 rounded-circle p-2 me-3">
                                <i class="bi bi-fonts text-secondary fs-4"></i>
                            </div>
                            <h5 class="fw-semibold mb-0">Tipografi "POSITRON 2025"</h5>
                        </div>
                        <p class="text-muted mb-0">Menggunakan font tegas dan modern, menunjukkan kekokohan dan semangat generasi baru. "2025" dengan warna emas menandakan bahwa tahun ini adalah awal masa depan cemerlang yang sedang dibentuk.</p>
                    </div>
                </div>
            </div>

            <h3 class="text-center fw-semibold mb-4">Makna Warna Logo POSITRON</h3>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 text-center">
                        <div class="mx-auto mb-3"
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #1e3a8a, #3b82f6); border-radius: 50%;"></div>
                        <h5 class="fw-semibold">Biru Tua</h5>
                        <p class="text-muted mb-0">Kecerdasan, stabilitas, dan kepercayaan. Mewakili dunia akademik yang kuat dan profesional.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 text-center">
                        <div class="mx-auto mb-3"
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #d97706, #fbbf24); border-radius: 50%;"></div>
                        <h5 class="fw-semibold">Emas</h5>
                        <p class="text-muted mb-0">Kejayaan, semangat, dan masa depan cerah. Melambangkan harapan dan potensi luar biasa yang ingin dicapai oleh mahasiswa baru.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
