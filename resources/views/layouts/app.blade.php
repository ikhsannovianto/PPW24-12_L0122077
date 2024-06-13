<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub Sepak Bola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 80px; /* Atur padding atas agar konten tidak tertutup oleh navbar */
        }
        .navbar {
            background-color: #3a79ff; /* Warna latar belakang navbar */
            transition: background-color 0.3s ease;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1); /* Garis bawah navbar */
        }
        .navbar:hover {
            background-color: #2c3e50 !important; /* Warna latar belakang navbar saat dihover */
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem; /* Ukuran teks navbar brand */
            color: #ffffff; /* Warna teks navbar brand */
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #ffffff !important; /* Warna teks navbar brand saat dihover */
        }
        .nav-link {
            font-size: 1.1rem; /* Ukuran teks link navbar */
            color: #ffffff; /* Warna teks link navbar */
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #3a79ff !important; /* Warna teks link navbar saat dihover */
        }
        .navbar-toggler {
            border-color: #ffffff; /* Warna garis toggler */
        }
        .navbar-toggler-icon {
            background-color: #ffffff; /* Warna ikon toggler */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('clubs.index') }}">Klub Sepak Bola</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clubs.index') }}">Daftar Klub</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clubs.create') }}">Tambah Klub</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
