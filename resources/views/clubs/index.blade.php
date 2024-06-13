@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mb-3">
        <div class="col-lg-12 text-center">
            <a href="/" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left-circle me-2"></i>Kembali ke Halaman Welcome
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 animate__animated animate__fadeInUp rounded-4">
                <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center rounded-top-4">
                    <h3 class="mb-0 text">Daftar Klub Sepak Bola</h3>
                    <a href="{{ route('clubs.create') }}" class="btn btn-outline-light">
                        <i class="bi bi-plus-lg me-2"></i>Tambah Klub
                    </a>
                </div>
                <div class="card-body p-5">
                    @if (session('success'))
                        <div class="alert alert-success animate__animated animate__fadeInDown">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Kota</th>
                                    <th class="text-center">Negara</th>
                                    <th class="text-center" style="white-space: nowrap;">Tahun Berdiri</th>
                                    <th class="text-center">Stadion</th>
                                    <th class="text-center">Pelatih</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($clubs as $club)
                                    <tr>
                                        <td class="text-center">{{ $club->nama }}</td>
                                        <td class="text-center">{{ $club->kota }}</td>
                                        <td class="text-center">{{ $club->negara }}</td>
                                        <td class="text-center" style="white-space: nowrap;">{{ $club->tahun_berdiri }}</td>
                                        <td class="text-center">{{ $club->stadion }}</td>
                                        <td class="text-center">{{ $club->pelatih }}</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('clubs.show', $club->id) }}" class="btn btn-sm btn-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </a>
                                                <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-sm btn-warning me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $club->id }}">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal Konfirmasi Hapus -->
                                    <div class="modal fade" id="deleteModal{{ $club->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger text-white">
                                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus klub ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form action="{{ route('clubs.destroy', $club->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">Tidak ada data klub.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Tampilkan tombol "Previous" dan "Next" secara manual -->
                    <div class="d-flex justify-content-between mt-4">
                        @if ($clubs->previousPageUrl())
                            <a href="{{ $clubs->previousPageUrl() }}" class="btn btn-outline-primary">&laquo; Sebelumnya</a>
                        @else
                            <button class="btn btn-outline-primary" disabled>&laquo; Sebelumnya</button>
                        @endif

                        @if ($clubs->nextPageUrl())
                            <a href="{{ $clubs->nextPageUrl() }}" class="btn btn-outline-primary">Selanjutnya &raquo;</a>
                        @else
                            <button class="btn btn-outline-primary" disabled>Selanjutnya &raquo;</button>
                        @endif
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

    .btn-outline-light {
        border-color: #fff;
    }

    .btn-outline-light:hover {
        background-color: #fff;
        color: #3a79ff;
    }

    .table thead {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .btn-outline-primary {
        border-color: #3a79ff;
    }

    .btn-outline-primary:hover {
        background-color: #3a79ff;
        color: #fff;
    }

    .modal-content {
        border-radius: 20px;
    }

    .modal-header {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .modal-footer {
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
</style>
