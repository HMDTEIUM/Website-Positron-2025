 @extends('layouts.app')
 @section('content')
 
 <!-- Countdown Section -->
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

    <style>
        .calendar-header {
            text-align: center;
            margin-bottom: 3rem;
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

        .legend-items {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
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
        
        /* Calendar Section */
        .calendar-section {
            background: linear-gradient(rgba(10, 62, 109, 0.9), rgba(10, 62, 109, 0.9)), 
                        url("{{ asset('images/bg-1.png') }}") no-repeat center center;
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

        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
            right: 55px;
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
