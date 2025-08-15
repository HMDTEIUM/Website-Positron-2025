@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary-blue: #0a3e6d;
        --secondary-blue: #1e5a8b;
        --gold: #ffd700;
    }

    .filosofi-section {
        background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
        min-height: 100vh;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    /* Decorative elements */
    .filosofi-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--gold), var(--primary-blue));
        z-index: 10;
    }

    .filosofi-section::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-blue), var(--gold));
        z-index: 10;
    }

    .filosofi-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    /* Header section */
    .section-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
        padding-bottom: 20px;
    }

    .section-header::after {
        content: "";
        display: block;
        width: 150px;
        height: 4px;
        background: linear-gradient(90deg, var(--gold), transparent);
        margin: 25px auto 0;
        border-radius: 2px;
    }

    .filosofi-title {
        color: white;
        font-size: 2.8rem;
        font-weight: 800;
        margin-bottom: 15px;
        text-shadow: 0 3px 6px rgba(0,0,0,0.3);
        letter-spacing: 1px;
        position: relative;
    }

    .filosofi-title span {
        color: var(--gold);
    }

    .filosofi-subtitle {
        color: rgba(255,255,255,0.9);
        font-size: 1.3rem;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
        position: relative;
    }

    /* 3D Cube Container */
    .cube-scene {
        width: 100%;
        max-width: 400px;
        height: 400px;
        margin: 50px auto;
        perspective: 1200px;
        position: relative;
    }

    .cube {
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.8s cubic-bezier(0.25, 0.1, 0.25, 1);
        transform: rotateY(20deg);
    }

    .cube-face {
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(145deg, rgba(10,62,109,0.95), rgba(30,90,139,0.95));
        border: 2px solid rgba(255,215,0,0.4);
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px; /* Reduced padding */
        box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        opacity: 1;
        backface-visibility: hidden; /* Changed to hidden */
        overflow: hidden; /* Prevent text overflow */
    }

    .cube-image-container {
        width: 120px; /* Adjusted size */
        height: 120px; /* Adjusted size */
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        padding: 10px; /* Adjusted padding */
        margin-bottom: 15px; /* Adjusted margin */
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(255,215,0,0.3);
        box-shadow: 
            0 5px 20px rgba(0,0,0,0.3),
            inset 0 5px 10px rgba(0,0,0,0.2);
        transition: all 0.3s;
    }

    .cube-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: drop-shadow(0 3px 10px rgba(0,0,0,0.4));
    }

    .cube-title {
        color: var(--gold);
        font-size: 1.4rem; /* Adjusted size */
        font-weight: 700;
        margin-bottom: 10px; /* Adjusted margin */
        text-align: center;
        position: relative;
        text-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }

    .cube-title::after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        background: var(--gold);
        margin: 12px auto;
        border-radius: 3px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .cube-desc {
        color: rgba(255,255,255,0.95);
        font-size: 0.9rem; /* Adjusted size */
        line-height: 1.5; /* Adjusted line height */
        text-align: center;
        padding: 0 5px; /* Added padding to prevent overflow */
    }

    /* Cube face positions */
    .front  { transform: rotateY(0deg) translateZ(200px); }
    .right  { transform: rotateY(90deg) translateZ(200px); }
    .back   { transform: rotateY(180deg) translateZ(200px); }
    .left   { transform: rotateY(-90deg) translateZ(200px); }

    /* Navigation controls */
    .cube-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 40px 0 60px; /* Adjusted margin */
        gap: 20px;
    }

    .nav-dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: rgba(255,255,255,0.3);
        cursor: pointer;
        transition: all 0.3s;
        position: relative;
    }

    .nav-dot.active {
        background: var(--gold);
        transform: scale(1.2);
        box-shadow: 0 0 10px rgba(255,215,0,0.5);
    }

    .nav-arrow {
        width: 50px;
        height: 50px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s;
        border: 2px solid rgba(255,215,0,0.3);
    }

    .nav-arrow:hover {
        background: rgba(255,215,0,0.2);
        transform: scale(1.1);
    }

    /* Color meaning section */
    .color-section {
        margin-top: 60px;
        padding: 50px 0;
        position: relative;
    }

    .color-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('{{ asset('logo-positron-rodokburem.png') }}') center/contain no-repeat;
        opacity: 0.05;
        z-index: -1;
    }

    .color-title {
        color: white;
        font-size: 2.2rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 40px;
        text-shadow: 0 2px 8px rgba(0,0,0,0.4);
        position: relative;
    }

    .color-title::after {
        content: "";
        display: block;
        width: 100px;
        height: 3px;
        background: var(--gold);
        margin: 15px auto;
        border-radius: 3px;
    }

    .color-grid {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
        max-width: 900px;
        margin: 0 auto;
    }

    .color-card {
        background: linear-gradient(135deg, rgba(10,62,109,0.9), rgba(30,90,139,0.9));
        border-radius: 15px;
        padding: 35px 30px;
        width: 350px;
        text-align: center;
        border: 2px solid rgba(255,215,0,0.2);
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        transition: all 0.4s;
        position: relative;
        overflow: hidden;
    }

    .color-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--gold);
    }

    .color-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    }

    .color-circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin: 0 auto 25px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        color: white;
        text-shadow: 0 2px 5px rgba(0,0,0,0.3);
        border: 3px solid white;
    }

    .color-name {
        color: var(--gold);
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }

    .color-desc {
        color: rgba(255,255,255,0.95);
        font-size: 1.05rem;
        line-height: 1.7;
    }

    /* Responsive styles */
    @media (max-width: 992px) {
        .filosofi-title {
            font-size: 2.4rem;
        }
        
        .filosofi-subtitle {
            font-size: 1.1rem;
        }
        
        .cube-scene {
            max-width: 350px;
            height: 350px;
        }
        
        .cube-image-container {
            width: 140px;
            height: 140px;
        }
    }

    @media (max-width: 768px) {
        .filosofi-section {
            padding: 60px 0;
        }
        
        .filosofi-title {
            font-size: 2rem;
        }
        
        .filosofi-subtitle {
            font-size: 1rem;
        }
        
        .cube-scene {
            max-width: 300px;
            height: 300px;
        }
        
        .cube-face {
            padding: 25px;
        }
        
        .cube-image-container {
            width: 120px;
            height: 120px;
            padding: 15px;
        }
        
        .cube-title {
            font-size: 1.4rem;
        }
        
        .cube-desc {
            font-size: 0.95rem;
        }
        
        .color-card {
            width: 100%;
            max-width: 400px;
        }
    }

    @media (max-width: 576px) {
        .filosofi-container {
            padding: 0 20px;
        }
        
        .filosofi-title {
            font-size: 1.8rem;
        }
        
        .cube-scene {
            max-width: 280px;
            height: 280px;
        }
        
        .cube-image-container {
            width: 100px;
            height: 100px;
        }
        
        .color-circle {
            width: 100px;
            height: 100px;
        }
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade {
        animation: fadeIn 1s ease-out forwards;
    }
</style>

<section class="filosofi-section">
    <div class="filosofi-container">
        <div class="section-header animate-fade">
            <h2 class="filosofi-title"><span>POSITRON</span> 2025</h2>
            <p class="filosofi-subtitle">Filosofi Logo Positron Departemen Teknik Elektro dan Informatika Universitas Negeri Malang</p>
        </div>

        <div class="cube-scene" id="cubeScene">
            <div class="cube" id="cube">
                <div class="cube-face front">
                    <div class="cube-image-container">
                        <img src="{{ asset('Perisai.png') }}" alt="Perisai Logo POSITRON" class="cube-image">
                    </div>
                    <h4 class="cube-title">Perisai (Shield)</h4>
                    <p class="cube-desc">
                        Melambangkan perlindungan, keteguhan, dan kesiapan mahasiswa baru dalam menghadapi tantangan perkuliahan dan dunia luar. 
                        Sebagai simbol kekuatan dan ketahanan, perisai ini mewakili semangat POSITRON yang akan membimbing mahasiswa baru melewati 
                        masa orientasi dan adaptasi di lingkungan kampus.
                    </p>
                </div>
                
                <div class="cube-face right">
                    <div class="cube-image-container">
                        <img src="{{ asset('Petir.png') }}" alt="Petir Logo POSITRON" class="cube-image">
                    </div>
                    <h4 class="cube-title">Petir di Tengah</h4>
                    <p class="cube-desc">
                        Petir menggambarkan "energi", "kekuatan", dan "transformasi". Dalam konteks logo ini, petir bermakna sebagai "Unity" — 
                        yaitu kekuatan yang menyatukan keempat prodi dalam satu keluarga besar DTEI. Elemen ini melambangkan semangat dinamika dan 
                        perubahan positif yang akan dialami mahasiswa baru selama mengikuti POSITRON.
                    </p>
                </div>
                
                <div class="cube-face back">
                    <div class="cube-image-container">
                        <img src="{{ asset('Empat_Lingkaran.png') }}" alt="Lingkaran Logo POSITRON" class="cube-image">
                    </div>
                    <h4 class="cube-title">Empat Lingkaran Terhubung</h4>
                    <p class="cube-desc">
                        Melambangkan empat program studi di bawah naungan Departemen Teknik Elektro dan Informatika (DTEI) UM. 
                        Keterhubungan lingkaran ini menggambarkan kolaborasi, kerjasama, dan sinergi antarmahasiswa lintas prodi. 
                        Desain ini mencerminkan semangat kebersamaan yang menjadi nilai inti POSITRON.
                    </p>
                </div>
                
                <div class="cube-face left">
                    <div class="cube-image-container">
                        <img src="{{ asset('Text-logo.png') }}" alt="Tipografi POSITRON" class="cube-image">
                    </div>
                    <h4 class="cube-title">Tipografi "POSITRON"</h4>
                    <p class="cube-desc">
                        Menggunakan font tegas dan modern yang menunjukkan kekokohan tekad dan semangat generasi baru. 
                        "2025" dengan warna emas menandakan bahwa tahun ini adalah tonggak awal bagi mahasiswa baru untuk membentuk 
                        masa depan cemerlang mereka dengan belajar di DTEI UM.
                    </p>
                </div>
            </div>
        </div>

        <div class="cube-nav">
            <div class="nav-arrow" id="prevBtn">‹</div>
            <div class="nav-dot active" data-face="front"></div>
            <div class="nav-dot" data-face="right"></div>
            <div class="nav-dot" data-face="back"></div>
            <div class="nav-dot" data-face="left"></div>
            <div class="nav-arrow" id="nextBtn">›</div>
        </div>

        <div class="color-section animate-fade" style="animation-delay: 0.3s;">
            <h3 class="color-title">Makna Warna Logo POSITRON</h3>
            <div class="color-grid">
                <div class="color-card">
                    <div class="color-circle" style="background: linear-gradient(135deg, #1e3a8a, #3b82f6);">
                        🌀
                    </div>
                    <h5 class="color-name">Biru Tua</h5>
                    <p class="color-desc">
                        Warna biru tua dalam logo POSITRON mewakili kecerdasan, stabilitas, dan kepercayaan diri. 
                        Biru menjadi simbol dunia akademik yang kuat, profesionalisme, sekaligus menggambarkan kedalaman ilmu 
                        yang akan diperoleh mahasiswa di DTEI UM. Warna ini juga mencerminkan nilai-nilai integritas dan 
                        kejujuran yang menjadi landasan pendidikan.
                    </p>
                </div>
                
                <div class="color-card">
                    <div class="color-circle" style="background: linear-gradient(135deg, #d97706, #fbbf24);">
                        ✨
                    </div>
                    <h5 class="color-name">Emas</h5>
                    <p class="color-desc">
                        Warna emas melambangkan kejayaan, prestasi tinggi, semangat yang tak pernah padam, dan masa depan cerah. 
                        Emas mencerminkan harapan besar yang disematkan pada mahasiswa baru POSITRON 2025, serta potensi luar biasa 
                        yang akan digali dan dikembangkan selama masa studi di DTEI UM. Warna ini juga melambangkan nilai-nilai keunggulan dan pencapaian.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cube = document.getElementById('cube');
        const scene = document.getElementById('cubeScene');
        const navDots = document.querySelectorAll('.nav-dot');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        let isDragging = false;
        let startX, currentX;
        let currentRotation = 0;
        const rotationIncrement = 90; // 90 degrees per face
        const faces = ['front', 'right', 'back', 'left'];
        
        // Initialize cube position
        rotateToFace('front');
        
        // Mouse/touch events for rotation
        scene.addEventListener('mousedown', startDrag);
        scene.addEventListener('touchstart', startDrag, { passive: false });
        
        document.addEventListener('mousemove', drag);
        document.addEventListener('touchmove', drag, { passive: false });
        
        document.addEventListener('mouseup', endDrag);
        document.addEventListener('touchend', endDrag);
        
        // Click events for navigation dots
        navDots.forEach(dot => {
            dot.addEventListener('click', function() {
                rotateToFace(this.dataset.face);
            });
        });
        
        // Arrow button controls
        prevBtn.addEventListener('click', function() {
            const currentFaceIndex = faces.indexOf(getCurrentFace());
            const prevFaceIndex = (currentFaceIndex - 1 + faces.length) % faces.length;
            rotateToFace(faces[prevFaceIndex]);
        });
        
        nextBtn.addEventListener('click', function() {
            const currentFaceIndex = faces.indexOf(getCurrentFace());
            const nextFaceIndex = (currentFaceIndex + 1) % faces.length;
            rotateToFace(faces[nextFaceIndex]);
        });
        
        function startDrag(e) {
            isDragging = true;
            startX = e.clientX || e.touches[0].clientX;
            currentX = startX;
            cube.style.transition = 'none';
        }
        
        function drag(e) {
            if (!isDragging) return;
            e.preventDefault();
            
            const x = e.clientX || e.touches[0].clientX;
            const deltaX = x - currentX;
            
            // Calculate rotation based on mouse movement
            currentRotation += deltaX * 0.5;
            cube.style.transform = `rotateY(${currentRotation}deg)`;
            
            currentX = x;
            updateActiveDot();
        }
        
        function endDrag() {
            if (!isDragging) return;
            isDragging = false;
            cube.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            
            // Snap to nearest face
            const targetAngle = Math.round(currentRotation / 90) * 90;
            
            // Animate the snap
            const delta = targetAngle - currentRotation;
            const steps = 10;
            let step = 0;
            
            const animateSnap = () => {
                if (step >= steps) {
                    currentRotation = targetAngle;
                    cube.style.transform = `rotateY(${currentRotation}deg)`;
                    updateActiveDot();
                    return;
                }
                
                step++;
                currentRotation += delta / steps;
                cube.style.transform = `rotateY(${currentRotation}deg)`;
                requestAnimationFrame(animateSnap);
            };
            
            animateSnap();
        }
        
        function rotateToFace(face) {
            const index = faces.indexOf(face);
            const targetRotation = index * 90;
            currentRotation = targetRotation;
            cube.style.transform = `rotateY(${currentRotation}deg)`;
            updateActiveDot();
        }
        
        function getCurrentFace() {
            // Normalize rotation
            let normalizedRotation = ((currentRotation % 360) + 360) % 360;
            
            if (Math.abs(normalizedRotation) <= 45 || Math.abs(normalizedRotation) >= 315) {
                return 'front';
            } else if (normalizedRotation >= 45 && normalizedRotation <= 135) {
                return 'right';
            } else if (normalizedRotation >= 135 && normalizedRotation <= 225) {
                return 'back';
            } else {
                return 'left';
            }
        }
        
        function updateActiveDot() {
            const currentFace = getCurrentFace();
            
            navDots.forEach(dot => {
                if (dot.dataset.face === currentFace) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
    });
</script>
@endsection
