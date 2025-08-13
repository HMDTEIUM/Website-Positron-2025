@extends('layouts.app')

@section('content')
    <section class="contact-section py-5 bg-light min-vh-100">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">Kontak Mentor POSITRON 2025</h2>
            <p class="fw-semibold text-center text-white mb-5 animate__animated animate__fadeIn animate__delay-1s">
                Silakan hubungi CP Prodi atau Kakak Mentor kelompokmu untuk bergabung ke grup POSITRON.
            </p>

            <!-- CP Prodi -->
            <div class="mb-5">
                <h4 class="fw-semibold mb-3 border-bottom pb-2">📌 Contact Person per Program Studi</h4>
                <div class="row g-4">
                    @foreach ($cpProdi as $cp)
                        <div class="col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp">
                            <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border hover-shadow transition">
                                <h5 class="fw-bold text-dark mb-1">{{ $cp['nama'] }}</h5>
                                <p class="text-muted mb-1">{{ $cp['prodi'] }}</p>
                                <a href="https://wa.me/{{ $cp['wa'] }}"
                                    class="text-success fw-semibold text-decoration-none" target="_blank">
                                    <i class="bi bi-whatsapp me-1"></i>{{ $cp['wa'] }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Feedback Form -->
            <div class="mb-5">
                <h4 class="fw-semibold mb-3 border-bottom pb-2">✉️ Kirim Umpan Balik</h4>
                <form id="feedbackForm">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea id="message" class="form-control" rows="4" placeholder="Tulis pesan Anda" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </section>
@endsection

        <style>
            .contact-section {
            background: linear-gradient(135deg, #0a3e6d, #1e5a8b);
            min-height: 100vh;
            padding: 80px 0;
            margin-top: 50px; /* Adjust to overlap with navbar */
            overflow-x: hidden;
            }

        </style>
        @section('scripts')
        <script>
            $(document).ready(function () {
                var table = $('#mentorTable').DataTable({
                    paging: false,
                    info: false,
                    searching: true
                });

                $('#searchMentor').on('keyup', function () {
                    table.search(this.value).draw();
                });
            });
            $('#feedbackForm').on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    url: '/feedback',
                    method: 'POST',
                    data: {
                        name: $('#name').val(),
                        message: $('#message').val(),
                        _token: '{{ csrf_token() }}'
                    },
                    success: function () {
                        alert('Feedback submitted!');
                        $('#feedbackForm').trigger('reset');
                    }
                });
            });
        </script>
        @endsection
