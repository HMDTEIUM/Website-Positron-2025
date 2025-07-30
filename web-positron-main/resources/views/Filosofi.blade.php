
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

    .carousel-container {
        position: relative;
        margin-bottom: 4rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .carousel-wrapper {
        overflow: hidden;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 400%;
    }

    .filosofi-item {
        display: flex;
        align-items: center;
        gap: 2rem;
        padding: 2rem;
        width: 25%;
        flex-shrink: 0;
        opacity: 1;
        transform: none;
        animation: none;
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 215, 0, 0.2);
        border: 2px solid #ffd700;
        color: #ffd700;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    .carousel-nav:hover {
        background: rgba(255, 215, 0, 0.4);
        transform: translateY(-50%) scale(1.1);
    }

    .carousel-nav.prev {
        left: -25px;
    }

    .carousel-nav.next {
        right: -25px;
    }

    .carousel-indicators {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 2rem;
    }

    .indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .indicator.active {
        background: #ffd700;
        transform: scale(1.2);
    }

    .indicator:hover {
        background: rgba(255, 215, 0, 0.7);
    }

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
            padding: 1.5rem;
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

        .carousel-nav {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }

        .carousel-nav.prev {
            left: -20px;
        }

        .carousel-nav.next {
            right: -20px;
        }
    }

    @media (max-width: 480px) {
        .filosofi-container {
            padding: 0 15px;
        }

        .filosofi-item {
            padding: 1rem;
        }

        .filosofi-image {
            width: 100px;
            height: 100px;
        }

        .carousel-nav.prev {
            left: -15px;
        }

        .carousel-nav.next {
            right: -15px;
        }

        .carousel-nav {
            width: 35px;
            height: 35px;
            font-size: 0.9rem;
        }
    }
</style>

<section class="filosofi-section">
    <div class="filosofi-container">
        <h2 class="section-title">Tentang POSITRON 2025</h2>
        <p class="section-subtitle">Ini adalah halaman tentang untuk kegiatan ospek Departemen Teknik Elektro dan Informatika Universitas Negeri Malang.</p>

        <div class="logo-section">
            <img src="{{ asset('images/logo-positron.png') }}" alt="Logo POSITRON 2025">
        </div>

        <h3 class="color-title">Filosofi Logo POSITRON 2025</h3>
        
        <div class="carousel-container">
            <div class="carousel-wrapper">
                <div class="carousel-track" id="filosofiCarousel">
                    <div class="filosofi-item carousel-slide active">
                        <div class="filosofi-image">
                            <img src="{{ asset('attached_assets/Perisai_1753874718749.png') }}" alt="Perisai Shield">
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

                    <div class="filosofi-item carousel-slide">
                        <div class="filosofi-image">
                            <img src="{{ asset('attached_assets/Petir_1753874718749.png') }}" alt="Petir Lightning">
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

                    <div class="filosofi-item carousel-slide">
                        <div class="filosofi-image">
                            <img src="{{ asset('attached_assets/Empat_Lingkaran_1753874718748.png') }}" alt="Empat Lingkaran">
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

                    <div class="filosofi-item carousel-slide">
                        <div class="filosofi-image">
                            <img src="{{ asset('attached_assets/Logo_Tipografi_1753874718749.png') }}" alt="Tipografi POSITRON">
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
            </div>
            
            <!-- Navigation buttons -->
            <button class="carousel-nav prev" onclick="slideCarousel(-1)">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="carousel-nav next" onclick="slideCarousel(1)">
                <i class="bi bi-chevron-right"></i>
            </button>
            
            <!-- Slide indicators -->
            <div class="carousel-indicators">
                <span class="indicator active" onclick="currentSlide(1)"></span>
                <span class="indicator" onclick="currentSlide(2)"></span>
                <span class="indicator" onclick="currentSlide(3)"></span>
                <span class="indicator" onclick="currentSlide(4)"></span>
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

<script>
let currentSlideIndex = 0;
const totalSlides = 4;

function slideCarousel(direction) {
    const carousel = document.getElementById('filosofiCarousel');
    const indicators = document.querySelectorAll('.indicator');
    
    currentSlideIndex += direction;
    
    if (currentSlideIndex >= totalSlides) {
        currentSlideIndex = 0;
    } else if (currentSlideIndex < 0) {
        currentSlideIndex = totalSlides - 1;
    }
    
    const translateX = -currentSlideIndex * 25;
    carousel.style.transform = `translateX(${translateX}%)`;
    
    // Update indicators
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentSlideIndex);
    });
}

function currentSlide(slideIndex) {
    const carousel = document.getElementById('filosofiCarousel');
    const indicators = document.querySelectorAll('.indicator');
    
    currentSlideIndex = slideIndex - 1;
    const translateX = -currentSlideIndex * 25;
    carousel.style.transform = `translateX(${translateX}%)`;
    
    // Update indicators
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentSlideIndex);
    });
}

// Auto-slide functionality (optional)
setInterval(() => {
    slideCarousel(1);
}, 5000);

// Touch/swipe support for mobile
let startX = 0;
let isDragging = false;

document.querySelector('.carousel-wrapper').addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
    isDragging = true;
});

document.querySelector('.carousel-wrapper').addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
});

document.querySelector('.carousel-wrapper').addEventListener('touchend', (e) => {
    if (!isDragging) return;
    
    const endX = e.changedTouches[0].clientX;
    const diffX = startX - endX;
    
    if (Math.abs(diffX) > 50) {
        if (diffX > 0) {
            slideCarousel(1); // Slide right
        } else {
            slideCarousel(-1); // Slide left
        }
    }
    
    isDragging = false;
});
</script>
