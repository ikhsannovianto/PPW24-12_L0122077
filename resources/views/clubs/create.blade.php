@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 animate__animated animate__fadeInUp rounded-4">
                <div class="card-body p-5">
                    <h3 class="card-title mb-4 text-primary text-center">Tambah Klub Baru</h3>
                    <form action="{{ route('clubs.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="form-label text-secondary">Nama Klub</label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="kota" class="form-label text-secondary">Kota</label>
                            <input type="text" name="kota" id="kota" class="form-control form-control-lg @error('kota') is-invalid @enderror" value="{{ old('kota') }}" required>
                            @error('kota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="negara" class="form-label text-secondary">Negara</label>
                            <input type="text" name="negara" id="negara" class="form-control form-control-lg @error('negara') is-invalid @enderror" value="{{ old('negara') }}" required>
                            @error('negara')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="tahun_berdiri" class="form-label text-secondary">Tahun Berdiri</label>
                                <input type="number" name="tahun_berdiri" id="tahun_berdiri" class="form-control form-control-lg @error('tahun_berdiri') is-invalid @enderror" value="{{ old('tahun_berdiri') }}" required>
                                @error('tahun_berdiri')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="stadion" class="form-label text-secondary">Stadion</label>
                                <input type="text" name="stadion" id="stadion" class="form-control form-control-lg @error('stadion') is-invalid @enderror" value="{{ old('stadion') }}" required>
                                @error('stadion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="pelatih" class="form-label text-secondary">Pelatih</label>
                            <input type="text" name="pelatih" id="pelatih" class="form-control form-control-lg @error('pelatih') is-invalid @enderror" value="{{ old('pelatih') }}" required>
                            @error('pelatih')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-save me-2"></i>
                                Simpan
                            </button>
                            <a href="{{ route('clubs.index') }}" class="btn btn-outline-secondary btn-lg mt-2">
                                <i class="bi bi-arrow-left me-2"></i>
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .card {
        background: #f9f9f9;
        border-radius: 20px;
    }

    .card-title {
        font-weight: bold;
        font-size: 1.5rem;
    }

    .form-label {
        font-size: 1.1rem;
        font-weight: 500;
    }

    .form-control {
        border-radius: 10px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #6b9df0, #3a79ff);
        border: none;
    }

    .btn-outline-secondary {
        border-color: #6b9df0;
    }

    .btn-outline-secondary:hover {
        background-color: #6b9df0;
        color: #fff;
    }

    .invalid-feedback {
        font-size: 0.9rem;
    }
</style>
