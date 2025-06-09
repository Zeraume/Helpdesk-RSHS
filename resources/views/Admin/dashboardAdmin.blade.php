<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin RSHS Bandung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

    <style>
        .chart-section {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-top: 10px;
        }

        .chart-section h2 {
            font-size: 16px;
            margin-bottom: 4px;
        }

        .chart-section p {
            font-size: 13px;
            margin-top: 0;
            color: #555;
        }

        .bootstrap-select.select-panjang {
            width: 300px !important;
        }

        .bootstrap-select.select-panjang>.dropdown-toggle {
            width: 100% !important;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        #gradingChart {
            max-height: 50vh;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    @include('Admin.navbarAdmin')

    <div class="container container-tabel rounded my-5 pt-2">
        <!-- Header Box -->
        <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
            <h5 class="mb-1">Dashboard Admin RSHS Bandung</h5>
            <p class="mb-0">Visualisasi data pengaduan berdasarkan berbagai kategori</p>
        </div>

        <!-- Filter & Action -->
        <div class="bg-white p-4 rounded-bottom shadow-sm">
            <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3 tombol-cari">
                <div class="d-flex flex-wrap gap-2 grup-tombol">
                    <select class="selectpicker select-panjang" data-style="btn-reset">
                        <option>Grading (Merah, Kuning, Hijau)</option>
                        <option>Sumber Media</option>
                        <option>Status Pengaduan</option>
                        <option>Unit Kerja</option>
                        <option>Jenis Laporan</option>
                        <option>Klasifikasi Pengaduan</option>
                        <option>Penyelesaian Pengaduan</option>
                    </select>
                    <select class="selectpicker" data-style="btn-reset">
                        <option>Semua Waktu</option>
                        <option>Bulanan</option>
                        <option>Triwulan</option>
                        <option>Semester</option>
                    </select>
                    <!-- Dropdown Unit Kerja -->
                    <div id="unitKerjaFilterContainer" style="display: none;">
                        <select class="selectpicker select-panjang" data-style="btn-reset" id="unitKerjaFilter">
                            <option>Semua Unit Kerja</option>
                            <option>DIREKTUR UTAMA</option>
                            <option>DIREKTUR MEDIK DAN PERAWATAN</option>
                            <option>DIREKTUR SDM, PENDIDIKAN, DAN PENELITIAN</option>
                            <option>DIREKTUR PERENCANAAN DAN KEUANGAN</option>
                            <option>DIREKTUR LAYANAN OPERASIONAL</option>
                        </select>
                    </div>
                    <!-- Dropdown Sub Unit -->
                    <div id="subUnitFilterContainer" style="display: none;">
                        <select class="selectpicker select-panjang" data-style="btn-reset" id="subUnitFilter">
                            <option>Semua Sub Unit</option>
                            <option>KOMITE MEDIK</option>
                            <option>KOMITE ETIK DAN HUKUM</option>
                            <option>KOMITE MUTU DAN KESELAMATAN PASIEN</option>
                            <option>SATUAN PEMERIKSAAN INTERN</option>
                            <option>KOMITE PENCEGAHAN DAN PENGENDALIAN INFEKSI RUMAH SAKIT</option>
                            <option>KOMITE ETIK PENELITIAN KESEHATAN</option>
                            <option>KOMITE KEPERAWATAN</option>
                            <option>KOMITE KOORDINASI PENDIDIKAN</option>
                            <option>KOMITE TENAGA KESEHATAN LAINNYA</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="chart-section border rounded p-4">
                <h4 id="chart-title">Grading (Merah, Kuning, Hijau)</h4>
                <p id="chart-subtitle">Distribusi pengaduan berdasarkan tingkat waktu penanganan komplain (Merah,
                    Kuning, Hijau)</p>
                <canvas id="gradingChart" height="150"></canvas>
            </div>
        </div>
    </div>

    <script>
        fetch("navbarAdmin.html")
            .then((response) => response.text())
            .then((data) => {
                document.getElementById("navbar-admin").innerHTML = data;

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

    <script>
        const chartDataSets = {
            grading: {
                labels: ['Merah', 'Kuning', 'Hijau'],
                data: [2, 4, 3],
                title: 'Grading (Merah, Kuning, Hijau)',
                subtitle: 'Distribusi pengaduan berdasarkan tingkat waktu penanganan komplain (Merah, Kuning, Hijau)',
                backgroundColor: ['#E0440E'],
                type: 'bar'
            },
            sumberMedia: {
                labels: ['SMS', 'Kotak Saran', 'Email', 'Instagram', 'Humas', 'Facebook', 'Kode QR', 'Customer Service',
                    'Contact Center', 'Website', 'Twitter', 'P3JKM', 'Whatsapp', 'Media Massa', 'Lain-lain', 'Web Helpdesk'],
                data: [2, 3, 2, 3, 6, 5, 3, 4, 1, 3, 0, 3, 3, 0, 6, 3],
                title: 'Sumber Media',
                subtitle: 'Distribusi pengaduan berdasarkan sumber media pelaporan',
                backgroundColor: '#e65100',
                type: 'bar'
            },
            statusPengaduan: {
                labels: ['Open', 'On Progress', 'Close'],
                data: [3, 3, 4],
                title: 'Status Pengaduan',
                subtitle: 'Distribusi pengaduan berdasarkan status penanganan (Open, On Progress, Close)',
                backgroundColor: ['#00C853', '#FFD600', '#D50000'],
                type: 'pie'
            },
            unitKerja: {
                labels: [
                    'Direktur Utama',
                    'Direktur Medik dan Keperawatan',
                    'Direktur SDM, Pendidikan, dan Penelitian',
                    'Direktur Perencanaan dan Keuangan',
                    'Direktur Layanan Operasional'
                ],
                data: [3, 2, 1, 1, 3],
                title: 'Unit Kerja',
                subtitle: 'Distribusi pengaduan berdasarkan unit kerja tujuan',
                backgroundColor: ['#E0440E'],
                type: 'bar'
            },
            jenisLaporan: {
                labels: ['Apresiasi', 'Keluhan', 'Informasi', 'Pertanyaan'],
                data: [4, 3, 3, 3],
                title: 'Jenis Laporan',
                subtitle: 'Distribusi pengaduan berdasarkan jenis laporan',
                backgroundColor: ['#2962FF', '#D84315', '#FF9800', '#2E7D32'],
                type: 'pie'
            },
            klasifikasiPengaduan: {
                labels: ['Etik', 'Sponsorship', 'Gratifikasi'],
                data: [3, 3, 3],
                title: 'Klasifikasi Pengaduan',
                subtitle: 'Distribusi pengaduan berdasarkan klasifikasi pengaduan',
                backgroundColor: ['#2962FF', '#D84315', '#FF9800'],
                type: 'pie'
            },
            penyelesaianPengaduan: {
                labels: ['Sudah Diberi Sanksi', 'Dibina'],
                data: [2, 3],
                title: 'Penyelesaian Pengaduan',
                subtitle: 'Distribusi pengaduan berdasarkan status penyelesaian',
                backgroundColor: ['#E0440E'],
                type: 'bar'
            }
        };

        const ctx = document.getElementById('gradingChart').getContext('2d');
        let activeChart = null;

        function createChart(config) {
            if (activeChart) activeChart.destroy();

            activeChart = new Chart(ctx, {
                type: config.type,
                data: {
                    labels: config.labels,
                    datasets: [{
                        label: 'Jumlah Pengaduan',
                        data: config.data,
                        backgroundColor: config.backgroundColor
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right'
                        },
                        datalabels: config.type === 'pie' ? {
                            color: '#fff',
                            font: { weight: 'bold', size: 21 },
                            formatter: value => value
                        } : false
                    }
                },
                plugins: config.type === 'pie' ? [ChartDataLabels] : []
            });

            document.getElementById("chart-title").textContent = config.title;
            document.getElementById("chart-subtitle").textContent = config.subtitle;
        }

        // Inisialisasi chart pertama (default grading)
        createChart(chartDataSets.grading);

        // Ketika kategori chart dipilih
        document.querySelector('.select-panjang').addEventListener('change', function () {
            const selected = this.value;
            let selectedKey = "grading";

            if (selected === "Sumber Media") selectedKey = "sumberMedia";
            else if (selected === "Status Pengaduan") selectedKey = "statusPengaduan";
            else if (selected === "Unit Kerja") selectedKey = "unitKerja";
            else if (selected === "Jenis Laporan") selectedKey = "jenisLaporan";
            else if (selected === "Klasifikasi Pengaduan") selectedKey = "klasifikasiPengaduan";
            else if (selected === "Penyelesaian Pengaduan") selectedKey = "penyelesaianPengaduan";

            createChart(chartDataSets[selectedKey]);

            // Tampilkan/hilangkan filter "Unit Kerja" dan "Sub Unit"
            const unitKerjaDropdown = document.getElementById("unitKerjaFilterContainer");
            const subUnitDropdown = document.getElementById("subUnitFilterContainer");

            if (selectedKey === "unitKerja") {
                unitKerjaDropdown.style.display = "block";
            } else {
                unitKerjaDropdown.style.display = "none";
                subUnitDropdown.style.display = "none";
            }
        });

        // Saat opsi unit kerja dipilih
        document.getElementById("unitKerjaFilter").addEventListener("change", function () {
            const selectedUnit = this.value;
            const subUnitContainer = document.getElementById("subUnitFilterContainer");

            // Tampilkan sub-unit hanya jika bukan "Semua Unit Kerja"
            if (
                selectedUnit &&
                selectedUnit !== 'Semua Unit Kerja' &&
                selectedUnit !== ''
            ) {
                subUnitContainer.style.display = 'block';
            } else {
                subUnitContainer.style.display = 'none';
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</body>

</html>
