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

<<<<<<< HEAD
=======
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

>>>>>>> 5ad7fce (Commit)
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

<<<<<<< HEAD
    .contact-section {
        background: linear-gradient(-45deg, #1a1a2e, #16213e, #0f3460);
=======
    @keyframes morphGradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .contact-section {
        background: linear-gradient(-45deg, #1a1a2e, #16213e, #0f3460);
        background-size: 400% 400%;
        animation: morphGradient 15s ease infinite;
>>>>>>> 5ad7fce (Commit)
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
<<<<<<< HEAD
        padding: 20px;
=======
>>>>>>> 5ad7fce (Commit)
        position: relative;
        overflow: hidden;
        transition: transform 0.5s ease;
        cursor: pointer;
<<<<<<< HEAD
=======
        border: 1px solid rgba(255, 255, 255, 0.1);
        height: 240px;
>>>>>>> 5ad7fce (Commit)
    }

    .locker-card:hover {
        transform: scale(1.05);
    }

    .locker-door {
        width: 100%;
<<<<<<< HEAD
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
=======
        height: 100%;
        background: linear-gradient(135deg, #16213e, #1a1a2e);
        border-radius: 10px;
        position: absolute;
        top: 0;
        left: 0;
        transform-origin: left;
        transition: transform 0.5s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 1.1rem;
        z-index: 2;
    }

    .locker-door::before {
        content: "🔒 Tap to Open";
        position: absolute;
    }

    .locker-card.open .locker-door {
        transform: rotateY(-120deg);
    }

    .locker-card.closed .locker-door {
        transform: rotateY(0deg);
    }

    .locker-card.open .locker-door::before {
        content: "";
    }

    .locker-content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px;
        color: white;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 1;
    }

    .locker-content h5, .locker-content h6 {
        margin-bottom: 8px;
    }

    .locker-content p, .locker-content small {
        margin-bottom: 12px;
    }

    .feedback-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: white;
>>>>>>> 5ad7fce (Commit)
    }

    .form-group {
        margin-bottom: 20px;
    }

<<<<<<< HEAD
=======
    .form-label {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
    }

>>>>>>> 5ad7fce (Commit)
    .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        color: white;
        padding: 15px;
        transition: all 0.3s ease;
<<<<<<< HEAD
=======
        width: 100%;
>>>>>>> 5ad7fce (Commit)
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
<<<<<<< HEAD
=======
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.1);
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.6);
>>>>>>> 5ad7fce (Commit)
    }

    .btn-primary {
        background: linear-gradient(135deg, #25d366, #128c7e);
        border: none;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.4s ease;
<<<<<<< HEAD
=======
        color: white;
        text-decoration: none;
        display: inline-block;
>>>>>>> 5ad7fce (Commit)
    }

    .btn-primary:hover {
        transform: translateY(-3px);
<<<<<<< HEAD
=======
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.3);
        color: white;
    }

    .btn-primary:disabled {
        opacity: 0.7;
        transform: none;
        cursor: not-allowed;
    }

    .btn-outline-light {
        border: 1px solid rgba(255, 255, 255, 0.5);
        color: white;
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
        color: white;
    }

    .invalid-feedback {
        color: #ff6b6b;
        font-size: 0.875rem;
        margin-top: 5px;
    }

    .was-validated .form-control:invalid {
        border-color: #ff6b6b;
    }

    .was-validated .form-control:valid {
        border-color: #51cf66;
    }

    .letter-spacing-2 {
        letter-spacing: 2px;
    }

    .text-sm {
        font-size: 0.875rem;
    }

    .opacity-80 {
        opacity: 0.8;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 10px;
        border: none;
    }

    .alert-success {
        background: rgba(81, 207, 102, 0.2);
        color: #51cf66;
        border: 1px solid rgba(81, 207, 102, 0.3);
    }

    .alert-danger {
        background: rgba(255, 107, 107, 0.2);
        color: #ff6b6b;
        border: 1px solid rgba(255, 107, 107, 0.3);
>>>>>>> 5ad7fce (Commit)
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
<<<<<<< HEAD
                    <div class="col-sm-6 col-md-4 col-lg-3" style="animation-delay: {{ $index * 0.1 }}s">
                        <div class="locker-card closed text-center h-100" onclick="toggleLocker(this)">
                            <div class="locker-door"></div>
                            <div class="locker-content">
                                <h5 class="mb-2">{{ $cp['nama'] }}</h5>
                                <p class="mb-2 text-sm opacity-80">{{ $cp['prodi'] }}</p>
=======
                    <div class="col-sm-6 col-md-4 col-lg-3" style="animation: floatIn 1s ease {{ $index * 0.1 }}s both;">
                        <div class="locker-card closed text-center" onclick="toggleLocker(this)">
                            <div class="locker-door"></div>
                            <div class="locker-content">
                                <h5 class="mb-2">{{ $cp['nama'] }}</h5>
                                <p class="mb-3 text-sm opacity-80">{{ $cp['prodi'] }}</p>
>>>>>>> 5ad7fce (Commit)
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
<<<<<<< HEAD
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
=======
                <div class="feedback-container mt-5" style="animation: floatIn 1s ease 0.5s both;">
                    <h4 class="fw-semibold mb-4 text-center text-white">Feedback Form</h4>
                    
                    <!-- Alert Messages -->
                    <div id="alertMessage" style="display: none;"></div>
                    
                    <form id="feedbackForm" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap *</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap Anda" required>
                            <div class="invalid-feedback">Harap isi nama Anda</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email (Opsional)</label>
                            <input type="email" class="form-control" id="email" placeholder="nama@email.com">
                            <div class="invalid-feedback">Harap masukkan email yang valid</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Pesan Anda *</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan, saran, atau keluhan Anda di sini..." required></textarea>
                            <div class="invalid-feedback">Harap isi pesan Anda</div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5 py-3" id="submitBtn">
                                <i class="bi bi-send me-2"></i>Kirim Pesan
>>>>>>> 5ad7fce (Commit)
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
<<<<<<< HEAD
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
=======
function toggleLocker(locker) {
    locker.classList.toggle('open');
    locker.classList.toggle('closed');
}

// Function to show alert messages
function showAlert(message, type = 'success') {
    const alertDiv = document.getElementById('alertMessage');
    alertDiv.className = `alert alert-${type}`;
    alertDiv.innerHTML = `
        <i class="bi bi-${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2"></i>
        ${message}
    `;
    alertDiv.style.display = 'block';
    
    // Auto hide after 5 seconds
    setTimeout(() => {
        alertDiv.style.display = 'none';
    }, 5000);
}

// Form submission with AJAX
const form = document.getElementById('feedbackForm');
form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    if (!form.checkValidity()) {
        e.stopPropagation();
        form.classList.add('was-validated');
        return;
    }

    // Get form data
    const formData = new FormData();
    formData.append('name', document.getElementById('name').value);
    formData.append('email', document.getElementById('email').value);
    formData.append('message', document.getElementById('message').value);
    formData.append('_token', document.querySelector('input[name="_token"]').value);

    // Show loading state
    const submitBtn = document.getElementById('submitBtn');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="spinner-border spinner-border-sm me-2" role="status"></i>Mengirim...';
    submitBtn.disabled = true;

    // Send AJAX request
    fetch('/feedback', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showAlert('Pesan Anda berhasil dikirim! Terima kasih atas feedback Anda.', 'success');
            form.reset();
            form.classList.remove('was-validated');
        } else {
            showAlert('Terjadi kesalahan. Silakan coba lagi.', 'danger');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showAlert('Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.', 'danger');
    })
    .finally(() => {
        // Reset button state
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Add smooth scrolling to form when clicked from navigation
document.addEventListener('DOMContentLoaded', function() {
    // Add any additional initialization here
    console.log('Contact page loaded successfully');
});
</script>
@endsection
>>>>>>> 5ad7fce (Commit)
