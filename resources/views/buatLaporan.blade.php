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
    @include('navbarPasien')

    <!-- Hiasan Sudut -->
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-right" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-right" />

    <div class="form-container">
        <a href="{{ route('pasien.dashboard') }}" class="btn btn-outline-secondary back-btn"> <i class="bi bi-arrow-left"></i> Kembali
        </a>

        <h3 class="text-center fw-bold" style="color: #267B84;">Form Pengaduan</h3>
        <p class="text-center">Silakan isi formulir di bawah ini untuk menyampaikan pengaduan Anda</p>

        <form id="formPengaduan">
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lengkap anda" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nomor Telepon</label>
                <input type="tel" class="form-control" placeholder="Contoh: 08123456789" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nomor Rekam Medis (Opsional)</label>
                <input type="text" class="form-control" placeholder="Masukkan nomor rekam medis jika ada">
                <small class="text-muted">Nomor rekam medis membantu kami mengidentifikasi Anda dengan lebih
                    cepat</small>
            </div>

            <div class="mb-3">
                <input type="file" id="refTicketFile" class="d-none" accept=".jpg, .jpeg, .png, .pdf">
                <label for="refTicketFile" class="btn btn-upload w-30" style="cursor: pointer;">
                    <i class="bi bi-plus-circle"></i> Tambahkan Referensi Tiket Sebelumnya
                </label>
                <div id="refTicketFileInfo" class="mt-2 text-muted small"></div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi Pengaduan</label>
                <textarea class="form-control" rows="4" placeholder="Jelaskan secara detail pengaduan anda"
                    required></textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Bukti Pendukung (Opsional)</label>
                <input type="file" id="buktiPendukungFile" class="d-none" accept=".jpg, .jpeg, .png, .pdf">
                <label for="buktiPendukungFile" class="upload-box d-block" style="cursor: pointer;">
                    <div class="upload-box-content"> <i class="bi bi-cloud-arrow-up" style="font-size: 2rem;"></i>
                        <p class="mt-2 mb-0 upload-box-text">Klik untuk upload <span class="fw-light">atau drag and
                                drop</span></p>
                        <small class="text-muted upload-box-hint">Format: JPG, PNG, atau PDF (Maks. 5MB)</small>
                    </div>
                </label>
                <div id="buktiPendukungFileInfo" class="mt-2">
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-simpan">Kirim Laporan</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Fungsi validasi file universal
            function validateFile(file, infoElementId, inputElement) {
                const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
                const prettyAllowedTypes = 'JPG, PNG, atau PDF';
                const maxSize = 5 * 1024 * 1024; // 5MB
                const infoEl = document.getElementById(infoElementId);

                if (!allowedTypes.includes(file.type)) {
                    infoEl.innerHTML = `<p class="text-danger">Format file tidak diizinkan. Harap unggah ${prettyAllowedTypes}.</p>`;
                    if (inputElement) inputElement.value = '';
                    return false;
                }
                if (file.size > maxSize) {
                    infoEl.innerHTML = `<p class="text-danger">Ukuran file terlalu besar. Maksimal 5MB.</p>`;
                    if (inputElement) inputElement.value = '';
                    return false;
                }
                return true;
            }

            // --- 1. Fungsionalitas untuk "Tambahkan Referensi Tiket Sebelumnya" ---
            const refTicketFileInput = document.getElementById('refTicketFile');
            const refTicketFileInfo = document.getElementById('refTicketFileInfo');

            if (refTicketFileInput) {
                refTicketFileInput.addEventListener('change', function (event) {
                    const file = event.target.files[0];
                    refTicketFileInfo.innerHTML = '';
                    if (file) {
                        if (validateFile(file, 'refTicketFileInfo', refTicketFileInput)) {
                            refTicketFileInfo.innerHTML = `File terpilih: <strong>${file.name}</strong> (${(file.size / 1024).toFixed(1)} KB)`;
                        }
                    }
                });
            }

            // --- 2. Fungsionalitas untuk "Bukti Pendukung" (Klik dan Drag & Drop) ---
            const buktiPendukungFileInput = document.getElementById('buktiPendukungFile');
            const buktiPendukungDropArea = document.querySelector('label[for="buktiPendukungFile"]');
            const buktiPendukungFileInfo = document.getElementById('buktiPendukungFileInfo');
            const uploadBoxContent = buktiPendukungDropArea ? buktiPendukungDropArea.querySelector('.upload-box-content') : null;
            const originalUploadBoxHTML = uploadBoxContent ? uploadBoxContent.innerHTML : '';

            function displayBuktiFileInfo(file) {
                buktiPendukungFileInfo.innerHTML = '';

                const fileInfoText = document.createElement('p');
                fileInfoText.innerHTML = `File terpilih: <strong>${file.name}</strong> (${(file.size / (1024 * 1024)).toFixed(2)} MB)`;
                buktiPendukungFileInfo.appendChild(fileInfoText);

                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imgPreview = document.createElement('img');
                        imgPreview.src = e.target.result;
                        imgPreview.alt = `Preview ${file.name}`;
                        imgPreview.classList.add('img-thumbnail');
                        buktiPendukungFileInfo.appendChild(imgPreview);
                    }
                    reader.readAsDataURL(file);
                }
                // Update teks di dalam drop area untuk menunjukkan file telah dipilih
                if (uploadBoxContent) {
                    uploadBoxContent.innerHTML = `<i class="bi bi-file-earmark-check" style="font-size: 2rem; color: green;"></i>
                                          <p class="mt-2 mb-0">File: <strong>${file.name}</strong></p>
                                          <small class="text-muted">Klik atau drag file lain untuk mengganti.</small>`;
                }
            }

            function resetBuktiUploadUI() {
                buktiPendukungFileInput.value = '';
                buktiPendukungFileInfo.innerHTML = '';
                if (uploadBoxContent) {
                    uploadBoxContent.innerHTML = originalUploadBoxHTML;
                }
            }

            if (buktiPendukungFileInput && buktiPendukungDropArea) {
                // A. Handle pemilihan file dengan klik
                buktiPendukungFileInput.addEventListener('change', function (event) {
                    const file = event.target.files[0];
                    buktiPendukungFileInfo.innerHTML = '';
                    if (file) {
                        if (validateFile(file, 'buktiPendukungFileInfo', buktiPendukungFileInput)) {
                            displayBuktiFileInfo(file);
                        } else {
                            resetBuktiUploadUI();
                        }
                    }
                });

                // B. Handle Drag and Drop
                function preventDefaults(e) {
                    e.preventDefault();
                    e.stopPropagation();
                }

                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    buktiPendukungDropArea.addEventListener(eventName, preventDefaults, false);
                    document.body.addEventListener(eventName, preventDefaults, false);
                });

                ['dragenter', 'dragover'].forEach(eventName => {
                    buktiPendukungDropArea.addEventListener(eventName, () => {
                        buktiPendukungDropArea.classList.add('highlight');
                    }, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    buktiPendukungDropArea.addEventListener(eventName, () => {
                        buktiPendukungDropArea.classList.remove('highlight');
                    }, false);
                });

                buktiPendukungDropArea.addEventListener('drop', function (event) {
                    const dt = event.dataTransfer;
                    const files = dt.files;

                    if (files.length > 0) {
                        const file = files[0];
                        buktiPendukungFileInput.files = files;
                        buktiPendukungFileInfo.innerHTML = '';

                        if (validateFile(file, 'buktiPendukungFileInfo', buktiPendukungFileInput)) {
                            displayBuktiFileInfo(file);
                        } else {
                            resetBuktiUploadUI();
                        }
                    }
                }, false);
            }

            // Handle form submission
            const formPengaduan = document.getElementById('formPengaduan');
            if (formPengaduan) {
                formPengaduan.addEventListener('submit', function (event) {
                    event.preventDefault();
                    const formData = new FormData(formPengaduan);
                    if (refTicketFileInput.files.length > 0) {
                        formData.append('referensi_tiket', refTicketFileInput.files[0]);
                    }
                    if (buktiPendukungFileInput.files.length > 0) {
                        formData.append('bukti_pendukung', buktiPendukungFileInput.files[0]);
                    }

                    // Untuk melihat isi FormData
                    for (let [key, value] of formData.entries()) {
                        console.log(key, value);
                    }

                    alert('Laporan akan dikirim (simulasi). Cek console untuk data FormData.');
                });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
