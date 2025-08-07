@extends('layouts.app')

@section('content')
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
@endsection