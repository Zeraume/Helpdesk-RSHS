<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Dashboard Unit Kerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
</head>

<body>
    <!-- Navbar -->
    @include('unitKerja.navbarUnitKerja')

    <div class="container my-5 pt-2">
        <!-- Header Box -->
        <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
            <h5 class="mb-1">Dashboard Unit Kerja RSHS Bandung</h5>
            <p class="mb-0">Penanganan pengaduan dan klarifikasi unit kerja</p>
        </div>

        <!-- Filter & Action -->
        <div class="bg-white p-3 rounded-bottom shadow-sm">
            <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3 tombol-cari">
                <div class="d-flex flex-wrap gap-2 grup-tombol">
                    <select class="selectpicker" data-style="btn-reset">
                        <option>Semua Status</option>
                        <option>Open</option>
                        <option>On Progress</option>
                        <option>Close</option>
                    </select>
                    <button class="btn btn-reset"><i class="bi bi-filter"></i> Reset</button>
                </div>
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Cari Pengaduan...">
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="border-bottom">
                        <tr class="text-nowrap">
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Media</th>
                            <th>Info Direksi</th>
                            <th>Status</th>
                            <th>Grading</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>202405_0000001</strong></td>
                            <td>Pelayanan Lambat di Poli Mata</td>
                            <td>Website</td>
                            <td>Mohon ditindaklanjuti segera</td>
                            <td><span class="badge bg-warning">On Progress</span></td>
                            <td><span class="badge bg-warning text-light">Kuning</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal">
                                    <i class="bi bi-eye me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>202405_0000002</strong></td>
                            <td>Kesalahan Pemberian Obat</td>
                            <td>WhatsApp</td>
                            <td>Mohon ditindaklanjuti segera</td>
                            <td><span class="badge bg-warning text-light">On Progress</span></td>
                            <td><span class="badge bg-danger">Merah</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal">
                                    <i class="bi bi-eye me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>202405_0000003</strong></td>
                            <td>Kesalahan Tagihan Rawat Inap</td>
                            <td>Instagram</td>
                            <td>Mohon ditindaklanjuti segera</td>
                            <td><span class="badge bg-danger-subtle text-danger">Close</span></td>
                            <td><span class="badge bg-warning text-light">Kuning</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal">
                                    <i class="bi bi-eye me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3 page-tabel">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal Detail Pengaduan -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h6 class="mb-1">Detail Pengaduan</h6>
                            <small class="text-muted">ID: 202405_0000001</small>
                        </div>
                        <div>
                            <small class="text-bold">Status: </small>
                            <span class="badge bg-warning">On Progress</span>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-3" id="tabDetailPengaduan" role="tablist">
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link active w-100" id="tab1-tab" data-bs-toggle="tab"
                                data-bs-target="#tab1" type="button" role="tab">Informasi Pengaduan</button>
                        </li>
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link w-100" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                type="button" role="tab">Evaluasi & Penyelesaian</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="tabContent">
                        <!-- Informasi Pengaduan -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Judul Pengaduan</strong><br>Pelayanaan Lambat di Poli Mata
                                </div>
                                <div class="col-md-6">
                                    <strong>Tanggal Pengaduan</strong><br>01 Mei 2024
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>No. Telepon</strong><br>081234567890
                                </div>
                                <div class="col-md-6">
                                    <strong>Grading</strong><br><span class="badge bg-warning text-light">Kuning</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Nama Pelapor</strong><br>Ahmad Sulaiman
                                </div>
                                <div class="col-md-6">
                                    <strong>Unit Kerja Tujuan</strong><br>Instalasi Rawat Jalan
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>No. Medrec</strong><br>RM123456
                                </div>
                                <div class="col-md-6">
                                    <strong>Jenis Laporan</strong><br>Keluhan
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Media Pengaduan</strong><br>Website
                                </div>
                                <div class="col-md-6">
                                    <strong>Petugas Pelapor</strong><br>Admin Humas
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Klasifikasi Pengaduan</strong><br>-
                                </div>
                            </div>
                            <div class="mb-2">
                                <strong>Deskripsi Pengaduan</strong>
                                <div class="bg-light p-2 rounded">Pelayanaan di poli mata sangat lambat. Saya sudah
                                    menunggu lebih dari 3 jam tetapi belum dipanggil.</div>
                            </div>
                            <div class="mb-4">
                                <strong>Rangkuman Permasalahan</strong>
                                <div class="bg-light p-2 rounded">Waktu tunggu pelayanan yang terlalu lama di Poli Mata.
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button class="btn btn-edit">Edit</button>
                            </div>
                        </div>

                        <!-- Evaluasi & Penyelesaian -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Petugas Evaluasi</strong><br>-
                                </div>
                                <div class="col-md-6">
                                    <strong>Tanggal Evaluasi</strong><br>-
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Penyelesaian Pengaduan</strong><br>Dibina
                                </div>
                                <div class="col-md-6">
                                    <strong>Tanggal Selesai</strong><br>-
                                </div>
                            </div>

                            <!-- Klarifikasi Unit -->
                            <div class="mb-3">
                                <strong>Klarifikasi Unit</strong>
                                <textarea class="form-control bg-light" rows="3"
                                    readonly>Isi klarifikasi oleh unit terkait akan ditampilkan di sini.</textarea>
                            </div>

                            <!-- File Bukti Klarifikasi -->
                            <div class="mb-3">
                                <strong>File Bukti Klarifikasi</strong>
                                <div class="d-flex flex-wrap gap-3 mt-2">
                                    <!-- File preview dummy -->
                                    <div class="border rounded p-2" style="width: 120px; text-align: center;">
                                        <img src="path/to/image.jpg" alt="Bukti" class="img-fluid rounded mb-1">
                                        <small class="d-block text-truncate">foto1.jpg</small>
                                    </div>
                                    <div class="border rounded p-2" style="width: 120px; text-align: center;">
                                        <i class="bi bi-file-earmark-pdf fs-1 text-danger"></i>
                                        <small class="d-block text-truncate">dokumen1.pdf</small>
                                    </div>
                                    <!-- Tambahkan elemen serupa untuk file lainnya -->
                                </div>
                            </div>

                            <!-- Tindak Lanjut Humas -->
                            <div class="mb-4">
                                <strong>Tindak Lanjut Humas</strong>
                                <textarea class="form-control bg-light" rows="3"
                                    readonly>Catatan tindak lanjut oleh tim Humas ditampilkan di sini.</textarea>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button class="btn btn-edit">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Isi Klarifikasi Unit (Sesuai Gambar) -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h6 class="mb-1">Isi Klarifikasi Unit</h6>
                            <small class="text-muted">ID: 202405_0000001</small>
                        </div>
                        <small>Status: <span class="badge bg-warning text-light fw-semibold">On Progress</span> </small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Pengaduan</label>
                        <input type="text" class="form-control" value="Pelayanan Lambat di Poli Mata">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi Pengaduan</label>
                        <textarea class="form-control bg-light" rows="2"
                            readonly>Pelayanaan di poli mata sangat lambat. Saya sudah menunggu lebih dari 3 jam tetapi belum dipanggil.</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Rangkuman Permasalahan</label>
                        <textarea class="form-control bg-light"
                            rows="2" readonly>Waktu tunggu pelayanan yang terlalu lama di Poli Mata</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Petugas Evaluasi</label>
                            <input type="text" class="form-control" value="Admin Unit Kerja">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Tanggal Evaluasi</label>
                            <input type="text" class="form-control" value="03 Mei 2024">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Klarifikasi Unit <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">File Bukti Klarifikasi (Jika ada)</label>
                        <input class="form-control" type="file">
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-success">Simpan Klarifikasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.querySelector('.input-group input');
            const statusSelect = document.querySelector('.form-select');
            const resetButton = document.querySelector('.btn-reset');
            const rows = document.querySelectorAll('tbody tr');

            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedStatus = statusSelect.value;

                rows.forEach(row => {
                    const title = row.children[2].textContent.toLowerCase();
                    const status = row.children[5].textContent.trim();

                    const matchesSearch = title.includes(searchTerm);
                    const matchesStatus = selectedStatus === "Semua Status" || status === selectedStatus;

                    row.style.display = matchesSearch && matchesStatus ? '' : 'none';
                });
            }

            searchInput.addEventListener('input', filterTable);
            statusSelect.addEventListener('change', filterTable);
            resetButton.addEventListener('click', () => {
                searchInput.value = '';
                statusSelect.value = 'Semua Status';
                filterTable();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

</body>

</html>
