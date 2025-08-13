<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSITRON 2025 - Empowering Brighter Futures</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <style>
            :root {
                --handle-width: 8px;
                --handle-width-hover: 12px;
                --handle-width-dragging: 16px;
                --mobile-handle-height: 8px;
                --mobile-handle-height-hover: 12px;
                --mobile-handle-height-dragging: 16px;
                --min-section-size: 200px;
                --locker-width: 170px;
                --locker-height: 210px;
            --locker-gap: 5px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            height: 100vh;
            position: relative;
        }

        .section {
            transition: none;
            overflow: hidden;
            position: relative;
            flex-grow: 1;
            flex-basis: 0;
        }

        .left-section {
            display: flex;
            flex-direction: column;
            padding: 0;
            overflow-y: auto;
            overflow-x: hidden;
            background-image: url('Background.png');
            background-size: cover;
            background-position: center;
        }

        .left-content {
            padding: 40px;
            text-align: center;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            max-width: 100%;
        }

        .right-section {
            flex-shrink: 0;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #1b2a3a;
        }

        .locker-grid {
            display: grid;
            grid-template-columns: repeat(3, var(--locker-width));
            grid-template-rows: repeat(3, var(--locker-height));
            gap: var(--locker-gap);
            justify-content: center;
            align-content: center;
            width: fit-content;
            height: fit-content;
        }

        .locker-door {
            width: var(--locker-width);
            height: var(--locker-height);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            cursor: pointer;
            transition: transform 0.2s ease, filter 0.2s ease;
            filter: grayscale(20%);
            border-radius: 5px;
        }

        .locker-door:hover {
            transform: scale(1.05);
            filter: grayscale(0%);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.4);
        }

        .logo {
            width: 150px;
            height: auto;
            max-height: 250px;
            margin: 0 auto 30px;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .description {
            font-family: 'Poppins', sans-serif;
            font-size: 17px;
            color: #34495e;
            line-height: 1.8;
            max-width: 700px;
            text-align: justify;
            margin: 0 auto;
        }

        /* --- Resize Handle Styling --- */
        .resize-handle {
            position: absolute;
            top: 0;
            bottom: 0;
            width: var(--handle-width);
            background: rgba(255, 255, 255, 0.1);
            cursor: col-resize;
            z-index: 1000;
            border-left: 2px solid rgba(255, 255, 255, 0.2);
            border-right: 2px solid rgba(255, 255, 255, 0.2);
        }

        .resize-handle:hover {
            background: gray;
            width: var(--handle-width-hover);
            border-left: 2px solid rgba(255, 255, 255, 0.4);
            border-right: 2px solid rgba(255, 255, 255, 0.4);
        }

        .resize-handle.dragging {
            background: rgba(255, 255, 255, 0.3);
            width: var(--handle-width-dragging);
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

        /* --- Custom Scrollbar for left section --- */
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

        /* --- Responsive design for mobile (vertical layout) --- */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section, .right-section {
                flex-basis: auto;
                width: 100%;
                height: 50vh;
            }

            .left-content {
                padding: 30px 20px;
            }

            .logo {
                width: 120px;
                margin-bottom: 20px;
            }

            .description {
                font-size: 15px;
            }

            .locker-grid {
                grid-template-columns: repeat(3, 80px);
                grid-template-rows: repeat(3, 150px);
                gap: 15px;
            }

            .locker-door {
                width: 80px;
                height: 150px;
                background-size: cover;
            }

            /* Mobile resize handle styling */
            .resize-handle {
                left: 0;
                right: 0;
                top: auto;
                width: 100%;
                height: var(--mobile-handle-height);
                cursor: row-resize;
                border-left: none;
                border-right: none;
                border-top: 2px solid rgba(255, 255, 255, 0.2);
                border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            }

            .resize-handle:hover {
                height: var(--mobile-handle-height-hover);
                border-top: 2px solid rgba(255, 255, 255, 0.4);
                border-bottom: 2px solid rgba(255, 255, 255, 0.4);
            }

            .resize-handle.dragging {
                height: var(--mobile-handle-height-dragging);
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

        /* --- POPUP STYLING (New) --- */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            background: rgba(0, 0, 0, 0.6);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 2000;
        }

        .popup {
            background: #fff;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            padding: 30px;
            animation: openPopup 0.5s ease forwards;
            position: relative;
        }

        @keyframes openPopup {
            0% {
                transform: scale(0.7);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .popup h2 {
            margin-bottom: 15px;
            font-size: 22px;
            color: #1b2a3a;
        }

        .popup p {
            font-size: 15px;
            margin-bottom: 20px;
            color: #333;
        }

        .popup .download-btn {
            display: inline-block;
            background-color: #1b2a3a;
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .popup .download-btn:hover {
            background-color: #0e1a28;
        }

        .popup .close-btn {
            position: absolute;
            top: 12px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="section left-section" id="leftSection">
            <div class="left-content">
                <div class="logo fade-in">
                    <img src="Logo Positron.png" alt="Logo">
                </div>
                <p class="description fade-in">
                    POSITRON 2025 hadir sebagai wadah orientasi mahasiswa baru Departemen Teknik Elektro dan Informatika
                    Universitas Negeri Malang. Tahun ini, POSITRON mengusung tema <strong>"Empowering Brighter
                        Futures"</strong> berarti menyalakan obor harapan di dalam diri setiap mahasiswa agar mampu
                    melangkah menuju masa depan yang mereka bentuk sendiri—bukan sekadar mengikuti jalur yang ditentukan
                    orang lain.
                    <br><br>
                    Kampus menjadi ruang untuk menempa integritas, memperluas wawasan, dan menyusun arah hidup dengan
                    kesadaran. Sedangkan <strong>"Beyond the Bell"</strong> mengingatkan bahwa pembelajaran sejati tak
                    berhenti di dalam kelas. Pendidikan tidak berakhir saat tugas dikumpulkan atau ujian selesai. Justru
                    setelah itu, kita akan diuji dalam bentuk lain—ujian karakter, kejujuran, keberanian, dan nilai-nilai
                    kemanusiaan.
                    <br><br>
                    Melalui POSITRON 2025, kami mengundang seluruh mahasiswa baru untuk tidak hanya menjadi bagian dari
                    komunitas akademik, tetapi juga menjadi agen perubahan yang membawa dampak positif bagi lingkungan
                    sekitar. Dengan semangat kolaborasi dan inovasi, mari kita wujudkan masa depan yang lebih cerah dan
                    bermakna.
                    <br><br>
                    Bergabunglah dengan kami dalam perjalanan menuju transformasi diri dan pencapaian prestasi yang
                    membanggakan. Bersama-sama, kita akan membangun fondasi yang kuat untuk masa depan yang penuh dengan
                    peluang dan kesuksesan.
                </p>
            </div>
        </div>

        <div class="resize-handle" id="resizeHandle"></div>

        <div class="right-section" id="rightSection">
            <div class="locker-grid">
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('POSITRON 2025', 'Program utama pembuka acara POSITRON 2025.', 'positron')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('Forum Maba', 'Forum komunikasi dan orientasi untuk mahasiswa baru.', 'maba')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('LDK', 'Latihan Dasar Kepemimpinan untuk membentuk karakter.', 'ldk')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('IOH', 'Ice Breaking & Orientasi Himpunan.', 'ioh')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('NAKO 9.0', 'Narasumber Kolaboratif, versi 9.', 'nako')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('Dewan Komunal', 'Diskusi dan musyawarah terbuka.', 'dewan')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('Segmen', 'Acara-acara kecil selama POSITRON.', 'segmen')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('Guide', 'Panduan acara POSITRON 2025.', 'guide')"></div>
                <div class="locker-door" style="background-image: url('Loker 2.png');" onclick="openLoker('Soon', 'Segera hadir!', 'soon')"></div>
            </div>
        </div>
    </div>

    <div class="popup-overlay" id="popup">
        <div class="popup">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2 id="popup-title">Judul Program</h2>
            <p id="popup-desc">Deskripsi Program</p>
            <a href="#" id="popup-download" class="download-btn" target="_blank">Download Manualbook</a>
        </div>
    </div>

    <script>
        class OptimizedSplitScreenController {
            constructor() {
                this.container = document.querySelector('.container');
                this.leftSection = document.getElementById('leftSection');
                this.rightSection = document.getElementById('rightSection');
                this.resizeHandle = document.getElementById('resizeHandle');

                this.isDragging = false;
                this.startPos = 0;
                this.startLeftSize = 0;
                this.containerSize = 0;
                this.minLeftSizePercentage = 50;
                this.maxLeftSizeOffset = 10;
                this.isMobile = false;

                this.init();
            }

            init() {
                this.handleResize();
                this.resizeHandle.addEventListener('mousedown', this.handleStart.bind(this));
                document.addEventListener('mousemove', this.handleMove.bind(this));
                document.addEventListener('mouseup', this.handleEnd.bind(this));
                this.resizeHandle.addEventListener('touchstart', this.handleTouchStart.bind(this), {
                    passive: false
                });
                document.addEventListener('touchmove', this.handleTouchMove.bind(this), {
                    passive: false
                });
                document.addEventListener('touchend', this.handleEnd.bind(this));
                window.addEventListener('resize', this.handleResize.bind(this));
                document.addEventListener('selectstart', (e) => {
                    if (this.isDragging) e.preventDefault();
                });
            }

            handleResize() {
                this.isMobile = window.innerWidth <= 768;
                this.container.style.flexDirection = this.isMobile ? 'column' : 'row';
                this.leftSection.style.width = null;
                this.leftSection.style.height = null;
                this.rightSection.style.width = null;
                this.rightSection.style.height = null;

                if (this.isMobile) {
                    this.containerSize = this.container.offsetHeight;
                    this.leftSection.style.height = '50%';
                    this.rightSection.style.height = '50%';
                } else {
                    this.containerSize = this.container.offsetWidth;
                    this.leftSection.style.width = '50%';
                    this.rightSection.style.width = '38%';
                }
                this.updateHandlePosition();
            }

            handleStart(e) {
                if (this.isDragging) return;
                this.isDragging = true;
                this.resizeHandle.classList.add('dragging');
                this.startPos = this.isMobile ? e.clientY : e.clientX;
                this.startLeftSize = this.isMobile ? this.leftSection.offsetHeight : this.leftSection.offsetWidth;
                document.body.style.cursor = this.isMobile ? 'row-resize' : 'col-resize';
                document.body.style.userSelect = 'none';
                e.preventDefault();
            }

            handleTouchStart(e) {
                if (this.isDragging) return;
                this.isDragging = true;
                this.resizeHandle.classList.add('dragging');
                const touch = e.touches?.[0];
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
                document.body.style.cursor = 'default';
                document.body.style.userSelect = 'auto';
            }

            updateSizes(currentPos) {
                const delta = currentPos - this.startPos;
                let newLeftSize = this.startLeftSize + delta;
                const minLeftSize = (this.minLeftSizePercentage / 80.5) * this.containerSize;
                const maxLeftSize = this.containerSize - this.maxLeftSizeOffset;
                newLeftSize = Math.max(minLeftSize, Math.min(maxLeftSize, newLeftSize));

                if (this.isMobile) {
                    this.leftSection.style.height = `${newLeftSize}px`;
                    this.rightSection.style.height = `${this.containerSize - newLeftSize}px`;
                } else {
                    this.leftSection.style.width = `${newLeftSize}px`;
                    this.rightSection.style.width = `${this.containerSize - newLeftSize}px`;
                }
                this.updateHandlePosition();
            }

            updateHandlePosition() {
                if (this.isMobile) {
                    this.resizeHandle.style.top = `${this.leftSection.offsetHeight}px`;
                    this.resizeHandle.style.left = '0';
                } else {
                    this.resizeHandle.style.left = `${this.leftSection.offsetWidth}px`;
                    this.resizeHandle.style.top = '0';
                }
            }
        }

        // New pop-up functions
        function openLoker(title, description, fileId) {
            document.getElementById("popup-title").innerText = title;
            document.getElementById("popup-desc").innerText = description;
            document.getElementById("popup-download").href = `manualbook/${fileId}.pdf`;
            document.getElementById("popup").style.display = 'flex';
        }

        function closePopup() {
            document.getElementById("popup").style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', () => {
            new OptimizedSplitScreenController();
        });
    </script>
</body>

</html>