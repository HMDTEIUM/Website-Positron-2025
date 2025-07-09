@extends('layouts.app')

@section('content')
    <!-- Top Hero Section -->
    <section class="hero-section">
    <div class="center-wrapper">
        <div class="logo-bar">
            <img src="{{ asset('images/um.png') }}" alt="UM Logo">
        </div>
        <h1>SELAMAT DATANG MAHASISWA BARU<br>DEPARTEMEN TEKNIK ELEKTRO DAN INFORMATIKA</h1>
        <div class="cta-box">
            <p>APAKAH KALIAN SIAP MENYAMBUT POSITRON 2025!?</p>
            <button onclick="location.href='#home'">SIAP!</button>
        </div>
    </div>
</section>


    <!-- Tentang POSITRON - Fullscreen Modern Accordion -->
    <section id="home" class="deskripsi">
        <div class="sambutan">
            <div id="isiDeskripsi" class="accordion-content mx-auto" style="max-width: 700px;">
            </div>
        </div>
    </section>

<!-- CSS Hero Section -->

<style>

.hero-section,
.sambutan {
    margin: 0;
    padding: 0;
    border: none;
    line-height: 1;
    position: relative;
    overflow: hidden;
}
.sambutan {
    background: url('/images/bg-2.png') no-repeat center center;
    background-size: cover;
    height: 50vh;
    background-position: center;
    padding: 60px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
}

.hero-section {
    background: url('/images/bg-1.png') no-repeat center center;
    background-position: center;
    background-size: cover;
    background-color: #0a3e6d;
    height: 100vh;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
}

.center-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.logo-bar {
    display: flex;
    justify-content: center;
}

.logo-bar img {
    height: 60px;
    filter: drop-shadow(2px 2px 5px rgba(0, 0, 0, 0.3));
}

.hero-section h1 {
    font-size: 22px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 20px 0;
    color: white;
    line-height: 1.5;
}

.cta-box {
    position: relative;
    z-index: 10;
    background-color: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 15px;
    box-shadow: 0px 8px 30px rgba(0,0,0,0.3);
    color: white;
    margin-top: 30px;
    animation: fadeInUp 1s ease forwards;
}

.cta-box p {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
}

