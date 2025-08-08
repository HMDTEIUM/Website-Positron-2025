
@extends('layouts.app')

@section('content')
<style>
    .filosofi-section {
        background: linear-gradient(135deg, #0a3e6d, #1e5a8b);
        min-height: 100vh;
        padding: 80px 0;
        overflow-x: hidden;
    }

    .filosofi-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .section-title {
        text-align: center;
        color: white;
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        animation: slideInFromRight 1s ease-out;
    }

    .section-subtitle {
        text-align: center;
        color: rgba(255, 255, 255, 0.9);
        font-size: clamp(1rem, 2.5vw, 1.25rem);
        margin-bottom: 3rem;
        animation: slideInFromRight 1s ease-out 0.2s both;
    }

    .logo-section {
        text-align: center;
        margin-bottom: 4rem;
        animation: slideInFromRight 1s ease-out 0.4s both;
    }

    .logo-section img {
        max-height: 250px;
        width: auto;
        filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
        animation: pulse 2s infinite;
    }

    .filosofi-grid {
        display: inline-grid;
        grid-template-columns: 2fr;
        gap: 7rem;
        margin-bottom: 4rem;
    }

    .filosofi-item {
        display: flex;
        align-items: center;
        gap: 2rem;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        padding: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
        opacity: 0;
        transform: translateX(100px);
        animation: slideInFromRight 1s ease-out forwards;
    }

    .filosofi-item:nth-child(1) { animation-delay: 0.6s; }
    .filosofi-item:nth-child(2) { animation-delay: 0.8s; }
    .filosofi-item:nth-child(3) { animation-delay: 1s; }
    .filosofi-item:nth-child(4) { animation-delay: 1.2s; }

    .filosofi-image {
        flex: 0 0 150px;
        width: 150px;
        height: 150px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .filosofi-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .filosofi-item:hover .filosofi-image img {
        transform: scale(1.1);
    }

    .filosofi-content {
        flex: 1;
    }

    .filosofi-content h5 {
        color: #ffd700;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filosofi-content p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        line-height: 1.6;
        margin: 0;
    }

    .color-section {
        margin-top: 4rem;
        animation: slideInFromRight 1s ease-out 1.4s both;
    }

    .color-title {
        text-align: center;
        color: white;
        font-size: clamp(1.5rem, 4vw, 2rem);
        font-weight: 600;
        margin-bottom: 2rem;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }

    .color-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .color-item {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
        opacity: 0;
        transform: translateX(100px);
        animation: slideInFromRight 1s ease-out forwards;
    }

    .color-item:nth-child(1) { animation-delay: 1.6s; }
    .color-item:nth-child(2) { animation-delay: 1.8s; }

    .color-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: 0 auto 1.5rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .color-item h5 {
        color: #ffd700;
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .color-item p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
    }

    .icon-wrapper {
        width: 40px;
        height: 40px;
        background: rgba(255, 215, 0, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffd700;
        font-size: 1.25rem;
    }

    @keyframes slideInFromRight {
        0% {
            opacity: 0;
            transform: translateX(100px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    /* Mobile Optimizations */
    @media (max-width: 768px) {
        .filosofi-item {
            flex-direction: column;
            text-align: center;
        }

        .filosofi-image {
            flex: none;
            width: 120px;
            height: 120px;
        }

        .filosofi-content h5 {
            justify-content: center;
        }

        .color-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .filosofi-container {
            padding: 0 15px;
        }

        .filosofi-item {
            padding: 1.5rem;
        }

        .filosofi-image {
            width: 100px;
            height: 100px;
        }
    }
</style>

<section class="filosofi-section">
    <div class="filosofi-container">
        <h2 class="section-title">POSITRON 2025</h2>
        <p class="section-subtitle">Filosofi Logo Positron Departemen Teknik Elektro dan Informatika Universitas Negeri Malang.</p>

        <div class="logo-section">
            <img src="{{ asset('images/logo-positron.png') }}" alt="Logo POSITRON 2025">
        </div>

        <h3 class="color-title">Filosofi Logo POSITRON 2025</h3>
        
        <div class="filosofi-grid">
            <div class="filosofi-item">
                <div class="filosofi-image">
                    <img src="{{ asset('images/Perisai.png') }}" alt="Perisai Shield">
                </div>
                <div class="filosofi-content">
                    <h5>
                        <div class="icon-wrapper">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        Perisai (Shield)
                    </h5>
                    <p>Melambangkan perlindungan, keteguhan, dan kesiapan mahasiswa baru dalam menghadapi tantangan perkuliahan dan dunia luar. Ini menunjukkan bahwa POSITRON hadir sebagai wadah pembentukan karakter dan nilai kebersamaan.</p>
                </div>
            </div>

            <div class="filosofi-item">
                <div class="filosofi-image">
                    <img src="{{ asset('images/Petir.png') }}" alt="Petir Lightning">
                </div>
                <div class="filosofi-content">
                    <h5>
                        <div class="icon-wrapper">
                            <i class="bi bi-lightning-fill"></i>
                        </div>
                        Petir di Tengah
                    </h5>
                    <p>Petir menggambarkan "energi", "kekuatan", dan "transformasi". Dalam konteks logo ini, petir bermakna sebagai "Unity" — yaitu kekuatan yang menyatukan keempat prodi dalam satu keluarga besar DTEI. Petir menjadi pusat dari konektivitas.</p>
                </div>
            </div>

            <div class="filosofi-item">
                <div class="filosofi-image">
                    <img src="{{ asset('images/Empat_Lingkaran.png') }}" alt="Empat Lingkaran">
                </div>
                <div class="filosofi-content">
                    <h5>
                        <div class="icon-wrapper">
                            <i class="bi bi-circle-fill"></i>
                        </div>
                        Empat Lingkaran yang Terhubung
                    </h5>
                    <p>Melambangkan empat program studi di bawah naungan Departemen Teknik Elektro dan Informatika (DTEI) UM. Empat lingkaran ini saling terhubung, menggambarkan kolaborasi dan sinergi antarmahasiswa lintas prodi.</p>
                </div>
            </div>

            <div class="filosofi-item">
                <div class="filosofi-image">
                    <img src="{{ asset('images/Logo_Tipografi.png') }}" alt="Tipografi POSITRON">
                </div>
                <div class="filosofi-content">
                    <h5>
                        <div class="icon-wrapper">
                            <i class="bi bi-fonts"></i>
                        </div>
                        Tipografi "POSITRON 2025"
                    </h5>
                    <p>Menggunakan font tegas dan modern, menunjukkan kekokohan dan semangat generasi baru. "2025" dengan warna emas menandakan bahwa tahun ini adalah awal masa depan cemerlang yang sedang dibentuk.</p>
                </div>
            </div>
        </div>

        <div class="color-section">
            <h3 class="color-title">Makna Warna Logo POSITRON</h3>
            <div class="color-grid">
                <div class="color-item">
                    <div class="color-circle" style="background: linear-gradient(135deg, #1e3a8a, #3b82f6);"></div>
                    <h5>Biru Tua</h5>
                    <p>Kecerdasan, stabilitas, dan kepercayaan. Mewakili dunia akademik yang kuat dan profesional.</p>
                </div>
                <div class="color-item">
                    <div class="color-circle" style="background: linear-gradient(135deg, #d97706, #fbbf24);"></div>
                    <h5>Emas</h5>
                    <p>Kejayaan, semangat, dan masa depan cerah. Melambangkan harapan dan potensi luar biasa yang ingin dicapai oleh mahasiswa baru.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
