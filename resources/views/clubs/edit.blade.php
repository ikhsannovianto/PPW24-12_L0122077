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
                    <h3 class="mb-0">Edit Klub</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('clubs.update', $club->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Klub</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $club->nama) }}" required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" name="kota" id="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ old('kota', $club->kota) }}" required>
                            @error('kota')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="negara" class="form-label">Negara</label>
                            <input type="text" name="negara" id="negara" class="form-control @error('negara') is-invalid @enderror" value="{{ old('negara', $club->negara) }}" required>
                            @error('negara')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                            <input type="number" name="tahun_berdiri" id="tahun_berdiri" class="form-control @error('tahun_berdiri') is-invalid @enderror" value="{{ old('tahun_berdiri', $club->tahun_berdiri) }}" required>
                            @error('tahun_berdiri')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stadion" class="form-label">Stadion</label>
                            <input type="text" name="stadion" id="stadion" class="form-control @error('stadion') is-invalid @enderror" value="{{ old('stadion', $club->stadion) }}" required>
                            @error('stadion')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pelatih" class="form-label">Pelatih</label>
                            <input type="text" name="pelatih" id="pelatih" class="form-control @error('pelatih') is-invalid @enderror" value="{{ old('pelatih', $club->pelatih) }}" required>
                            @error('pelatih')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-2"></i>Update
                            </button>
                        </div>
                    </form>
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
    }

    .btn-outline-primary:hover {
        background-color: #3a79ff;
        color: #fff;
    }

    .btn-primary {
        background-color: #3a79ff;
        border-color: #3a79ff;
    }

    .btn-primary:hover {
        background-color: #6b9df0;
        border-color: #6b9df0;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
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
</style>
