<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Daftar Pelaporan Humas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <style>

    </style>
</head>

<body>
    {{-- Navbar --}}
    <div id="navbar-humas-placeholder"></div>

    <div class="container my-5 pt-2">
        <!-- Header Box -->
        <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
            <h5 class="mb-1">Sistem Informasi Pengaduan RSHS Bandung</h5>
            <p class="mb-0">Manajemen pengaduan dan tindak lanjut humas</p>
        </div>

        <!-- Filter & Action -->
        <div class="bg-white p-3 rounded-bottom shadow-sm">
            <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3 tombol-cari">
                <div class="d-flex flex-wrap gap-2 grup-tombol">
                    <button class="btn btn-tambah-pengaduan text-white btn-teal" data-bs-toggle="modal"
                        data-bs-target="#modalTambahPengaduan">
                        <i class="bi bi-plus-circle"></i> Tambah Pengaduan Baru
                    </button>
                    <select class="selectpicker" data-style="btn-reset" style="width: 150px;">
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
                            <th>Unit Kerja</th>
                            <th>Status</th>
                            <th>Klarifikasi</th>
                            <th>Grading</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>202405_0000001</strong></td>
                            <td>Pelayanan Lambat di Poli Mata</td>
                            <td>Website</td>
                            <td>Instalasi Rawat Jalan</td>
                            <td><span class="badge bg-success">Open</span></td>
                            <td><span class="badge bg-info">Sudah</span></td>
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
                            <td>Instalasi Farmasi</td>
                            <td><span class="badge bg-warning text-light">On Progress</span></td>
                            <td><span class="badge bg-danger text-light">Belum</span></td>
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
                            <td>Bagian Keuangan</td>
                            <td><span class="badge bg-danger-subtle text-danger">Close</span></td>
                            <td><span class="badge bg-info">Sudah</span></td>
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

    <!-- Modal Tambah Pengaduan -->
    <div class="modal fade" id="modalTambahPengaduan" tabindex="-1" aria-labelledby="modalTambahPengaduanLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahPengaduanLabel">Tambah Pengaduan Baru</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Judul Pengaduan</label>
                                <input type="text" class="form-control" placeholder="Masukkan judul pengaduan">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">No. Telepon</label>
                                <input type="text" class="form-control" placeholder="Masukkan nomor telepon">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Nama Pelapor</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama pelapor">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Unit Kerja Tujuan</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih unit kerja</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">No. Medrec (jika ada)</label>
                                <input type="text" class="form-control" placeholder="Masukkan nomor rekam medis">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Jenis Laporan</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih jenis laporan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Media Pengaduan</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih media</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Klasifikasi Pengaduan</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih klasifikasi pengaduan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi Pengaduan</label>
                            <textarea class="form-control" rows="2"
                                placeholder="Masukkan deskripsi pengaduan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rangkuman Permasalahan</label>
                            <textarea class="form-control" rows="2"
                                placeholder="Masukkan rangkuman permasalahan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">File Pengaduan (jika ada)</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                    <button class="btn text-white btn-simpan">Tambah Pengaduan</button>
                </div>
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
                            <span class="badge bg-success">Open</span>
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
                                    <strong>Klarifikasi</strong><br>Sudah
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Nama Pelapor</strong><br>Ahmad Sulaiman
                                </div>
                                <div class="col-md-6">
                                    <strong>Grading</strong><br><span class="badge bg-warning text-light">Kuning</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>No. Medrec</strong><br>RM123456
                                </div>
                                <div class="col-md-6">
                                    <strong>Unit Kerja Tujuan</strong><br>Instalasi Rawat Jalan
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Media Pengaduan</strong><br>Website
                                </div>
                                <div class="col-md-6">
                                    <strong>Jenis Laporan</strong><br>Keluhan
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Klasifikasi Pengaduan</strong><br>-
                                </div>
                                <div class="col-md-6">
                                    <strong>Petugas Pelapor</strong><br>Admin Humas
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
                                <!-- <button class="btn btn-edit">Edit</button> -->
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
                                <label class="form-label fw-bold">File Bukti Klarifikasi</label>
                                <div class="d-flex flex-wrap gap-3 mt-2 bg-light" id="buktiKlarifikasiContainer">
                                    <div class="file-klarifikasi-item"> <a href="images\logoRSHS.png" target=""
                                            rel="noopener noreferrer" title="foto1.jpg">
                                            <img src="path/to/image.jpg" alt="Bukti Foto"
                                                class="img-fluid rounded mb-1">
                                            <small class="d-block text-truncate">foto1.jpg</small>
                                        </a>
                                    </div>
                                    <div class="file-klarifikasi-item"> <a href="path/to/document.pdf" target=""
                                            rel="noopener noreferrer" class="text-decoration-none text-dark"
                                            title="dokumen1.pdf">
                                            <i class="bi bi-file-earmark-pdf display-4 text-danger mb-1"></i> <small
                                                class="d-block text-truncate">dokumen1.pdf</small>
                                        </a>
                                    </div>
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
                                <!-- <button class="btn btn-edit">Edit</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Pengaduan -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h6 class="mb-1">Edit Pengaduan</h6>
                            <small class="text-muted">ID: 202405_0000001</small>
                        </div>
                        <!-- <div class="d-flex align-items-center gap-2">
                            <div>
                                <label class="form-label fw-bold mb-0">Status</label>
                                <select class="form-select form-select-sm">
                                    <option>Open</option>
                                    <option>On Progress</option>
                                    <option>Close</option>
                                </select>
                            </div>
                        </div> -->
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-3" id="tabEditPengaduan" role="tablist">
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link active w-100" id="tab1Edit-tab" data-bs-toggle="tab"
                                data-bs-target="#tab1Edit" type="button" role="tab">Informasi Pengaduan</button>
                        </li>
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link w-100" id="tab3Edit-tab" data-bs-toggle="tab"
                                data-bs-target="#tab3Edit" type="button" role="tab">Evaluasi & Penyelesaian</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="tabEditContent">
                        <!-- Informasi Pengaduan -->
                        <div class="tab-pane fade show active" id="tab1Edit" role="tabpanel">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Judul Pengaduan</label>
                                    <input type="text" class="form-control" value="Pelayanaan Lambat di Poli Mata">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tanggal Pengaduan</label>
                                    <input type="text" class="form-control bg-light" value="01 Mei 2024" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">No. Telepon</label>
                                    <input type="text" class="form-control" value="081234567890">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold d-block mb-3">Grading</label>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gradingOptions"
                                                id="gradingHijau" value="hijau" checked> <label class="form-check-label"
                                                for="gradingHijau">Hijau</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gradingOptions"
                                                id="gradingKuning" value="kuning">
                                            <label class="form-check-label" for="gradingKuning">Kuning</label>
                                        </div>

                                        <div class="form-check form-check-inline me-0"> <input class="form-check-input"
                                                type="radio" name="gradingOptions" id="gradingMerah" value="merah">
                                            <label class="form-check-label" for="gradingMerah">Merah</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Nama Pelapor</label>
                                    <input type="text" class="form-control" value="Ahmad Sulaiman">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Unit Kerja Tujuan</label>
                                    <select class="form-select">
                                        <option selected>Instalasi Rawat Jalan</option>
                                        <option>Unit Kerja Dummy 1</option>
                                        <option>Unit Kerja Dummy 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">No. Medrec</label>
                                    <input type="text" class="form-control" value="RM123456">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Jenis Laporan</label>
                                    <select class="form-select">
                                        <option selected>Keluhan</option>
                                        <option>Saran</option>
                                        <option>Kritik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Media Pengaduan</label>
                                    <select class="form-select">
                                        <option selected>Website</option>
                                        <option>Email</option>
                                        <option>Telepon</option>
                                        <option>SMS</option>
                                        <option>WhatsApp</option>
                                        <option>Instagram</option>
                                        <option>Facebook</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Petugas Pelapor</label>
                                    <input type="text" class="form-control" value="Admin Humas">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label fw-bold">Klasifikasi Pengaduan</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="mb-2">
                                <label class="form-label fw-bold">Deskripsi Pengaduan</label>
                                <textarea class="form-control"
                                    rows="3">Pelayanaan di poli mata sangat lambat. Saya sudah menunggu lebih dari 3 jam tetapi belum dipanggil.</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Rangkuman Permasalahan</label>
                                <textarea class="form-control"
                                    rows="3">Waktu tunggu pelayanan yang terlalu lama di Poli Mata.</textarea>
                            </div>
                        </div>

                        <!-- Evaluasi & Penyelesaian -->
                        <div class="tab-pane fade" id="tab3Edit" role="tabpanel">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Petugas Evaluasi</label>
                                    <input type="text" class="form-control bg-light" value="-" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tanggal Evaluasi</label>
                                    <input type="text" class="form-control bg-light" value="-" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Penyelesaian Pengaduan</label>
                                    <select class="form-select">
                                        <option selected>Dibina</option>
                                        <option>Diberi Sanksi</option>
                                        <option>Tidak Lanjut</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tanggal Selesai</label>
                                    <input type="text" class="form-control bg-light" value="-" readonly>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Klarifikasi Unit</label>
                                <textarea class="form-control bg-light" rows="3"
                                    readonly>Isi klarifikasi oleh unit terkait akan ditampilkan di sini.</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">File Bukti Klarifikasi</label>
                                <div class="d-flex flex-wrap gap-3 mt-2 bg-light" id="buktiKlarifikasiContainer">
                                    <div class="file-klarifikasi-item"> <a href="images\logoRSHS.png" target=""
                                            rel="noopener noreferrer" title="foto1.jpg">
                                            <img src="path/to/image.jpg" alt="Bukti Foto"
                                                class="img-fluid rounded mb-1">
                                            <small class="d-block text-truncate">foto1.jpg</small>
                                        </a>
                                    </div>
                                    <div class="file-klarifikasi-item"> <a href="path/to/document.pdf" target=""
                                            rel="noopener noreferrer" class="text-decoration-none text-dark"
                                            title="dokumen1.pdf">
                                            <i class="bi bi-file-earmark-pdf display-4 text-danger mb-1"></i> <small
                                                class="d-block text-truncate">dokumen1.pdf</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Tindak Lanjut Humas</label>
                                <textarea class="form-control"
                                    rows="3">Catatan tindak lanjut oleh tim Humas ditampilkan di sini.</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-simpan">Simpan Perubahan</button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbarFetchUrl = "{{ route('internal.humasNavbar') }}";

            fetch(navbarFetchUrl)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text();
                })
                .then((data) => {
                    const navbarPlaceholder = document.getElementById("navbar-humas-placeholder");
                    if (navbarPlaceholder) {
                        navbarPlaceholder.innerHTML = data;
                    } else {
                        console.error("Navbar placeholder element not found.");
                        return;
                    }

                    const currentPath = window.location.pathname;
                    const navLinks = navbarPlaceholder.querySelectorAll(".nav-link");

                    navLinks.forEach((link) => {
                        const linkPath = link.getAttribute("href");
                        try {
                            const linkUrl = new URL(link.href);
                            if (linkUrl.pathname === currentPath) {
                                link.classList.add("active");
                            }
                        } catch (e) {
                            if (linkPath === currentPath) {
                                link.classList.add("active");
                            }
                        }
                    });
                })
                .catch((error) => console.error("Error loading the navbar:", error));
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
</body>

</html>
