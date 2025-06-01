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
        <a href="{{ route('pasien.dashboard') }}" class="btn btn-outline-secondary back-btn"> <i
                class="bi bi-arrow-left"></i> Kembali
        </a>

        <h3 class="text-center fw-bold" style="color: #267B84;">Form Pengaduan</h3>
        <p class="text-center">Silakan isi formulir di bawah ini untuk menyampaikan pengaduan Anda</p>

        <form id="formPengaduan">
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lengkap anda" required>
            </div>

            <div class="mb-3">
                <label for="nomorTelepon" class="form-label fw-bold">Nomor Telepon</label>
                <input type="tel" class="form-control" id="nomorTelepon" name="nomor_telepon"
                    placeholder="Contoh: 08123456789" required maxlength="15" pattern="^08\d{0,13}$" inputmode="numeric"
                    aria-describedby="nomorTeleponHelp nomorTeleponError">
                <div id="nomorTeleponHelp" class="form-text">Nomor telepon harus diawali dengan "08" dan terdiri dari
                    10-15 digit angka.</div>
                <div id="nomorTeleponError" class="invalid-feedback"></div>
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
                <input type="file" id="buktiPendukungFile" class="d-none" accept=".jpg, .jpeg, .png, .pdf" multiple>
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
            // --- Fungsi validasi file universal ---
            function validateFile(file) {
                const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
                const maxSize = 5 * 1024 * 1024; // 5MB
                if (!allowedTypes.includes(file.type)) {
                    return { valid: false, message: `Tipe file tidak diizinkan untuk ${file.name}. Harap unggah JPG, PNG, atau PDF.` };
                }
                if (file.size > maxSize) {
                    return { valid: false, message: `Ukuran file ${file.name} terlalu besar. Maksimal 5MB.` };
                }
                return { valid: true, message: '' };
            }

            // --- 1. Fungsionalitas untuk "Tambahkan Referensi Tiket Sebelumnya" ---
            const refTicketFileInput = document.getElementById('refTicketFile');
            const refTicketFileInfo = document.getElementById('refTicketFileInfo');

            if (!refTicketFileInput) {
                console.error("DEBUG: Elemen input 'refTicketFile' TIDAK ditemukan!");
            }
            if (!refTicketFileInfo) {
                console.error("DEBUG: Elemen div 'refTicketFileInfo' TIDAK ditemukan!");
            }

            if (refTicketFileInput && refTicketFileInfo) {
                console.log("DEBUG: Listener untuk 'refTicketFile' sedang ditambahkan.");
                refTicketFileInput.addEventListener('change', function (event) {
                    console.log("DEBUG: Event 'change' pada 'refTicketFile' terpicu.");

                    const file = event.target.files[0];
                    refTicketFileInfo.innerHTML = '';

                    if (file) {
                        console.log("DEBUG: File dipilih untuk referensi:", file.name, file.size, file.type);
                        const validationResult = validateFile(file);
                        console.log("DEBUG: Hasil validasi referensi:", validationResult);

                        if (validationResult.valid) {
                            refTicketFileInfo.innerHTML = `File terpilih: <strong>${file.name}</strong> (${(file.size / 1024).toFixed(1)} KB)`;
                            console.log("DEBUG: Info file referensi ditampilkan.");
                        } else {
                            refTicketFileInfo.innerHTML = `<p class="text-danger">${validationResult.message}</p>`;
                            refTicketFileInput.value = '';
                            console.warn("DEBUG: File referensi tidak valid:", validationResult.message);
                        }
                    } else {
                        console.log("DEBUG: Tidak ada file referensi yang dipilih (atau dibatalkan).");
                    }
                });
            }

            // --- Fungsionalitas untuk "Bukti Pendukung" ---
            const buktiPendukungFileInput = document.getElementById('buktiPendukungFile');
            const buktiPendukungDropAreaLabel = document.querySelector('label[for="buktiPendukungFile"]');
            const uploadBoxContent = buktiPendukungDropAreaLabel ? buktiPendukungDropAreaLabel.querySelector('.upload-box-content') : null;
            const buktiErrorContainer = document.getElementById('buktiPendukungFileErrors');

            let validBuktiPendukungFiles = [];

            const originalUploadBoxHTML = `
        <div class="initial-prompt text-center">
            <i class="bi bi-cloud-arrow-up" style="font-size: 2.5rem;"></i>
            <p class="mt-2 mb-0 upload-box-text">Klik untuk upload <span class="fw-light">atau drag and drop</span></p>
            <small class="text-muted upload-box-hint">Format: JPG, PNG, atau PDF (Maks. 5MB). Boleh lebih dari satu file.</small>
        </div>`;

            function renderSelectedFilesUI() {
                if (!uploadBoxContent) return;
                uploadBoxContent.innerHTML = '';

                if (validBuktiPendukungFiles.length === 0) {
                    uploadBoxContent.innerHTML = originalUploadBoxHTML;
                    buktiPendukungDropAreaLabel.classList.remove('has-files');
                    uploadBoxContent.style.justifyContent = 'center';
                    uploadBoxContent.style.alignItems = 'center';
                } else {
                    buktiPendukungDropAreaLabel.classList.add('has-files');
                    uploadBoxContent.style.justifyContent = 'flex-start';
                    uploadBoxContent.style.alignItems = 'stretch';

                    const filesGridContainer = document.createElement('div');
                    filesGridContainer.id = 'fileGridContainer';
                    filesGridContainer.classList.add('d-flex', 'flex-wrap', 'justify-content-start', 'align-items-stretch', 'gap-2');

                    validBuktiPendukungFiles.forEach((file, index) => {
                        const fileBox = document.createElement('div');
                        fileBox.classList.add('file-item-box');

                        const previewSection = document.createElement('div');
                        previewSection.classList.add('file-preview-section');
                        if (file.type.startsWith('image/')) {
                            const imgPreview = document.createElement('img');
                            if (!file.previewSrc) {
                                file.previewSrc = URL.createObjectURL(file);
                            }
                            imgPreview.src = file.previewSrc;
                            imgPreview.alt = file.name;
                            previewSection.appendChild(imgPreview);
                        } else {
                            const fileIconContainer = document.createElement('div');
                            fileIconContainer.classList.add('file-icon', 'text-muted');
                            let iconClass = 'bi-file-earmark-text';
                            if (file.type === 'application/pdf') iconClass = 'bi-file-earmark-pdf text-danger';
                            else if (file.type.startsWith('image/')) iconClass = 'bi-file-earmark-image text-info';
                            fileIconContainer.innerHTML = `<i class="bi ${iconClass}"></i>`;
                            previewSection.appendChild(fileIconContainer);
                        }
                        fileBox.appendChild(previewSection);

                        // File Name & Size Section
                        const nameAndSizeSection = document.createElement('div');
                        nameAndSizeSection.classList.add('file-details-section');
                        const fileName = document.createElement('div');
                        fileName.classList.add('file-name');
                        fileName.textContent = file.name;
                        fileName.title = file.name;
                        nameAndSizeSection.appendChild(fileName);
                        const fileSize = document.createElement('div');
                        fileSize.classList.add('file-size', 'text-muted');
                        fileSize.textContent = `(${(file.size / (1024 * 1024)).toFixed(2)} MB)`;
                        nameAndSizeSection.appendChild(fileSize);
                        fileBox.appendChild(nameAndSizeSection);

                        // Remove Button Section
                        const removeButtonSection = document.createElement('div');
                        removeButtonSection.classList.add('file-remove-section');
                        const removeBtn = document.createElement('button');
                        removeBtn.type = 'button';
                        removeBtn.classList.add('btn', 'btn-danger', 'btn-remove-file');
                        removeBtn.innerHTML = '<i class="bi bi-trash text-white"></i> Hapus';
                        removeBtn.setAttribute('aria-label', `Hapus file ${file.name}`);
                        removeBtn.onclick = function (event) {
                            event.stopPropagation();
                            event.preventDefault();
                            removeFile(index);
                        };
                        removeButtonSection.appendChild(removeBtn);
                        fileBox.appendChild(removeButtonSection);

                        filesGridContainer.appendChild(fileBox);
                    });
                    uploadBoxContent.appendChild(filesGridContainer);

                    // Prompt untuk menambah file lagi
                    const addMorePrompt = document.createElement('div');
                    addMorePrompt.classList.add('add-more-prompt', 'text-center', 'mt-auto', 'pt-3');
                    addMorePrompt.innerHTML = `
                <div class="initial-prompt">
                    <i class="bi bi-plus-circle-dotted"></i>
                    <p class="mt-1 mb-0 small">Klik area ini atau drag & drop untuk menambah file lain</p>
                </div>`;
                    uploadBoxContent.appendChild(addMorePrompt);
                }
                if (buktiPendukungFileInput) buktiPendukungFileInput.value = '';
            }

            function removeFile(indexToRemove) {
                if (indexToRemove < 0 || indexToRemove >= validBuktiPendukungFiles.length) return;
                const fileToRemove = validBuktiPendukungFiles[indexToRemove];
                if (fileToRemove.previewSrc) {
                    URL.revokeObjectURL(fileToRemove.previewSrc);
                }
                validBuktiPendukungFiles.splice(indexToRemove, 1);
                renderSelectedFilesUI();
                if (buktiErrorContainer) buktiErrorContainer.innerHTML = '';
            }

            function processNewFiles(newlySelectedFiles) {
                if (buktiErrorContainer) buktiErrorContainer.innerHTML = '';
                let filesActuallyAdded = 0;

                for (const file of newlySelectedFiles) {
                    const validationResult = validateFile(file);
                    if (validationResult.valid) {
                        const isDuplicate = validBuktiPendukungFiles.some(
                            existingFile => existingFile.name === file.name &&
                                existingFile.size === file.size &&
                                existingFile.lastModified === file.lastModified
                        );
                        if (!isDuplicate) {
                            validBuktiPendukungFiles.push(file);
                            filesActuallyAdded++;
                        } else {
                            if (buktiErrorContainer) buktiErrorContainer.innerHTML += `<p class="mb-1">File ${file.name} sudah ada dalam daftar.</p>`;
                        }
                    } else {
                        if (buktiErrorContainer) buktiErrorContainer.innerHTML += `<p class="mb-1">${validationResult.message}</p>`;
                    }
                }

                if (filesActuallyAdded > 0) {
                    renderSelectedFilesUI();
                } else if (newlySelectedFiles.length > 0 && validBuktiPendukungFiles.length === 0) {
                    renderSelectedFilesUI();
                }
                if (buktiPendukungFileInput) buktiPendukungFileInput.value = '';
            }

            if (buktiPendukungFileInput && buktiPendukungDropAreaLabel && uploadBoxContent) {
                renderSelectedFilesUI();

                buktiPendukungFileInput.addEventListener('change', function (event) {
                    processNewFiles(event.target.files);
                });

                function preventDefaults(e) { e.preventDefault(); e.stopPropagation(); }
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    buktiPendukungDropAreaLabel.addEventListener(eventName, preventDefaults, false);
                    document.body.addEventListener(eventName, preventDefaults, false);
                });
                ['dragenter', 'dragover'].forEach(eventName => {
                    buktiPendukungDropAreaLabel.addEventListener(eventName, () => buktiPendukungDropAreaLabel.classList.add('highlight'), false);
                });
                ['dragleave', 'drop'].forEach(eventName => {
                    buktiPendukungDropAreaLabel.addEventListener(eventName, () => buktiPendukungDropAreaLabel.classList.remove('highlight'), false);
                });
                buktiPendukungDropAreaLabel.addEventListener('drop', function (event) {
                    const dt = event.dataTransfer;
                    processNewFiles(dt.files);
                }, false);
            }

            // Handle form submission
            const formPengaduan = document.getElementById('formPengaduan');
            if (formPengaduan) {
                formPengaduan.addEventListener('submit', function (event) {
                    event.preventDefault();
                    const formData = new FormData(formPengaduan);

                    formData.delete(buktiPendukungFileInput.name);

                    if (refTicketFileInput.files.length > 0) {
                        const refFile = refTicketFileInput.files[0];
                        const refValidation = validateFile(refFile);
                        if (refValidation.valid) {
                            formData.append('referensi_tiket', refFile);
                        } else {
                            alert(`File referensi tiket tidak valid: ${refValidation.message}`);
                        }
                    }
                    validBuktiPendukungFiles.forEach((file, index) => {
                        formData.append('bukti_pendukung[]', file, file.name);
                    });

                    console.log('Data yang akan dikirim:');
                    for (let [key, value] of formData.entries()) {
                        if (value instanceof File) {
                            console.log(key, value.name, value.type, value.size);
                        } else {
                            console.log(key, value);
                        }
                    }
                    alert('Laporan akan dikirim (simulasi). Cek console untuk data FormData.');
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const phoneInput = document.getElementById('nomorTelepon');
            const phoneErrorDiv = document.getElementById('nomorTeleponError');

            if (phoneInput) {
                // 1. Memastikan hanya angka yang bisa diketik & panjang maksimal
                phoneInput.addEventListener('input', function (e) {
                    let value = e.target.value;
                    value = value.replace(/\D/g, '');
                    if (value.length > 15) {
                        value = value.slice(0, 15);
                    }
                    e.target.value = value;

                    phoneInput.setCustomValidity('');
                    phoneInput.classList.remove('is-invalid');
                    if (phoneErrorDiv) phoneErrorDiv.textContent = '';
                });

                // 2. Validasi saat pengguna meninggalkan field
                phoneInput.addEventListener('blur', function () {
                    validatePhoneNumberField(phoneInput, phoneErrorDiv);
                });

                // 3. Validasi saat form di-submit
                const form = phoneInput.closest('form');
                if (form) {
                    form.addEventListener('submit', function (event) {
                        if (!validatePhoneNumberField(phoneInput, phoneErrorDiv)) {
                            event.preventDefault();
                            setTimeout(() => phoneInput.focus(), 0);
                        }
                    });
                }
            }
        });

        function validatePhoneNumberField(inputElement, errorDisplayElement) {
            // Bersihkan status validasi dan pesan error sebelumnya
            inputElement.classList.remove('is-invalid', 'is-valid');
            if (errorDisplayElement) errorDisplayElement.textContent = '';
            inputElement.setCustomValidity('');

            const value = inputElement.value.trim();

            // Pola: diawali "08", diikuti 8 sampai 13 digit angka (total 10-15 digit)
            const pattern = /^08\d{8,13}$/;

            // Jika field required dan kosong
            if (inputElement.required && value === '') {
                if (!inputElement.checkValidity()) {
                    inputElement.classList.add('is-invalid');
                    if (errorDisplayElement && inputElement.validationMessage) {
                        errorDisplayElement.textContent = inputElement.validationMessage;
                    }
                    return false;
                }
                return true;
            }

            // Jika field tidak required dan kosong, anggap valid
            if (!inputElement.required && value === '') {
                return true;
            }

            // Validasi dengan pola regex
            if (!pattern.test(value)) {
                let customMessage = 'Format nomor telepon tidak valid.';
                if (value.length < 2 || !value.startsWith('08')) {
                    customMessage = 'Nomor telepon harus diawali dengan "08".';
                } else if (value.length < 9) {
                    customMessage = 'Nomor telepon terlalu pendek (minimal 9 digit).';
                } else if (value.length > 15) {
                    customMessage = 'Nomor telepon terlalu panjang (maksimal 15 digit).';
                } else if (/\D/.test(value)) {
                    customMessage = 'Nomor telepon hanya boleh berisi angka.';
                }

                inputElement.setCustomValidity(customMessage);
                inputElement.classList.add('is-invalid');
                if (errorDisplayElement) errorDisplayElement.textContent = customMessage;
                return false;
            }

            // Jika semua validasi lolos
            inputElement.classList.add('is-valid');
            return true;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
