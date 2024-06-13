@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8 text-center">
            <a href="{{ route('clubs.index') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left-circle me-2"></i>Kembali ke Daftar Klub
            </a>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg animate__animated animate__fadeInUp rounded-4">
                <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center rounded-top-4">
                    <h3 class="mb-0">Detail Klub</h3>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 col-lg-4">
                            <h5 class="text-primary">Nama Klub</h5>
                            <p>{{ $club->nama }}</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <h5 class="text-primary">Kota</h5>
                            <p>{{ $club->kota }}</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <h5 class="text-primary">Negara</h5>
                            <p>{{ $club->negara }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 col-lg-4">
                            <h5 class="text-primary">Tahun Berdiri</h5>
                            <p>{{ $club->tahun_berdiri }}</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <h5 class="text-primary">Stadion</h5>
                            <p>{{ $club->stadion }}</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <h5 class="text-primary">Pelatih</h5>
                            <p>{{ $club->pelatih }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #6b9df0, #3a79ff);
    }

    .card {
        border-radius: 20px;
    }

    .btn-outline-primary {
        border-color: #3a79ff;
        color: #3a79ff;
    }

    .btn-outline-primary:hover {
        background-color: #3a79ff;
        color: #fff;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 10px;
    }

    .invalid-feedback {
        display: block;
    }

    .text-primary {
        color: #3a79ff !important;
        font-weight: bold;
    }

    .rounded-4 {
        border-radius: 1rem;
    }

    .card-header {
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
    }

    .p-4 {
        padding: 1.5rem !important;
    }

    .mb-4 {
        margin-bottom: 1.5rem !important;
    }
</style>
