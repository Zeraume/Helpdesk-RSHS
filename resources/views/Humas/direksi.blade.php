<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Direksi Humas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    {{-- Navbar --}}
    <div id="navbar-humas-placeholder"></div>

    <div class="container my-5 pt-2">
        <!-- Header Box -->
        <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
            <h5 class="mb-1">Manajemen Data Direksi RSHS Bandung</h5>
            <p class="mb-0">Kelola data kontak direksi untuk sistem notifikasi</p>
        </div>

        <!-- Filter & Action -->
        <div class="bg-white p-3 rounded-bottom shadow-sm">
            <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3 tombol-cari">
                <div class="d-flex flex-wrap gap-2 grup-tombol">
                    <button class="btn btn-tambah-pengaduan text-white btn-teal" data-bs-toggle="modal"
                        data-bs-target="#modalTambahDireksi">
                        <i class="bi bi-plus-circle"></i> Tambah Data Direksi
                    </button>

                </div>
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Cari Direksi...">
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="border-bottom">
                        <tr class="text-nowrap">
                            <th>ID</th>
                            <th>Nama Direksi</th>
                            <th>Nomor Telepon</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1</strong></td>
                            <td>DIREKTUR UTAMA</td>
                            <td><i class="bi bi-telephone me-2"></i>081234567890</td>
                            <td><span class="badge bg-info">DIRUT</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditDireksi">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>2</strong></td>
                            <td>DIREKTORAT MEDIK DAN PERAWATAN</td>
                            <td><i class="bi bi-telephone me-2"></i>081234567891</td>
                            <td><span class="badge bg-info">DIRMED</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditDireksi">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>3</strong></td>
                            <td>DIREKTORAT SDM DAN PENDIDIKAN</td>
                            <td><i class="bi bi-telephone me-2"></i>081234567892</td>
                            <td><span class="badge bg-info">DIRSDM</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditDireksi">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>4</strong></td>
                            <td>DIREKTORAT PERENCANAAN DAN KEUANGAN</td>
                            <td><i class="bi bi-telephone me-2"></i>081234567893</td>
                            <td><span class="badge bg-info">DIRKEU</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditDireksi">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>5</strong></td>
                            <td>DIREKTORAT LAYANAN OPERASIONAL</td>
                            <td><i class="bi bi-telephone me-2"></i>081234567894</td>
                            <td><span class="badge bg-info">DIRUM</span></td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditDireksi">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                    <i class="bi bi-trash"></i>
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

    <!-- Modal Tambah Data Direksi -->
    <div class="modal fade" id="modalTambahDireksi" tabindex="-1" aria-labelledby="modalTambahDireksiLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start">
                    <h6 class="modal-title" id="modalTambahDireksiLabel">Tambah Data Direksi</h6>
                    <small class="mt-1">Isi formulir berikut untuk menambahkan data direksi baru</small>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Direksi</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama direksi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="Masukkan nomor telepon">
                            <small class="text-muted">Masukkan nomor WhatsApp yang aktif untuk notifikasi</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Keterangan</label>
                            <input type="text" class="form-control"
                                placeholder="Masukkan keterangan (contoh: dirut, dirmed)">
                            <small class="text-muted">Kode singkat untuk identifikasi direksi (dirut, dirmed, dirsdm,
                                dll)</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                    <button class="btn text-white btn-simpan">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data Direksi -->
    <div class="modal fade" id="modalEditDireksi" tabindex="-1" aria-labelledby="modalEditDireksiLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start">
                    <h6 class="modal-title" id="modalEditDireksiLabel">Edit Data Direksi</h6>
                    <small class="mt-1">ID: 1</small>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Direksi</label>
                            <input type="text" class="form-control" value="DIREKTUR UTAMA">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nomor Telepon</label>
                            <input type="text" class="form-control" value="081234567890">
                            <small class="text-muted">Masukkan nomor WhatsApp yang aktif untuk notifikasi</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Keterangan</label>
                            <input type="text" class="form-control"
                                value="DIRUT">
                            <small class="text-muted">Kode singkat untuk identifikasi direksi (dirut, dirmed, dirsdm,
                                dll)</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                    <button class="btn text-white btn-simpan">Tambah</button>
                </div>
            </div>
        </div>
    </div>


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
</body>

</html>
