<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\stylePasien.css') }}">
    <style>

    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="sticky-top" id="navbar-pasien"></div>

    <!-- Hiasan Sudut -->
    <img src="images/Hiasan Layar.png" class="hiasan top-left" />
    <img src="images/Hiasan Layar.png" class="hiasan top-right" />
    <img src="images/Hiasan Layar.png" class="hiasan bottom-left" />
    <img src="images/Hiasan Layar.png" class="hiasan bottom-right" />

    <div class="form-container">
        <!-- Tombol Kembali -->
        <a href="dashboardPasien.html" class="btn btn-outline-secondary back-btn">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>

        <h3 class="text-center fw-bold" style="color: #007b8a;">Form Pengaduan</h3>
        <p class="text-center">Silakan isi formulir di bawah ini untuk menyampaikan pengaduan Anda</p>

        <form>
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lengkap anda">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nomor Telepon</label>
                <input type="text" class="form-control" placeholder="Contoh: 08123456789">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nomor Rekam Medis (Opsional)</label>
                <input type="text" class="form-control" placeholder="Masukkan nomor rekam medis jika ada">
                <small class="text-muted">Nomor rekam medis membantu kami mengidentifikasi Anda dengan lebih
                    cepat</small>
            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-outline-dark">
                    <i class="bi bi-plus-circle"></i> Tambahkan Referensi Tiket Sebelumnya
                </button>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi Pengaduan</label>
                <textarea class="form-control" rows="4" placeholder="Jelaskan secara detail pengaduan anda"></textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Bukti Pendukung (Opsional)</label>
                <div class="upload-box">
                    <i class="bi bi-cloud-arrow-up" style="font-size: 2rem;"></i>
                    <p class="mt-2 mb-0">Klik untuk upload <span class="fw-light">atau drag and drop</span></p>
                    <small class="text-muted">Format: JPG, PNG, atau PDF (Maks. 5MB)</small>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-simpan">Kirim Laporan</button>
            </div>
        </form>
    </div>

    <script>
        fetch("navbarPasien.html")
            .then((response) => response.text())
            .then((data) => {
                document.getElementById("navbar-pasien").innerHTML = data;

                const currentPage = window.location.pathname.split("/").pop();
                const navLinks = document.querySelectorAll(".nav-link");
                navLinks.forEach((link) => {
                    if (link.getAttribute("href") === currentPage) {
                        link.classList.add("active");
                    }
                });
            })
            .catch((error) => console.error("Error loading the navbar:", error));
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