.cta-box button {
    background-color: white;
    color: #0a3e6d;
    font-weight: bold;
    padding: 20px 30px;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.cta-box button:hover {
    background-color: #ffd700;
    transform: scale(1.05);
}
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
    </style>

    <!-- CSS Accordion & Hover -->
    <style>
        .toggle-hover {
            cursor: pointer;
            position: relative;
            display: inline-block;
            transition: color 0.4s ease;
        }

        .toggle-hover::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #0d6efd, #6610f2);
            transition: width 0.4s ease;
            border-radius: 4px;
        }

        .toggle-hover:hover {
            color: #6610f2;
            text-shadow: 0 0 5px rgba(102, 16, 242, 0.4);
        }

        .toggle-hover:hover::after {
            width: 100%;
        }

        .accordion-content {
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.6s ease, padding 0.4s ease, opacity 0.5s ease;
            padding: 0 0;
            opacity: 0;
        }

        .accordion-content.show {
            max-height: 500px;
            padding: 15px 0;
            opacity: 1;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        section#deskripsi {
            padding: 60px 20px;
        }
    </style>

    <!-- JS Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('toggleDeskripsi');
            const isi = document.getElementById('isiDeskripsi');

            toggle.addEventListener('click', () => {
                isi.classList.toggle('show');
            });
        });
    </script>


    <!-- Prodi Flip Cards - Fullscreen & Centered -->
    <section class="d-flex align-items-center py-5 bg-white" style="min-height: 100vh;">
        <div class="container">
            <h3 class="text-center mb-5">Program Studi di Departemen Teknik Elektro dan Informatika</h3>
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
                                <!-- Sisi Depan -->
                                <div class="flip-card-front text-center">
                                    <i class="bi {{ $icon }}"></i>
                                    <h5>{{ $nama }}</h5>
                                </div>
                                <!-- Sisi Belakang -->
                                <div class="flip-card-back">
                                    <h5>{{ $nama }}</h5>
                                    <p>Program studi unggulan di DTEI yang membentuk generasi profesional dan berdaya saing
                                        global.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CSS Tetap Sama -->
    <style>
        .flip-card {
            background-color: transparent;
            width: 100%;
            height: 250px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
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
            border-radius: 12px;
            backface-visibility: hidden;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .flip-card-front i {
            font-size: 2rem;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .flip-card-back {
            background-color: #0d6efd;
            color: white;
            transform: rotateY(180deg);
            text-align: center;
        }

        .flip-card h5 {
            margin-bottom: 10px;
            font-weight: 600;
        }

        .flip-card p {
            font-size: 14px;
            margin: 0;
        }
    </style>


    <!-- Countdown FORUM MABA - Fullscreen Modern -->
    <section class="countdown-section d-flex align-items-center justify-content-center text-white text-center">
        <div class="container">
            <h3 class="mb-3 fw-bold display-5">Countdown FORUM MABA</h3>
            <p class="mb-5 lead">Menuju pembukaan Forum Maba POSITRON 2025!</p>
            <div id="countdown" class="d-flex flex-wrap justify-content-center gap-4 fs-3 fw-semibold">
                <div class="countdown-item">
                    <span id="days">0</span><br>Hari
                </div>
                <div class="countdown-item">
                    <span id="hours">0</span><br>Jam
                </div>
                <div class="countdown-item">
                    <span id="minutes">0</span><br>Menit
                </div>
                <div class="countdown-item">
                    <span id="seconds">0</span><br>Detik
                </div>
            </div>
        </div>
    </section>

    <!-- CSS Styling COUNTDOWN -->
    <style>
        .countdown-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            /* ganti dengan gambar/video jika perlu */
            background-size: cover;
            background-position: center;
            padding: 60px 20px;
        }

        .countdown-item {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px 30px;
            border-radius: 12px;
            min-width: 120px;
            backdrop-filter: blur(8px);
        }

        .countdown-item span {
            font-size: 2.5rem;
            display: block;
        }

        @media (max-width: 576px) {
            .countdown-item {
                padding: 15px 20px;
                min-width: 80px;
            }

            .countdown-item span {
                font-size: 2rem;
            }
        }
    </style>

    <!-- JS Countdown Logic -->
    <script>
        // Set tanggal acara (misal 20 Agustus 2025 pukul 08:00)
        const targetDate = new Date("2025-08-20T08:00:00").getTime();

        const countdown = () => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) return;

            document.getElementById("days").innerText = Math.floor(distance / (1000 * 60 * 60 * 24));
            document.getElementById("hours").innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 *
                60));
            document.getElementById("minutes").innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            document.getElementById("seconds").innerText = Math.floor((distance % (1000 * 60)) / 1000);
        };

        setInterval(countdown, 1000);
    </script>

    <section class="py-5 min-vh-100" style="background: url('https://via.placeholder.com/1200x800') center center / cover no-repeat;">
    <div class="container">
        <h3 class="text-center fw-semibold mb-4">Calendar POSITRON 2025</h3>
        <div class="d-flex justify-content-center align-items-center gap-3 mb-4 calendar-section">
            <button class="btn btn-outline-primary" id="prevMonth">&lt;</button>
            <h5 id="monthYearDisplay" class="mb-0 fw-semibold"></h5>
            <button class="btn btn-outline-primary" id="nextMonth">&gt;</button>
        </div>
        <div class="calendar-grid" id="calendarGrid"></div>
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
                    <button class="btn btn-outline-primary mt-3" id="addToCalendarBtn">Tambahkan ke Kalender Saya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS Kalender -->
        <style>
        section {
            background: url('/images/bg-1.png') center center / cover no-repeat;
            position: relative;
        }

        section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); 
            z-index: 0;
        }

        section > .container {
            position: relative;
            z-index: 1;
            color: white;
        }

        .calendar-section button {
            color: white;
            border-color: white;
        }

        .calendar-section button:hover {
            background-color: white;
            color: #0a3e6d;
        }

        #monthYearDisplay {
            color: white;
            font-size: 1.2rem;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 12px;
        }

        .day-cell {
            background-color: rgba(255, 255, 255, 0.92);
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
            cursor: default;
            color: #0a3e6d;
            font-weight: 500;
        }

        .day-cell:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            background-color:rgb(204, 204, 204)
        }

        .day-cell.today {
            border: 2px solid #ffc107;
        }

        .day-cell.event {
            background-color: #1d4f98;
            color: white;
            cursor: pointer;
        }

        .day-cell.event:hover {
            background-color: #1d4f98;
        }

        .day-number {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .day-cell .event-title {
            font-size: 0.75rem;
            font-weight: 600;
            margin-top: 6px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .day-cell.range-start {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .day-cell.range-end {
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .day-cell.range-middle {
            background-color: #0a58ca !important;
        }

        .modal-content {
            background-color: white;
            color: #0a3e6d;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            border-bottom: 1px solid #dee2e6;
        }

        .modal-title {
            font-weight: bold;
            width: 100%;
            color: #0a3e6d;
            text-align: center;
        }

        .modal-body p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .modal-body strong {
            color: #0a3e6d;
        }

        #addToCalendarBtn {
            background-color: #0a3e6d;
            color: white;
            border: none;
            transition: 0.3s;
        }

        #addToCalendarBtn:hover {
            background-color: #06325a;
        }


        @media (max-width: 768px) {
            .calendar-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const eventDates = {
                "2025-08-27": {
                    title: "FORUM MABA",
                    description: "Forum Mahasiswa Baru POSITRON 2025.",
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

                for (let i = 0; i < firstDayIndex; i++) {
                    grid.appendChild(document.createElement("div"));
                }

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
                    }

                    const dayNumber = document.createElement("div");
                    dayNumber.className = "day-number";
                    dayNumber.innerText = d;
                    cell.appendChild(dayNumber);

                    let matchedEvent = null;
                    let eventType = null;

                    for (const [startKey, ev] of Object.entries(eventDates)) {
                        const start = new Date(startKey);
                        const end = new Date(ev.endDate);
                        if (dateObj.toDateString() === start.toDateString()) {
                            matchedEvent = startKey;
                            eventType = 'start';
                            break;
                        } else if (dateObj.toDateString() === end.toDateString()) {
                            matchedEvent = startKey;
                            eventType = 'end';
                            break;
                        } else if (dateObj > start && dateObj < end) {
                            matchedEvent = startKey;
                            eventType = 'middle';
                            break;
                        }
                    }

                    if (matchedEvent) {
                        const ev = eventDates[matchedEvent];
                        cell.classList.add("event");

                        if (eventType === 'start') cell.classList.add("range-start");
                        else if (eventType === 'end') cell.classList.add("range-end");
                        else if (eventType === 'middle') cell.classList.add("range-middle");

                        const eventLabel = document.createElement("div");
                        eventLabel.className = "event-title";
                        eventLabel.innerText = ev.title;
                        cell.appendChild(eventLabel);

                        cell.addEventListener("click", function() {
                            document.getElementById('modalEventTitle').innerText = ev.title;

                            const startDate = new Date(matchedEvent);
                            const endDate = new Date(ev.endDate);
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
                            document.getElementById('modalEventDesc').innerText = ev.description;

                            document.getElementById('addToCalendarBtn').onclick = () => {
                                const blob = new Blob([generateICS(ev.title, ev.description,
                                    matchedEvent, ev.endDate)], {
                                    type: 'text/calendar'
                                });
                                const link = document.createElement('a');
                                link.href = URL.createObjectURL(blob);
                                link.download = `${ev.title.replace(/\s+/g, "_")}_POSITRON.ics`;
                                link.click();
                            };

                            new bootstrap.Modal(document.getElementById('eventModal')).show();
                        });
                    }

                    grid.appendChild(cell);
                }
            }

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
        });
    </script>


    {{-- CUNTDOWN --}}
    <script>
        // Atur tanggal target FORUM MABA: 27 Agustus 2025 pukul 08:00
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
                    "<span class='text-danger'>Forum Maba Sedang Berlangsung!</span>";
            }
        }, 1000);
    </script>
@endsection
