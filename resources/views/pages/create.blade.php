@extends('layouts.app')

@section('content')
<div class="create-container d-flex justify-content-center align-items-center">
    <div class="card create-card p-4 mb-5" style="width: 400px;">
        <h4 class="text-center mb-3">Bagikan resep masakanmu</h4>
        <p class="text-center text-muted" style="font-size: 14px;">
            Unggah Kreasi Masakan Terbaikmu dan Jadikan Masakanmu Bintang di Katalog Ini!
        </p>

        {{-- Form Upload --}}
        <form method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Upload Gambar --}}
            <div class="text-center mb-3">
                <label for="gambar" class="form-label">
                    <i class="bi bi-image" style="font-size: 48px;"></i><br>
                    Tambahkan gambar
                </label>
                <input class="input-image form-control" type="file" id="gambar" name="gambar" required>
            </div>

            {{-- Input Judul --}}
            <div class="mb-3">
                <input type="text" class="form-control" name="judul" placeholder="Tambahkan judul masakan..." required>
            </div>

            {{-- Input Deskripsi --}}
            <div class="mb-3">
                <textarea class="form-control" name="deskripsi" placeholder="Tambahkan deskripsi masakan..." rows="3" required></textarea>
            </div>

            {{-- Tombol Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Unggah</button>
            </div>
        </form>
    </div>
</div>
<div class="container text-center" style="background-color: red">
    <h4 class="text-center">Resep Populer</h4>
    <div class="row g-4">
        @for ($i = 1; $i <= 6; $i++) <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('assets/images/recipe-placeholder.jpg') }}" class="card-img-top" alt="Resep Masakan">
                <div class="card-body">
                    <h5 class="card-title">Resep Masakan #{{ $i }}</h5>
                    <p class="card-text">Deskripsi singkat tentang resep masakan yang menggugah selera.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Lihat</button>
                            <button type="button" class="btn btn-sm btn-outline-warning">Simpan</button>
                        </div>
                        <small class="text-muted">9 menit yang lalu</small>
                    </div>
                </div>
            </div>
    </div>
    @endfor
</div>

@endsection
