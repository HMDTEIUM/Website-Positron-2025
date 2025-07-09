@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light min-vh-100">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">Kontak Mentor POSITRON 2025</h2>
            <p class="text-center text-muted mb-5 animate__animated animate__fadeIn animate__delay-1s">
                Silakan hubungi CP Prodi atau Kakak Mentor kelompokmu untuk bergabung ke grup POSITRON.
            </p>

            <!-- CP Prodi -->
            <div class="mb-5">
                <h4 class="fw-semibold mb-3 text-primary border-bottom pb-2">📌 Contact Person per Program Studi</h4>
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

            <!-- Kakak Mentor Tabel -->
            <div class="mb-5">
                <h4 class="fw-semibold mb-3 text-primary border-bottom pb-2">👥 Daftar Kakak Mentor per Kelompok</h4>

                <!-- Filter -->
                <div class="row mb-3">
                    <div class="col-md-6 mx-auto">
                        <input type="text" id="searchMentor" class="form-control form-control-lg"
                            placeholder="Cari berdasarkan nama atau kelompok...">
                    </div>
                </div>

                <div class="table-responsive animate__animated animate__fadeIn animate__delay-1s">
                    <table id="mentorTable"
                        class="table table-bordered table-hover bg-white shadow-sm rounded-3 text-center">
                        <thead class="table-dark text-white">
                            <tr>
                                <th>Nama</th>
                                <th>Kelompok</th>
                                <th>WhatsApp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mentors as $mentor)
                                <tr>
                                    <td class="fw-semibold">{{ $mentor['nama'] }}</td>
                                    <td>Kelompok {{ $mentor['kelompok'] }}</td>
                                    <td>
                                        <a href="https://wa.me/{{ $mentor['wa'] }}"
                                            class="text-success fw-semibold text-decoration-none" target="_blank">
                                            <i class="bi bi-whatsapp me-1"></i>{{ $mentor['wa'] }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection
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
        </script>
        @endsection
