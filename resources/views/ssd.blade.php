<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soalan Sering Ditanya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\stylePasien.css') }}">
    <style>

    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbarPasien')

    <!-- Hiasan Sudut -->
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-right" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-right" />

    <div class="ssd-container">
        <!-- Tombol Kembali -->
        <a href="{{ route('pasien.dashboard') }}" class="btn btn-outline-secondary back-btn">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>

        <h3 class="ssd-title text-center mt-4">Soalan Sering Ditanya</h3>
        <p class="text-center">Lihat jawaban untuk pertanyaan yang sering diajukan dan informasi bantuan lainnya.</p>

        <div class="accordion mt-5" id="ssdAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne">
                        Bagaimana cara melacak status laporan saya?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda dapat melacak status laporan dengan memasukkan nomor tiket yang Anda terima setelah
                        mengirimkan laporan di tab 'Lacak Tiket'.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo">
                        Berapa lama waktu yang dibutuhkan untuk menindaklanjuti laporan?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Proses tindak lanjut biasanya dilakukan dalam 1-3 hari kerja tergantung tingkat prioritas
                        laporan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree">
                        Apakah saya bisa mengubah laporan yang sudah dikirim?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda dapat menghubungi admin atau membuka kembali tiket untuk melakukan perubahan jika laporan
                        belum diproses.
                    </div>
                </div>
            </div>

            <!-- Tambahan SSD lainnya -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour">
                        Apakah data saya akan aman?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Ya, semua data Anda akan disimpan dengan aman dan hanya digunakan untuk keperluan penanganan
                        laporan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive">
                        Siapa yang akan menangani laporan saya?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Laporan Anda akan ditangani oleh petugas resmi yang berwenang sesuai dengan jenis laporan yang
                        dikirimkan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix">
                        Berapa lama waktu yang diberikan untuk mengkonfirmasi penyelesaian tiket?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda memiliki waktu maksimal 3 hari setelah status selesai untuk mengkonfirmasi atau memberikan
                        masukan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven">
                        Bagaimana jika saya belum puas dengan penyelesaian masalah?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda dapat membuka kembali tiket atau membuat laporan baru dengan mencantumkan detail tambahan
                        untuk ditindaklanjuti lebih lanjut.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
