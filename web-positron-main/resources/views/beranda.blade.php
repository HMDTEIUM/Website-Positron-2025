
@extends('layouts.app')
@include('partials.calendar')

@section('content')
    <!-- Top Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="center-wrapper">
            <div class="logo-bar">
                <img src="{{ asset('images/um.png') }}" alt="UM Logo">
            </div>
            <h1 class="hero-title">SELAMAT DATANG MAHASISWA BARU<br>DEPARTEMEN TEKNIK ELEKTRO DAN INFORMATIKA</h1>
            <div class="cta-box">
                <p>APAKAH KALIAN SIAP MENYAMBUT POSITRON 2025!?</p>
                <button onclick="location.href='#home'" class="cta-button">SIAP!</button>
            </div>
        </div>
    </section>

    <!-- Tentang POSITRON Section -->
    <section id="home" class="about-section">
        <div class="about-overlay"></div>
        <div class="container">
            <div class="about-content">
                <h2 class="section-title">TENTANG POSITRON</h2>
                <p class="section-description">Program Orientasi Siswa Baru Teknik Elektro dan Informatika</p>
                <div class="logo-positron">
                    <img src="{{ asset('images/logo-positron.png') }}" alt="Logo POSITRON" class="positron-logo">
                    <h2 class="positron-title">POSITRON 2025</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Sambutan Section -->
    <section id="sambutan" class="sambutan-section">
        <div class="sambutan-overlay"></div>
        <div class="container">
            <div class="sambutan-content">
                <h2 class="sambutan-title">SAMBUTAN</h2>
                <img src="{{ asset('images/logo-positron-rodokburem.png') }}" alt="Locker Sambutan" class="sambutan-bg-logo">
                
                <!-- Coming Soon Section -->
                <div class="coming-soon-content">
                    <h3 class="coming-soon-title">COMING SOON</h3>
                    
                    <div id="videoCarousel" class="carousel slide video-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ([
                                'https://www.youtube.com/embed/dQw4w9WgXcQ',
                                'https://www.youtube.com/embed/dQw4w9WgXcQ',
                                'https://www.youtube.com/embed/dQw4w9WgXcQ',
                            ] as $i => $link)
                                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                    <div class="video-container">
                                        <div class="video-wrapper">
                                            <iframe
                                                src="{{ $link }}"
                                                title="Video {{ $i + 1 }}"
                                                frameborder="0"
                                                allowfullscreen
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Countdown Section -->
    <section id="countdowntimer" class="countdown-section">
        <div class="countdown-overlay"></div>
        <div class="container">
            <div class="countdown-content">
                <div class="countdown-intro">
                    <img src="{{ asset('images/logo-positron.png') }}" alt="Logo POSITRON" class="countdown-logo">
                    <h3 class="countdown-title">Countdown FORUM MABA</h3>
                    <p class="countdown-subtitle">Menuju pembukaan Forum Mahasiswa Baru POSITRON 2025!</p>
                    <p class="countdown-description">
                        Forum Maba adalah acara orientasi pertama yang akan memperkenalkan kalian dengan lingkungan 
                        Departemen Teknik Elektro dan Informatika. Bersiaplah untuk petualangan baru!
                    </p>
                </div>
                <div id="countdown" class="countdown-display">
                    <div class="countdown-item">
                        <span id="days" class="countdown-number">0</span>
                        <span class="countdown-label">Hari</span>
                    </div>
                    <div class="countdown-item">
                        <span id="hours" class="countdown-number">0</span>
                        <span class="countdown-label">Jam</span>
                    </div>
                    <div class="countdown-item">
                        <span id="minutes" class="countdown-number">0</span>
                        <span class="countdown-label">Menit</span>
                    </div>
                    <div class="countdown-item">
                        <span id="seconds" class="countdown-number">0</span>
                        <span class="countdown-label">Detik</span>
                    </div>
                </div>
                <div class="countdown-info">
                    <div class="countdown-event-details">
                        <h4>Detail Acara Forum Maba:</h4>
                        <ul>
                            <li><strong>Tanggal:</strong> 27-28 Agustus 2025</li>
                            <li><strong>Waktu:</strong> 08:00 WIB</li>
                            <li><strong>Tempat:</strong> Departemen Teknik Elektro dan Informatika</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Studi Section -->
    <section class="prodi-section">
        <div class="container">
            <h3 class="section-title">Program Studi di Departemen Teknik Elektro dan Informatika</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach ([
                            'S1 Pendidikan Teknik Informatika' => 'bi-journal-code',
                            'S1 Teknik Informatika' => 'bi-laptop',
                            'S1 Teknik Elektro' => 'bi-lightning-charge',
                            'S1 Pendidikan Teknik Elektro' => 'bi-plug',
                        ] as $nama => $icon)
                    <div class="col">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <i class="bi {{ $icon }} prodi-icon"></i>
                                    <h5 class="prodi-title">{{ $nama }}</h5>
                                </div>
                                <div class="flip-card-back">
                                    <h5 class="prodi-title-back">{{ $nama }}</h5>
                                    <p class="prodi-description">Program studi unggulan di DTEI yang membentuk generasi profesional dan berdaya saing global.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section class="calendar-section">
        <div class="calendar-overlay"></div>
        <div class="container">
            <div class="calendar-header">
                <img src="{{ asset('images/logo-positron-rodokburem.png') }}" alt="Logo POSITRON" class="calendar-logo">
                <h3 class="section-title">Calendar POSITRON 2025</h3>
                <p class="calendar-description">
                    Jadwal lengkap kegiatan Program Orientasi Siswa Baru Teknik Elektro dan Informatika. 
                    Klik pada tanggal yang memiliki acara untuk melihat detail lebih lanjut.
                </p>
            </div>
            <div class="calendar-controls">
                <button class="btn btn-outline-primary calendar-nav" id="prevMonth">&lt;</button>
                <h5 id="monthYearDisplay" class="month-display"></h5>
                <button class="btn btn-outline-primary calendar-nav" id="nextMonth">&gt;</button>
            </div>
            <div class="calendar-grid" id="calendarGrid"></div>
            <div class="calendar-legend">
                <h4>Keterangan:</h4>
                <div class="legend-items">
                    <div class="legend-item">
                        <div class="legend-color event"></div>
                        <span>Hari dengan acara POSITRON</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color today"></div>
                        <span>Hari ini</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Detail Acara -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Detail Acara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama Acara:</strong> <span id="modalEventTitle"></span></p>
                    <p><strong>Tanggal:</strong> <span id="modalEventDate"></span></p>
                    <p><strong>Deskripsi:</strong> <span id="modalEventDesc"></span></p>
                    <button class="btn btn-primary mt-3" id="addToCalendarBtn">Tambahkan ke Kalender Saya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced CSS Styles -->
    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            line-height: 1.6;
        }

        .section-title {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(2rem, 5vw, 4rem);
            color: white;
            text-align: center;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            animation: fadeInUp 1s ease-out;
        }

        .container {
            padding: 0 15px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(10, 62, 109, 0.3), rgba(10, 62, 109, 0.3)), 
                        url('/images/bg-1.png') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 62, 109, 0.4);
            z-index: 1;
        }

        .center-wrapper {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem;
            max-width: 90%;
        }

        .logo-bar img {
            height: clamp(50px, 8vw, 80px);
            filter: drop-shadow(2px 2px 8px rgba(0, 0, 0, 0.5));
            animation: bounceIn 1.5s ease-out;
        }

        .hero-title {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            font-weight: 700;
            text-transform: uppercase;
            color: white;
            margin: 2rem 0;
            line-height: 1.3;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            animation: slideInUp 1s ease-out 0.3s both;
        }

        .cta-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: clamp(1.5rem, 4vw, 2.5rem);
            margin-top: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .cta-box p {
            font-size: clamp(1rem, 3vw, 1.25rem);
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
        }

        .cta-button {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #0a3e6d;
            font-weight: bold;
            padding: 1rem 2rem;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
            background: linear-gradient(45deg, #ffed4e, #ffd700);
        }

        /* About Section */
        .about-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('/images/bg-2.png') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .about-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .about-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 4rem 0;
        }

        .section-description {
            font-size: clamp(1rem, 2.5vw, 1.25rem);
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 3rem;
        }

        .logo-positron {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .positron-logo {
            width: clamp(200px, 40vw, 350px);
            height: auto;
            filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
            animation: pulse 2s infinite;
        }

        .positron-title {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(2.5rem, 8vw, 6rem);
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin: 0;
        }

        /* Sambutan Section */
        .sambutan-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('/images/long-locker.png') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
            position: relative;
            padding: 4rem 0;
        }

        .sambutan-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0);
        }

        .sambutan-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .sambutan-title {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(3rem, 8vw, 6rem);
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 2rem;
        }

        .sambutan-bg-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.1;
            width: clamp(300px, 50vw, 500px);
            z-index: 1;
        }

        .coming-soon-content {
            position: relative;
            z-index: 2;
            margin-top: 3rem;
        }

        .coming-soon-title {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(2rem, 5vw, 4rem);
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 3rem;
        }

        .video-carousel {
            max-width: 100%;
            margin: 0 auto;
        }

        .video-container {
            display: flex;
            justify-content: center;
            padding: 0 1rem;
        }

        .video-wrapper {
            width: 100%;
            max-width: 800px;
            aspect-ratio: 16/9;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .video-wrapper iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .carousel-control-prev,
        .carousel-control-next {
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.8));
            width: 5%;
        }

        .countdown-section {
            background: url('/images/countdown-bg.png') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 5rem 1rem;
        }

        .countdown-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(21, 93, 149, 0.65);
            z-index: 1;
        }

        .countdown-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            max-width: 800px;
            margin: 0 auto;
            font-family: 'Poppins', sans-serif;
        }

        .countdown-logo {
            width: 120px;
            margin-bottom: 1rem;
            filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.5));
        }

        .countdown-title {
            font-family: 'Atlanta College', sans-serif;
            font-size: 3rem;
            color: #ffffff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
        }

        .countdown-subtitle {
            font-size: 2rem;
            font-weight: 800;
            color: #ffeb3b;
            text-shadow: 0 0 10px rgba(255, 235, 59, 0.5);
            letter-spacing: 1px;
            margin-bottom: 2rem;
        }

        .countdown-description {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2.5rem;
            line-height: 1.6;
            max-width: 700px;
            margin-inline: auto;
        }

        .countdown-display {
            display: flex;
            justify-content: center;
            gap: 1.25rem;
            flex-wrap: wrap;
            margin-bottom: 2.5rem;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            width: 90px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .countdown-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.35);
        }

        .countdown-number {
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
        }

        .countdown-label {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.9);
            margin-top: 0.25rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .countdown-event-details {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 15px;
            padding: 1.5rem 2rem;
            max-width: 450px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: white;
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.1);
        }

        .countdown-event-details strong {
            font-weight: 600;
            display: block;
            margin-bottom: 0.5rem;
            color: #fff;
        }

        .countdown-intro {
            margin-bottom: 3rem;
        }

        .countdown-info {
            margin-top: 3rem;
        }

        .countdown-event-details h4 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .countdown-event-details ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .countdown-event-details li {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.5rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .calendar-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .calendar-logo {
            width: clamp(60px, 10vw, 100px);
            height: auto;
            margin-bottom: 1rem;
            opacity: 0.8;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
        }

        .calendar-description {
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            color: rgba(255, 255, 255, 0.85);
            margin: 1rem auto 2rem;
            max-width: 600px;
            line-height: 1.6;
        }

        .calendar-legend {
            margin-top: 3rem;
            text-align: center;
        }

        .calendar-legend h4 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .legend-items {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 4px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .legend-color.event {
            background: linear-gradient(135deg, #1d4f98, #0d6efd);
        }

        .legend-color.today {
            background: rgba(255, 193, 7, 0.3);
            border-color: #ffc107;
        }

        .legend-item span {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
        }


        .countdown-display {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        /* Program Studi Section */
        .prodi-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 5rem 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .prodi-section .section-title {
            color: #0a3e6d;
            text-shadow: none;
            margin-bottom: 4rem;
        }

        .flip-card {
            background-color: transparent;
            width: 100%;
            height: 280px;
            perspective: 1000px;
            margin-bottom: 2rem;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .flip-card-front {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            border: 2px solid #e9ecef;
        }

        .flip-card-back {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            transform: rotateY(180deg);
        }

        .prodi-icon {
            font-size: 3rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }

        .prodi-title,
        .prodi-title-back {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
            line-height: 1.3;
        }

        .prodi-description {
            font-size: 0.9rem;
            margin-top: 1rem;
            opacity: 0.9;
            line-height: 1.4;
        }

        /* Calendar Section */
        .calendar-section {
            background: linear-gradient(rgba(10, 62, 109, 0.9), rgba(10, 62, 109, 0.9)), 
                        url('{{ asset('images/bg-1.png') }}') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            padding: 5rem 0;
            min-height: 100vh;
            position: relative;
        }

        .calendar-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
        }

        .calendar-section .container {
            position: relative;
            z-index: 2;
        }

        .calendar-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .calendar-nav {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .calendar-nav:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .month-display {
            color: white;
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            font-weight: 600;
            margin: 0;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            max-width: 100%;
        }

        .day-cell {
            background: rgba(255, 255, 255, 1);
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
            color: #0a3e6d;
            font-weight: 500;
            cursor: default;
        }

        .day-cell.today {
            border: 3px solid #ffc107;
            background: #093258ff;
            position: relative;
            font-weight: bold;
        }

        .day-cell .today-label {
            position: absolute;
            bottom: 30px;
            right: 48px;
            font-size: 1.2rem;
            color: #ffffffff;
            background-color: #093258ff;
            border-radius: 3px;
            font-weight: normal;
        }

        
        .day-cell:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        }

        .day-cell.event {
            background: linear-gradient(135deg, #1d4f98, #093258ff);
            color: white;
            cursor: pointer;
        }

        .day-cell.event:hover {
            background: linear-gradient(135deg, #144fa7ff, #1d4f98);
        }

        .day-number {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .event-title {
            font-size: 0.75rem;
            font-weight: 600;
            margin-top: 0.5rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Modal Styles */
        .modal-content {
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            border-radius: 15px 15px 0 0;
        }

        .modal-title {
            font-weight: 600;
        }

        .modal-body {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 2rem;
        }

        .btn-close {
            filter: invert(1);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
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
            .hero-section {
                background-attachment: scroll;
                padding: 2rem 0;
            }

            .about-section,
            .calendar-section{
                background-attachment: scroll;
            }

            .center-wrapper {
                padding: 1rem;
            }

            .countdown-display {
                gap: 1rem;
            }

            .countdown-item {
                min-width: 70px;
                padding: 1rem 0.5rem;
            }

            .countdown-event-details {
                padding: 1.5rem;
                margin: 0 1rem;
            }

            .calendar-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 0.5rem;
            }

            .day-cell {
                height: 80px;
                padding: 0.5rem;
            }

            .video-wrapper {
                margin: 0 1rem;
            }

            .sambutan-section {
                padding: 2rem 0;
            }

            .prodi-section {
                padding: 3rem 0;
            }

            .flip-card {
                height: 250px;
            }

            .calendar-controls {
                gap: 1rem;
            }

            .legend-items {
                flex-direction: column;
                gap: 1rem;
            }

            .calendar-header {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 480px) {
            .calendar-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .countdown-display {
                justify-content: center;
            }

            .countdown-item {
                min-width: 60px;
            }

            .hero-title {
                line-height: 1.2;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Performance optimizations */
        .hero-section,
        .about-section,
        .sambutan-section,
        .calendar-section {
            will-change: transform;
        }

        /* Accessibility improvements */
        .cta-button:focus,
        .calendar-nav:focus,
        .day-cell:focus {
            outline: 2px solid #ffc107;
            outline-offset: 2px;
        }

        /* Print styles */
        @media print {
            .hero-section,
            .sambutan-section{
                background: white !important;
                color: black !important;
            }
            
            .video-carousel {
                display: none;
            }
        }
    </style>

    <!-- JavaScript for Calendar and Countdown -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Event dates
            const eventDates = {
                "2025-08-27": {
                    title: "FORUM MABA",
                    description: "Forum Mahasiswa Baru POSITRON 2025.",
                    startDate: "2025-08-27",
                    endDate: "2025-08-28"
                },
                "2025-09-30": {
                    title: "LDK",
                    description: "Latihan Dasar Kepemimpinan POSITRON 2025",
                    endDate: "2025-09-30"
                },
                "2025-10-28": {
                    title: "IOH",
                    description: "Inovasi dan Orientasi Himpunan.",
                    endDate: "2025-10-28"
                },
                "2025-12-01": {
                    title: "NAKO",
                    description: "Napak Tilas dan Kolaborasi akhir POSITRON.",
                    endDate: "2025-12-01"
                }
            };

            // Calendar implementation
            const grid = document.getElementById("calendarGrid");
            const monthYearDisplay = document.getElementById("monthYearDisplay");
            const prevBtn = document.getElementById("prevMonth");
            const nextBtn = document.getElementById("nextMonth");

            let currentMonth = 6; // Juli
            let currentYear = 2025;

            function renderCalendar(month, year) {
                grid.innerHTML = "";
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDayIndex = new Date(year, month, 1).getDay();
                const monthName = new Date(year, month).toLocaleString('id-ID', {
                    month: 'long'
                });
                monthYearDisplay.innerText = `${monthName} ${year}`;

                // Add empty cells for days before the first day
                for (let i = 0; i < firstDayIndex; i++) {
                    grid.appendChild(document.createElement("div"));
                }

                // Add days
                for (let d = 1; d <= daysInMonth; d++) {
                const dateObj = new Date(year, month, d);
                const dateStr = dateObj.toISOString().split("T")[0];
                const cell = document.createElement("div");
                cell.className = "day-cell";

                const today = new Date();
                if (
                    dateObj.getFullYear() === today.getFullYear() &&
                    dateObj.getMonth() === today.getMonth() &&
                    dateObj.getDate() === today.getDate()
                ) {
                    cell.classList.add("today");

                    const todayLabel = document.createElement("div");
                    todayLabel.className = "day-number today-label";
                    todayLabel.innerText = "Today";
                    cell.appendChild(todayLabel);
                } else {
                    const dayNumber = document.createElement("div");
                    dayNumber.className = "day-number";
                    dayNumber.innerText = d;
                    cell.appendChild(dayNumber);
                }

                // Cek event
                let matchedEventData = null;
                for (const [startDate, ev] of Object.entries(eventDates)) {
                    const start = new Date(startDate);
                    const end = new Date(ev.endDate);
                    if (dateObj >= start && dateObj <= end) {
                        matchedEventData = { startDate, ...ev };
                        break;
                    }
                }


            if (matchedEventData) {
                cell.classList.add("event");

                const eventLabel = document.createElement("div");
                eventLabel.className = "event-title";
                eventLabel.innerText = matchedEventData.title;
                cell.appendChild(eventLabel);

                cell.addEventListener("click", function () {
                    document.getElementById('modalEventTitle').innerText = matchedEventData.title;

                    const startDate = new Date(matchedEventData.startDate);
                    const endDate = new Date(matchedEventData.endDate);
                    const formattedDate = startDate.toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'long'
                    }) +
                    (startDate.getTime() !== endDate.getTime()
                        ? '–' + endDate.toLocaleDateString('id-ID', {
                            day: 'numeric',
                            month: 'long',
                            year: 'numeric'
                        })
                        : ` ${startDate.getFullYear()}`);

                    document.getElementById('modalEventDate').innerText = formattedDate;
                    document.getElementById('modalEventDesc').innerText = matchedEventData.description;

                    document.getElementById('addToCalendarBtn').onclick = () => {
                        const blob = new Blob([generateICS(matchedEventData.title, matchedEventData.description, matchedEventData.startDate, matchedEventData.endDate)], {
                            type: 'text/calendar'
                        });
                        const link = document.createElement('a');
                        link.href = URL.createObjectURL(blob);
                        link.download = `${matchedEventData.title.replace(/\s+/g, "_")}_POSITRON.ics`;
                        link.click();
                    };

                    new bootstrap.Modal(document.getElementById('eventModal')).show();
                });
            }



                grid.appendChild(cell);
            }
        }
            // Generate ICS file content
            function generateICS(title, description, start, end) {
                const format = date => new Date(date).toISOString().replace(/[-:]/g, "").split(".")[0] + "Z";
                return `BEGIN:VCALENDAR
                        VERSION:2.0
                        BEGIN:VEVENT
                        SUMMARY:${title}
                        DESCRIPTION:${description}
                        DTSTART:${format(start)}
                        DTEND:${format(new Date(new Date(end).getTime() + 60 * 60 * 1000))}
                        END:VEVENT
                        END:VCALENDAR`;
            }

            prevBtn.addEventListener("click", () => {
                if (currentMonth > 6) {
                    currentMonth--;
                    renderCalendar(currentMonth, currentYear);
                }
            });

            nextBtn.addEventListener("click", () => {
                if (currentMonth < 11) {
                    currentMonth++;
                    renderCalendar(currentMonth, currentYear);
                }
            });

            renderCalendar(currentMonth, currentYear);

            // Countdown functionality
            const countDownDate = new Date("Aug 27, 2025 08:00:00").getTime();

            const countdownFunction = setInterval(function() {
                const now = new Date().getTime();
                const distance = countDownDate - now;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                if (distance < 0) {
                    clearInterval(countdownFunction);
                    document.getElementById("countdown").innerHTML =
                        "<span class='text-warning'>Forum Maba Sedang Berlangsung!</span>";
                }
            }, 1000);

            // Smooth scrolling for CTA button
            document.querySelector('.cta-button').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('home').scrollIntoView({
                    behavior: 'smooth'
                });
            });

            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);

            // Observe animated elements
            document.querySelectorAll('.section-title, .countdown-item, .flip-card').forEach(el => {
                observer.observe(el);
            });
        });

        
    </script>
@endsection
