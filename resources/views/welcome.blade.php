<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub Sepak Bola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #007bff;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom: 2px solid #0056b3;
            padding: 1.5rem;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .card-header h1 {
            font-size: 2.5rem;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        .card-header:hover {
            background-color: #0056b3;
            border-color: #00408b;
        }
        .card-body {
            padding: 2rem;
        }
        .lead {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #495057;
        }
        .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
            border-radius: 10px;
            padding: 12px 28px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #00408b;
            border-color: #00408b;
        }
        .btn-primary:focus, .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card animate__animated animate__fadeInUp shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h1 class="mb-0">
                            <i class="bi bi-shield-check me-2"></i> <!-- Ubah ikon ke bi-shield-check -->
                            Klub Sepak Bola
                        </h1>
                    </div>
                    <div class="card-body text-center">
                        <p class="lead">Selamat datang di aplikasi web untuk mengelola data klub-klub sepak bola!</p>
                        <a href="{{ route('clubs.index') }}" class="btn btn-primary btn-lg">
                            <i class="bi bi-card-list me-2"></i> <!-- Ubah ikon ke bi-card-list -->
                            Lihat Daftar Klub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
