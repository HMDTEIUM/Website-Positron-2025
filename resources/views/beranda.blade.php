@extends('layouts.app')

@section('content')
    <!-- Top Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="center-wrapper">
            <div class="logo-bar">
                <img src="{{ asset('um.png') }}" alt="UM Logo">
            </div>
            <h1 class="hero-title">SELAMAT DATANG MAHASISWA BARU<br>DEPARTEMEN TEKNIK ELEKTRO DAN INFORMATIKA</h1>
            <div class="cta-box">
                <p>APAKAH KALIAN SIAP MENYAMBUT POSITRON 2025!?</p>
                <button id="ctaSiapButton" class="cta-button">SIAP!</button>
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
                    <img src="{{ asset('logo-positron.png') }}" alt="Logo POSITRON" class="positron-logo">
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
                <img src="{{ asset('logo-positron-rodokburem.png') }}" alt="Locker Sambutan"
                    class="sambutan-bg-logo">

                <!-- Coming Soon Section -->
                <div class="coming-soon-content">
                    <h3 class="coming-soon-title">COMING SOON</h3>

                    <div id="videoCarousel" class="carousel slide video-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach (['https://www.youtube.com/embed/dQw4w9WgXcQ', 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'https://www.youtube.com/embed/dQw4w9WgXcQ'] as $i => $link)
                                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                    <div class="video-container">
                                        <div class="video-wrapper">
                                            <iframe src="{{ $link }}" title="Video {{ $i + 1 }}"
                                                frameborder="0" allowfullscreen
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel"
                            data-bs-slide="next">
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
                    <img src="{{ asset('logo-positron.png') }}" alt="Logo POSITRON" class="countdown-logo">
                    <h3 class="countdown-title">Countdown FORUM MABA</h3>
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
                                    <p class="prodi-description">Program studi unggulan di DTEI yang membentuk generasi
                                        profesional dan berdaya saing global.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Locker Section -->
    <section class="locker-section positron-locker-section">
        <div class="container">
            <div class="section left-section" id="leftSection">
                <div class="left-content">
                    <div class="logo fade-in">
                        <img src="{{ asset('Logo Positron.png') }}" alt="Logo">
                    </div>
                    <p class="description fade-in" id="dynamic-description">
                        Silakan pilih salah satu menu di kanan untuk melihat detail informasi.
                    </p>
                    <div id="manualbook-button" style="display: none; margin-top: 20px; text-align: center;">
                        <a href="#" id="manualbook-link" class="download-btn" target="_blank">Download
                            Manualbook</a>
                    </div>
                </div>
            </div>

            <div class="resize-handle" id="resizeHandle"></div>

            <div class="right-section" id="rightSection">
                <div class="locker-grid">

                    <!-- POSITRON 2025 -->
                    <div class="locker-door" style="background-image: url('{{ asset('positron.png') }}');"
                        data-title="POSITRON 2025"
                        data-description="POSITRON 2025 hadir sebagai wadah orientasi mahasiswa baru Departemen Teknik Elektro dan Informatika Universitas Negeri Malang. Tahun ini, POSITRON mengusung tema <strong>&quot;Empowering Brighter Futures&quot;</strong> berarti menyalakan obor harapan di dalam diri setiap mahasiswa agar mampu melangkah menuju masa depan yang mereka bentuk sendiri—bukan sekadar mengikuti jalur yang ditentukan orang lain. <br><br> Kampus menjadi ruang untuk menempa integritas, memperluas wawasan, dan menyusun arah hidup dengan kesadaran. Sedangkan <strong>&quot;Beyond the Bell&quot;</strong> mengingatkan bahwa pembelajaran sejati tak berhenti di dalam kelas. Pendidikan tidak berakhir saat tugas dikumpulkan atau ujian selesai. Justru setelah itu, kita akan diuji dalam bentuk lain—ujian karakter, kejujuran, keberanian, dan nilai-nilai kemanusiaan. <br><br> Bergabunglah dengan kami dalam perjalanan menuju transformasi diri dan pencapaian prestasi yang membanggakan."
                        data-manualbook="{{ asset('manualbook/positron.pdf') }}">
                    </div>

                    <!-- Forum Maba -->
                    <div class="locker-door" style="background-image: url('{{ asset('forma.png') }}');"
                        data-title="Forum Maba"
                        data-description="Forum komunikasi dan orientasi untuk mahasiswa baru. Acara ini dirancang untuk memperkenalkan Anda pada lingkungan kampus, sistem perkuliahan, dan kehidupan berorganisasi di Departemen Teknik Elektro dan Informatika. <br><br> Anda akan bertemu dengan dosen, senior, dan teman-teman seangkatan yang akan bersama-sama menjalani perjalanan akademik selama beberapa tahun ke depan. Forum ini juga memberikan informasi penting tentang kurikulum, aturan akademik, dan berbagai aktivitas menarik yang bisa Anda ikuti."
                        data-manualbook="{{ asset('manualbook/forum_maba.pdf') }}">
                    </div>

                    <!-- LDK -->
                    <div class="locker-door" style="background-image: url('{{ asset('ldk.png') }}');"
                        data-title="LDK"
                        data-description="Latihan Dasar Kepemimpinan (LDK) merupakan program yang dirancang untuk membentuk karakter kepemimpinan dan kedisiplinan mahasiswa baru. Melalui serangkaian kegiatan outdoor dan indoor, Anda akan belajar tentang teamwork, problem solving, dan manajemen diri. <br><br> LDK mengajarkan nilai-nilai seperti tanggung jawab, integritas, dan kerja sama tim. Kegiatan ini menjadi fondasi penting bagi aktivitas Anda di kampus, termasuk dalam berorganisasi dan mengikuti berbagai kegiatan kemahasiswaan."
                        data-manualbook="{{ asset('manualbook/ldk.pdf') }}">
                    </div>

                    <!-- IOH -->
                    <div class="locker-door" style="background-image: url('{{ asset('ioh.png') }}');"
                        data-title="IOH"
                        data-description="Ice Breaking &amp; Orientasi Himpunan (IOH) adalah kegiatan yang dirancang untuk memperkenalkan mahasiswa baru pada himpunan program studi masing-masing. Anda akan belajar tentang struktur organisasi, program kerja, dan kegiatan yang diselenggarakan oleh himpunan. <br><br> IOH juga menjadi ajang untuk menjalin pertemanan dengan senior dan teman seangkatan dalam lingkungan program studi yang lebih khusus. Kegiatan ini membantu Anda beradaptasi dengan lingkungan akademik yang lebih spesifik sesuai minat dan bidang studi yang dipilih."
                        data-manualbook="{{ asset('manualbook/ioh.pdf') }}">
                    </div>

                    <!-- NAKO 9.0 -->
                    <div class="locker-door" style="background-image: url('{{ asset('nako.png') }}');"
                        data-title="NAKO 9.0"
                        data-description="Narasumber Kolaboratif (NAKO) versi 9.0 menghadirkan berbagai pembicara inspiratif dari alumni dan praktisi di bidang teknik elektro dan informatika. Anda akan mendapatkan wawasan tentang perkembangan industri, peluang karir, dan tips sukses dari mereka yang telah berpengalaman. <br><br> Kegiatan ini memberikan gambaran nyata tentang penerapan ilmu yang dipelajari di dunia kerja. NAKO juga menjadi wadah untuk membangun jaringan dengan alumni dan profesional di bidang Anda."
                        data-manualbook="{{ asset('manualbook/nako.pdf') }}">
                    </div>

                    <!-- Dewan Komunal -->
                    <div class="locker-door" style="background-image: url('{{ asset('dewan.png') }}');"
                        data-title="Dewan Komunal"
                        data-description="Dewan Komunal adalah forum diskusi terbuka yang membahas berbagai isu terkait kehidupan kampus dan pengembangan diri mahasiswa. Kegiatan ini memberikan kesempatan untuk menyampaikan aspirasi dan berpartisipasi dalam pengambilan keputusan di tingkat jurusan. <br><br> Melalui Dewan Komunal, Anda akan belajar tentang demokrasi kampus, tata kelola organisasi, dan pengembangan kebijakan yang berpengaruh langsung pada kehidupan akademik Anda."
                        data-manualbook="#">
                    </div>

                    <!-- Segmen -->
                    <div class="locker-door" style="background-image: url('{{ asset('seven.png') }}');"
                        data-title="Segmen"
                        data-description="Berbagai segmen menarik akan menghiasi rangkaian kegiatan POSITRON 2025. Mulai dari kompetisi antar kelompok, pentas seni, hingga kegiatan pengabdian masyarakat. Setiap segmen dirancang untuk mengasah kreativitas, sportivitas, dan kepedulian sosial Anda. <br><br> Anda akan belajar bekerja dalam tim, memecahkan masalah secara kreatif, dan mengembangkan soft skills yang sangat penting untuk masa depan karir Anda. Setiap segmen juga menjadi kesempatan untuk menunjukkan bakat dan minat Anda di luar ranah akademik."
                        data-manualbook="#">
                    </div>

                    <!-- Guide -->
                    <div class="locker-door" style="background-image: url('{{ asset('guide.png') }}');"
                        data-title="Guide"
                        data-description="Buku panduan ini berisi semua informasi penting yang Anda butuhkan untuk menjalani POSITRON 2025 dan kehidupan kampus di Departemen Teknik Elektro dan Informatika. Anda akan menemukan jadwal lengkap kegiatan, aturan yang berlaku, kontak penting, serta tips dan trik untuk sukses di kampus. <br><br> Buku panduan ini menjadi teman setia Anda selama mengikuti orientasi dan masa-masa awal perkuliahan. Pastikan untuk membaca dan memahami seluruh isinya agar dapat mengikuti kegiatan dengan optimal."
                        data-manualbook="{{ asset('manualbook/guide.pdf') }}">
                    </div>

                    <!-- Soon -->
                    <div class="locker-door" style="background-image: url('{{ asset('soon.png') }}');"
                        data-title="Soon"
                        data-description="Segera hadir! Kami sedang mempersiapkan konten khusus untuk Anda. Kami berkomitmen untuk memberikan pengalaman orientasi yang berkesan dan bermakna bagi seluruh mahasiswa baru Departemen Teknik Elektro dan Informatika. <br><br> Jangan lewatkan update terbaru tentang kegiatan POSITRON 2025 melalui media sosial resmi kami. Tetap semangat dan bersiaplah untuk petualangan menarik di dunia perkuliahan!"
                        data-manualbook="#">
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Calendar Section -->
    <section class="calendar-section">
        <div class="calendar-overlay"></div>
        <div class="container">
            <div class="calendar-header">
                <img src="{{ asset('logo-positron-rodokburem.png') }}" alt="Logo POSITRON" class="calendar-logo">
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

    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            line-height: 1.6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Default font */
            height: 100vh;
            /* Ensure body takes full height for split screen */
            overflow-y: hidden;
            /* Initially disable scrolling */
        }

        .container {
            padding: 0 15px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Hero Section */
        .hero-section {
            background: url('{{ asset('hall-locker.png') }}') no-repeat center center;
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
            height: clamp(50px, 5vw, 80px);
            z-index: 5;
            margin-top: -60px;
            margin-bottom: 30px;
            filter: drop-shadow(2px 2px 8px rgba(0, 0, 0, 0.5));
            animation: bounceIn 1.5s ease-out;
        }

        .hero-title {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(2rem, 5vw, 4.5rem);
            text-transform: uppercase;
            color: white;
            margin: 4rem 0;
            margin-bottom: 5rem;
            line-height: 1.3;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            animation: slideInUp 1s ease-out 0.3s both;
        }

       

        .cta-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: clamp(1.5rem, 4vw, 2rem);
            margin-top: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .cta-box p {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(2.5rem, 2vw, 1.5rem);
            line-height: 1.5;
            color: white;
        }

        .cta-button {
            background: linear-gradient(45deg, #ffffff, #ffffff);
            color: #0a3e6d;
            font-weight: bold;
            padding: 1rem 2rem;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 0.5px 2px rgb(6 31 52)
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgb(6 32 52);
            background: linear-gradient(45deg, #ffd35aff, #ffd35aff);
        }

        /* About Section */
        .about-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('{{ asset('bg-2.png') }}') no-repeat center center;
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

        .section-title {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(2rem, 5vw, 4rem);
            color: white;
            text-align: center;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            animation: fadeInUp 1s ease-out;
        }

        .section-description {
            font-family: 'Atlanta College', sans-serif;
            font-size: clamp(2.5rem, 2.5vw, 1.25rem);
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 3rem;
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
                url('{{ asset('hall-locker.png') }}') no-repeat center center;
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
            background: rgb(23 46 63 / 21%);
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

        /* Countdown Section */
        .countdown-section {
            background: url('{{ asset('countdown-bg.png') }}') no-repeat center center;
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
            background: rgb(8 23 34 / 70%);
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

        /* Program Studi Section */
        .prodi-section {
            background: url("{{ asset('Paper.png') }}") no-repeat center center;
            background-color: #f8f9fa;
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
            background: linear-gradient(75deg, #073579ff, #4e5fabff);
            border: 2px solid #e9ecef;
        }

        .flip-card-back {
            background: linear-gradient(75deg, #073579d8, #4e5fabd7);
            color: white;
            transform: rotateY(180deg);
        }

        .prodi-icon {
            font-size: 3rem;
            color: #ffffffff;
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
                url('{{ asset('bg-1.png') }}') no-repeat center center;
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

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        '
        '
        /* Mobile Optimizations */
        @media (max-width: 768px) {
            .hero-section {
                background-attachment: scroll;
                padding: 2rem 0;
            }

            .logo-icon {
                width: 111px;
                height: 151px;
                margin-top: 20px;
            }

            .about-section,
            .calendar-section {
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
            .sambutan-section {
                background: white !important;
                color: black !important;
            }

            .video-carousel {
                display: none;
            }
        }

        /* Locker Section Specific Styles */
        .positron-locker-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            position: relative;
            padding: 60px 0;
        }

        .positron-locker-section .container {
            display: flex;
            height: 95%;
            width: 95%;
            position: relative;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: none;
            /* Override global container max-width */
            padding: 0;
            /* Override global container padding */
        }

        .section {
            transition: none;
            /* Important for resize functionality */
            overflow: hidden;
            position: relative;
            flex-grow: 1;
            flex-basis: 0;
        }

        .left-section {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
            overflow-x: hidden;
            /* Prevent horizontal scroll */
            background-color: #f5f7fa;
            background-image: url('{{ asset('Background.png') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .left-content {
            max-width: 700px;
            /* Adjusted for better readability */
            margin: 0 auto;
            color: #333;
            text-align: center;
            /* Center content within left-content */
            min-height: 100%;
            /* Ensure content takes full height */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .logo {
            width: 150px;
            /* Fixed width for logo */
            height: auto;
            max-height: 250px;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .description {
            font-size: 17px;
            /* Original font size from test2.php */
            line-height: 1.8;
            color: #34495e;
            /* Original color from test2.php */
            text-align: justify;
            /* Original alignment from test2.php */
            margin: 0 auto;
            font-family: 'Poppins', sans-serif;
            /* Specific font for description */
        }

        .description strong {
            color: #0a3e6d;
            font-weight: 600;
        }

        .right-section {
            flex-shrink: 0;
            /* Prevent shrinking */
            width: 40%;
            /* Initial width for right section */
            background-color: #1b2a3a;
            background-image: url('{{ asset('Background_Loker.png') }}');
            background-size: 98%;
            background-size: cover;
            /* penuhi kotak tanpa mengulang */
            background-repeat: no-repeat;
            /* tidak diulang */
            /* posisikan di tengah */
            overflow-y: auto;
            display: flex;
            align-items: left;
            justify-content: left;
        }

        .locker-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Use 1fr for flexible sizing */
            gap: 10px;
            padding: 10px;
            width: fit-content;
            /* Adjust to content */
            height: fit-content;
            /* Adjust to content */
        }

        .locker-door {
            width: 130px;
            /* Fixed width from test2.php */
            height: 170px;
            /* Fixed height from test2.php */
            background-size: cover;
            /* Use cover to fill the area */
            background-repeat: no-repeat;
            background-position: center;
            cursor: pointer;
            transition: transform 0.2s ease, filter 0.2s ease, box-shadow 0.2s ease;
            filter: grayscale(20%);
            border-radius: 5px;
        }

        .locker-door:hover {
            transform: scale(1.05);
            filter: grayscale(0%);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.4);
        }

        /* Resize Handle Styling */
        .resize-handle {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 8px;
            /* Default width */
            background: rgba(255, 255, 255, 0.1);
            cursor: col-resize;
            z-index: 1000;
            border-left: 2px solid rgba(255, 255, 255, 0.2);
            border-right: 2px solid rgba(255, 255, 255, 0.2);
        }

        .resize-handle:hover {
            background: gray;
            width: 12px;
            /* Hover width */
            border-left: 2px solid rgba(255, 255, 255, 0.4);
            border-right: 2px solid rgba(255, 255, 255, 0.4);
        }

        .resize-handle.dragging {
            background: rgba(255, 255, 255, 0.3);
            width: 16px;
            /* Dragging width */
            border-left: 3px solid rgba(255, 255, 255, 0.6);
            border-right: 3px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
        }

        .resize-handle::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 4px;
            height: 40px;
            background: repeating-linear-gradient(to bottom,
                    rgba(255, 255, 255, 0.6) 0px,
                    rgba(255, 255, 255, 0.6) 4px,
                    transparent 4px,
                    transparent 8px);
            border-radius: 2px;
        }

        /* Custom Scrollbar for left section */
        .left-section::-webkit-scrollbar {
            width: 8px;
        }

        .left-section::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        .left-section::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 4px;
            transition: background 0.3s ease;
        }

        .left-section::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.5);
        }

        /* New styles for the manual book button */
        .download-btn {
            display: inline-block;
            background-color: #0a3e6d;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(10, 62, 109, 0.2);
            margin-top: 20px;
        }

        .download-btn:hover {
            background-color: #082d54;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(10, 62, 109, 0.3);
        }

        .download-btn:active {
            transform: translateY(0);
        }

        /* Responsive design for mobile (vertical layout) */
        @media (max-width: 768px) {
            .positron-locker-section .container {
                flex-direction: column;
                height: 90%;
                /* Adjust height for mobile */
                width: 95%;
                /* Adjust width for mobile */
            }

            .left-section,
            .right-section {
                flex-basis: auto;
                width: 100%;
                height: 50vh;
                /* Half viewport height for each section */
                padding: 20px;
                /* Adjust padding for mobile */
            }

            .left-content {
                padding: 0;
                /* Remove padding from left-content on mobile */
            }

            .logo {
                width: 120px;
                /* Smaller logo on mobile */
                margin-bottom: 20px;
            }

            .description {
                font-size: 15px;
                /* Smaller font size on mobile */
            }

            .locker-grid {
                grid-template-columns: repeat(3, 80px);
                /* Smaller lockers on mobile */
                grid-template-rows: repeat(3, 150px);
                gap: 10px;
                /* Smaller gap on mobile */
            }

            .locker-door {
                width: 80px;
                height: 150px;
            }

            /* Mobile resize handle styling */
            .resize-handle {
                left: 0;
                right: 0;
                top: auto;
                width: 100%;
                height: 8px;
                /* Mobile handle height */
                cursor: row-resize;
                border-left: none;
                border-right: none;
                border-top: 2px solid rgba(255, 255, 255, 0.2);
                border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            }

            .resize-handle:hover {
                height: 12px;
                /* Mobile hover height */
                border-top: 2px solid rgba(255, 255, 255, 0.4);
                border-bottom: 2px solid rgba(255, 255, 255, 0.4);
            }

            .resize-handle.dragging {
                height: 16px;
                /* Mobile dragging height */
                border-top: 3px solid rgba(255, 255, 255, 0.6);
                border-bottom: 3px solid rgba(255, 255, 255, 0.6);
            }

            .resize-handle::before {
                width: 40px;
                height: 4px;
                background: repeating-linear-gradient(to right,
                        rgba(255, 255, 255, 0.6) 0px,
                        rgba(255, 255, 255, 0.6) 4px,
                        transparent 4px,
                        transparent 8px);
            }
        }
    </style>

    <script>
        function updateContent(title, description, manualbookLink) {
            document.getElementById('dynamic-description').innerHTML = description;

            const manualbookButton = document.getElementById('manualbook-button');
            const manualbookLinkElement = document.getElementById('manualbook-link');

            if (manualbookLink && manualbookLink !== '#') {
                manualbookLinkElement.href = manualbookLink;
                manualbookLinkElement.innerText = `Download ${title} Manualbook`;
                manualbookButton.style.display = 'block';
            } else {
                manualbookButton.style.display = 'none';
            }

            document.getElementById('leftSection').scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Disable scrolling initially
            document.body.style.overflowY = 'hidden';

            document.querySelectorAll(".locker-door").forEach(locker => {
                locker.addEventListener("click", function() {
                    updateContent(
                        this.dataset.title,
                        this.dataset.description,
                        this.dataset.manualbook
                    );
                });
            });

            // Auto klik locker pertama saat load
            const firstLocker = document.querySelector(".locker-door");
            if (firstLocker) {
                firstLocker.click();
            }

            // Enable scrolling and navigate on CTA button click
            document.getElementById('ctaSiapButton').addEventListener('click', function(e) {
                e.preventDefault();
                document.body.style.overflowY = 'auto'; // Enable scrolling
                document.getElementById('home').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Optimized Split Screen Controller Class
        class OptimizedSplitScreenController {
            constructor() {
                // Scoped to the new section to avoid conflicts with other .container elements
                this.container = document.querySelector('.positron-locker-section .container');
                this.leftSection = document.getElementById('leftSection');
                this.rightSection = document.getElementById('rightSection');
                this.resizeHandle = document.getElementById('resizeHandle');

                this.isDragging = false;
                this.startPos = 0;
                this.startLeftSize = 0;
                this.containerSize = 0;
                this.minLeftSizePercentage = 50; // Minimum percentage for left section
                this.maxLeftSizeOffset = 10; // Max size offset from container edge
                this.isMobile = false;

                this.init();
            }

            init() {
                this.handleResize(); // Set initial sizes and check mobile status
                this.resizeHandle.addEventListener('mousedown', this.handleStart.bind(this));
                document.addEventListener('mousemove', this.handleMove.bind(this));
                document.addEventListener('mouseup', this.handleEnd.bind(this));
                // Touch event listeners for mobile
                this.resizeHandle.addEventListener('touchstart', this.handleTouchStart.bind(this), {
                    passive: false
                });
                document.addEventListener('touchmove', this.handleTouchMove.bind(this), {
                    passive: false
                });
                document.addEventListener('touchend', this.handleEnd.bind(this));
                window.addEventListener('resize', this.handleResize.bind(this)); // Re-evaluate on window resize
                // Prevent text selection during dragging
                document.addEventListener('selectstart', (e) => {
                    if (this.isDragging) e.preventDefault();
                });
            }

            handleResize() {
                this.isMobile = window.innerWidth <= 768; // Define mobile breakpoint
                this.container.style.flexDirection = this.isMobile ? 'column' : 'row'; // Change flex direction
                // Reset explicit width/height styles to allow flexbox to re-calculate
                this.leftSection.style.width = null;
                this.leftSection.style.height = null;
                this.rightSection.style.width = null;
                this.rightSection.style.height = null;

                if (this.isMobile) {
                    this.containerSize = this.container.offsetHeight;
                    // Set initial heights for mobile
                    this.leftSection.style.height = '62%';
                    this.rightSection.style.height = '38%';
                } else {
                    this.containerSize = this.container.offsetWidth;
                    // Set initial widths for desktop
                    this.leftSection.style.width = '62%';
                    this.rightSection.style.width = '38%'; // Adjusted for better initial balance
                }
                this.updateHandlePosition(); // Position the handle correctly
            }

            handleStart(e) {
                if (this.isDragging) return; // Prevent multiple drag starts
                this.isDragging = true;
                this.resizeHandle.classList.add('dragging');
                this.startPos = this.isMobile ? e.clientY : e.clientX; // Get start position based on orientation
                this.startLeftSize = this.isMobile ? this.leftSection.offsetHeight : this.leftSection
                .offsetWidth; // Get initial size
                document.body.style.cursor = this.isMobile ? 'row-resize' : 'col-resize'; // Change cursor
                document.body.style.userSelect = 'none'; // Prevent text selection
                e.preventDefault(); // Prevent default browser behavior (e.g., image dragging)
            }

            handleTouchStart(e) {
                if (this.isDragging) return;
                this.isDragging = true;
                this.resizeHandle.classList.add('dragging');
                const touch = e.touches?.[0]; // Get the first touch point
                this.startPos = this.isMobile ? touch?.clientY : touch?.clientX;
                this.startLeftSize = this.isMobile ? this.leftSection.offsetHeight : this.leftSection.offsetWidth;
                e.preventDefault();
            }

            handleMove(e) {
                if (!this.isDragging) return;
                const currentPos = this.isMobile ? e.clientY : e.clientX;
                this.updateSizes(currentPos);
                e.preventDefault();
            }

            handleTouchMove(e) {
                if (!this.isDragging) return;
                const touch = e.touches?.[0];
                const currentPos = this.isMobile ? touch?.clientY : touch?.clientX;
                this.updateSizes(currentPos);
                e.preventDefault();
            }

            handleEnd() {
                if (!this.isDragging) return;
                this.isDragging = false;
                this.resizeHandle.classList.remove('dragging');
                document.body.style.cursor = 'default'; // Reset cursor
                document.body.style.userSelect = 'auto'; // Allow text selection again
            }

            updateSizes(currentPos) {
                const delta = currentPos - this.startPos; // Calculate movement delta
                let newLeftSize = this.startLeftSize + delta; // Calculate new size for left section

                // Define minimum and maximum sizes to prevent sections from collapsing
                const minSectionSize = 200; // Minimum size in pixels
                const minLeftSize = Math.max(minSectionSize, (this.minLeftSizePercentage / 81) * this.containerSize);
                const maxLeftSize = this.containerSize - minSectionSize;

                newLeftSize = Math.max(minLeftSize, Math.min(maxLeftSize, newLeftSize));

                if (this.isMobile) {
                    this.leftSection.style.height = `${newLeftSize}px`;
                    this.rightSection.style.height = `${this.containerSize - newLeftSize}px`;
                } else {
                    this.leftSection.style.width = `${newLeftSize}px`;
                    this.rightSection.style.width = `${this.containerSize - newLeftSize}px`;
                }
                this.updateHandlePosition(); // Re-position handle after size change
            }

            updateHandlePosition() {
                if (this.isMobile) {
                    this.resizeHandle.style.top = `${this.leftSection.offsetHeight}px`;
                    this.resizeHandle.style.left = '0'; // Ensure handle is full width
                } else {
                    this.resizeHandle.style.left = `${this.leftSection.offsetWidth}px`;
                    this.resizeHandle.style.top = '0'; // Ensure handle is full height
                }
            }
        }

        // Initialize when DOM is loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize the split screen controller
            new OptimizedSplitScreenController();

            // Event dates for Calendar
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

            let currentMonth = 6; // Juli (0-indexed, so 6 is July)
            let currentYear = 2025;

            function renderCalendar(month, year) {
                grid.innerHTML = "";
                const daysInMonth = new Date(year, month + 1, 0).getDate(); // Get number of days in month
                const firstDayIndex = new Date(year, month, 1)
            .getDay(); // Get day of week for 1st day (0=Sunday, 1=Monday...)
                const monthName = new Date(year, month).toLocaleString('id-ID', {
                    month: 'long'
                });
                monthYearDisplay.innerText = `${monthName} ${year}`;

                // Add empty cells for days before the first day of the month
                for (let i = 0; i < firstDayIndex; i++) {
                    grid.appendChild(document.createElement("div"));
                }

                // Add days of the month
                for (let d = 1; d <= daysInMonth; d++) {
                    const dateObj = new Date(year, month, d);
                    const cell = document.createElement("div");
                    cell.className = "day-cell";

                    const today = new Date();
                    // Check if current cell date is today's date
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

                    // Check for events on this date
                    let matchedEventData = null;
                    for (const [startDate, ev] of Object.entries(eventDates)) {
                        const start = new Date(startDate);
                        const end = new Date(ev.endDate);
                        // Check if the current date cell falls within an event's start and end date
                        if (dateObj >= start && dateObj <= end) {
                            matchedEventData = {
                                startDate,
                                ...ev
                            };
                            break;
                        }
                    }

                    if (matchedEventData) {
                        cell.classList.add("event");
                        const eventLabel = document.createElement("div");
                        eventLabel.className = "event-title";
                        eventLabel.innerText = matchedEventData.title;
                        cell.appendChild(eventLabel);

                        // Add click listener to show event details in modal
                        cell.addEventListener("click", function() {
                            document.getElementById('modalEventTitle').innerText = matchedEventData.title;

                            const startDate = new Date(matchedEventData.startDate);
                            const endDate = new Date(matchedEventData.endDate);
                            const formattedDate = startDate.toLocaleDateString('id-ID', {
                                    day: 'numeric',
                                    month: 'long'
                                }) +
                                (startDate.getTime() !== endDate.getTime() ?
                                    '–' + endDate.toLocaleDateString('id-ID', {
                                        day: 'numeric',
                                        month: 'long',
                                        year: 'numeric'
                                    }) :
                                    ` ${startDate.getFullYear()}`);

                            document.getElementById('modalEventDate').innerText = formattedDate;
                            document.getElementById('modalEventDesc').innerText = matchedEventData
                                .description;

                            // Add to Calendar button functionality
                            document.getElementById('addToCalendarBtn').onclick = () => {
                                const blob = new Blob([generateICS(matchedEventData.title,
                                    matchedEventData.description, matchedEventData
                                    .startDate, matchedEventData.endDate)], {
                                    type: 'text/calendar'
                                });
                                const link = document.createElement('a');
                                link.href = URL.createObjectURL(blob);
                                link.download =
                                    `${matchedEventData.title.replace(/\s+/g, "_")}_POSITRON.ics`;
                                link.click();
                            };

                            // Show the Bootstrap modal
                            new bootstrap.Modal(document.getElementById('eventModal')).show();
                        });
                    }
                    grid.appendChild(cell);
                }
            }

            // Function to generate ICS file content for calendar events
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

            // Event listeners for calendar navigation buttons
            prevBtn.addEventListener("click", () => {
                if (currentMonth > 6) { // Limit previous months to July 2025
                    currentMonth--;
                    renderCalendar(currentMonth, currentYear);
                }
            });

            nextBtn.addEventListener("click", () => {
                if (currentMonth < 11) { // Limit next months to December 2025
                    currentMonth++;
                    renderCalendar(currentMonth, currentYear);
                }
            });

            // Initial render of the calendar
            renderCalendar(currentMonth, currentYear);

            // Countdown functionality for Forum Maba
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

            // Intersection Observer for animations (fade-in, bounce-in, pulse)
            const observerOptions = {
                threshold: 0.1, // Trigger when 10% of the element is visible
                rootMargin: '0px 0px -50px 0px' // Adjust viewport for triggering
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState =
                        'running'; // Play animation when visible
                    } else {
                        // Optional: Reset animation if element scrolls out of view
                        // entry.target.style.animationPlayState = 'paused'; 
                    }
                });
            }, observerOptions);

            // Observe animated elements
            document.querySelectorAll(
                '.section-title, .countdown-item, .flip-card, .fade-in, .bounceIn, .slideInUp, .pulse').forEach(
                el => {
                    observer.observe(el);
                });
        });
    </script>
@endsection
