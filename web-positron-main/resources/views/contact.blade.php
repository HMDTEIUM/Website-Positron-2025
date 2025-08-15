@extends('layouts.app')

@section('content')
<style>
    /* Animation Styles */
    @keyframes floatIn {
        0% {
            opacity: 0;
            transform: translateY(50px) scale(0.95);
        }
        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    @keyframes lockerOpen {
        0% {
            transform: rotateY(0deg);
        }
        100% {
            transform: rotateY(-120deg);
        }
    }

    @keyframes lockerClose {
        0% {
            transform: rotateY(-120deg);
        }
        100% {
            transform: rotateY(0deg);
        }
    }

    .contact-section {
        background: linear-gradient(-45deg, #1a1a2e, #16213e, #0f3460);
        padding: 80px 0;
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }

    .contact-title {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        color: #ffffff;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        animation: floatIn 1s ease both;
    }

    .contact-desc {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.9);
        margin: 20px auto 40px;
        max-width: 700px;
        animation: floatIn 1s ease 0.2s both;
        position: relative;
    }

    .locker-card {
        background: #0f3460;
        border-radius: 10px;
        padding: 20px;
        position: relative;
        overflow: hidden;
        transition: transform 0.5s ease;
        cursor: pointer;
    }

    .locker-card:hover {
        transform: scale(1.05);
    }

    .locker-door {
        width: 100%;
        height: 200px;
        background: #16213e;
        border-radius: 10px;
        position: relative;
        transform-origin: left;
        transition: transform 0.5s ease;
    }

    .locker-card.open .locker-door {
        animation: lockerOpen 0.5s forwards;
    }

    .locker-card.closed .locker-door {
        animation: lockerClose 0.5s forwards;
    }

    .locker-content {
        display: none;
        padding: 10px;
        color: white;
    }

    .locker-card.open .locker-content {
        display: block;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        color: white;
        padding: 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .btn-primary {
        background: linear-gradient(135deg, #25d366, #128c7e);
        border: none;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.4s ease;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
    }
</style>

<section class="contact-section">
    <div class="container">
        <h2 class="text-center contact-title mb-3">Kontak Mentor POSITRON 2025</h2>
        <p class="fw-semibold text-center contact-desc mb-5">
            Silakan hubungi CP Prodi atau Kakak Mentor kelompokmu untuk bergabung ke grup POSITRON.
        </p>

        <!-- CP Prodi Cards -->
        <div class="mb-5">
            <h4 class="fw-semibold mb-4 text-white text-center text-uppercase letter-spacing-2">Contact Person Program Studi</h4>
            <div class="row g-4">
                @foreach ($cpProdi as $index => $cp)
                    <div class="col-sm-6 col-md-4 col-lg-3" style="animation-delay: {{ $index * 0.1 }}s">
                        <div class="locker-card closed text-center h-100" onclick="toggleLocker(this)">
                            <div class="locker-door"></div>
                            <div class="locker-content">
                                <h5 class="mb-2">{{ $cp['nama'] }}</h5>
                                <p class="mb-2 text-sm opacity-80">{{ $cp['prodi'] }}</p>
                                <a href="https://wa.me/{{ $cp['wa'] }}" target="_blank" class="btn btn-sm btn-outline-light rounded-pill">
                                    <i class="bi bi-whatsapp me-1"></i>WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Feedback Form -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="feedback-container mt-5">
                    <h4 class="fw-semibold mb-4 text-center">Feedback Form</h4>
                    <form id="feedbackForm" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" required>
                            <div class="invalid-feedback">Harap isi nama Anda</div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                            <div class="invalid-feedback">Harap isi pesan Anda</div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5 py-2">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleLocker(locker) {
        locker.classList.toggle('open');
        locker.classList.toggle('closed');
    }

    // Form validation
    const form = document.getElementById('feedbackForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!form.checkValidity()) {
            e.stopPropagation();
            form.classList.add('was-validated');
            return;
        }

        // Simulate form submission
        alert('Pesan Anda berhasil dikirim!');
        form.reset();
        form.classList.remove('was-validated');
    });
</script>
@endsection
