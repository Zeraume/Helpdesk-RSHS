<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\stylePasien.css') }}">
    <style>

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-lg d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand" href="">
                <img src="images/logoRSHS.png" alt="Logo" height="40" />
            </a>
        </div>
    </nav>

    <!-- Hiasan Sudut -->
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-right" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-right" />

    <div class="login-container">
        <div class="login-form-column">
            <div class="login-card text-center">
                <img src="images\logoRSHS.png" alt="Logo RS Hasan Sadikin" class="logo-rs">
                <h4 class="mb-1" style="color: #00796B;">RS Hasan Sadikin Bandung</h4>
                <p class="subtitle mb-4">Sistem Informasi Pengaduan dan Manajemen</p>

                <form>
                    <div class="mb-3 text-start">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-lg" id="username"
                            placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-4 text-start">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control form-control-lg" id="password"
                                placeholder="Masukkan Password" required>
                            <span class="input-group-text password-addon" id="togglePassword">
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-login btn-lg text-white">
                            Login <i class="bi bi-box-arrow-in-right ms-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        if (togglePassword && password) {
            togglePassword.addEventListener('click', function () {
                // ganti tipe input
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // ganti ikon mata
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
