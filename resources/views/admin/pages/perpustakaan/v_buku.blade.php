@extends('admin.v_admin')
@section('judulhalaman', 'Daftar Buku')
@section('title', 'Daftar Buku')

@section('konten')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Buku</h3>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambahBuku">
            Tambah Buku
        </button>
    </div>
        <div class="container mt-4 ps-4">
        <div class="row justify-content-center">
            @foreach ($buku as $b)
            <div class="col-12 mb-4">
                <div class="card shadow-lg border-0 p-4 position-relative mx-auto glossy-card" 
                    style="max-width: 900px; background: rgba(255, 255, 255, 0.85); border-radius: 15px; overflow: hidden;">
                    
                    <div class="row g-3 align-items-start">
                        
                        <!-- Gambar Buku -->
                        <div class="col-md-13 d-flex justify-content-end ms-3"> 
                            <img src="{{ $b->gambar ? 'data:image/jpeg;base64,' . $b->gambar : asset('img/default-book.png') }}" 
                                alt="Gambar {{ $b->judul }}" 
                                class="img-fluid rounded shadow" 
                                style="width: 140px; height: 200px; object-fit: cover;">
                        </div>


                        <!-- Detail Buku -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <h1 class="fs-5 fw-bold">{{ $b->judul }}</h1>

                                <div class="d-flex flex-wrap mt-2">
                                    @foreach(explode(',', $b->penulis) as $penulis)
                                        <span class="badge rounded-pill px-3 py-2 text-white me-2 mb-2"
                                            style="background: linear-gradient(135deg, #667eea, #764ba2); font-size: 1.1rem;">
                                            {{ trim($penulis) }}
                                        </span>
                                    @endforeach
                                </div>

                                <p class="text-gray-700 mt-3 text-wrap" style="max-height: 60px; overflow: hidden;">
                                    {{ Str::limit($b->deskripsi, 250) }}
                                </p>
                                </br>
                                <ul class="list-unstyled text-muted fs-6">
                                    <li><strong class="fw-semibold">Edisi:</strong> {{ $b->edisi }}</li>
                                    <li><strong class="fw-semibold">Deskripsi Fisik:</strong> {{ $b->deskripsi_fisik }}</li>
                                    <li><strong class="fw-semibold">Judul Seri:</strong> {{ $b->judul_seri }}</li>
                                    <li><strong class="fw-semibold">ISBN/ISSN:</strong> <span class="text-danger">{{ $b->isbn }}</span></li>
                                    <li><strong class="fw-semibold">No. Panggil:</strong> {{ $b->no_panggil }}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tombol Aksi -->
                        <div class="col-md-4 d-flex flex-column align-items-center justify-content-center gap-3 mt-2 mb-3">
                            <!-- Badge Jumlah Buku (Kotak) -->
                            <span class="badge bg-primary text-white fs-6 text-center shadow-sm mb-2" 
                                style="border-radius: 5px; min-width: 220px; height: 70px; display: flex; align-items: center; justify-content: center; padding: 10px;">
                                <h5 class="m-0">{{ $b->jumlah_buku }} Tersedia</h5>
                            </span>

                            <!-- Tombol Edit (Lebih Kecil & Pas) -->
                            <button type="button" class="btn btn-warning w-75 shadow-sm mb-2" 
                                    style="height: 36px; line-height: 1.2; margin: auto;" 
                                    data-toggle="modal" data-target="#modalEditBuku{{ $b->idbuku }}">
                                <i class="fas fa-edit me-1"></i> Edit
                            </button>

                            <!-- Tombol Hapus (Lebih Kecil & Pas) -->
                            <button type="button" class="btn btn-danger w-75 shadow-sm" 
                                    style="height: 36px; line-height: 1.2; margin: auto;" 
                                    data-toggle="modal" data-target="#modalHapusBuku{{ $b->idbuku }}">
                                <i class="fas fa-trash-alt me-1"></i> Hapus
                            </button>
                        </div>  
                    </div> 
                </div>
            </div>
            @endforeach
        </div>
    </div>

<div class="modal fade" id="modalTambahBuku" tabindex="-1" role="dialog" aria-labelledby="modalTambahBukuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahBukuLabel">Tambah Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Kolom Kiri -->
                        <div>
                            <div class="mb-4">
                                <label for="judul" class="block text-gray-700">Judul</label>
                                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="penulis" class="block text-gray-700">Penulis</label>
                                <input type="text" name="penulis" id="penulis" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" rows="4" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="gambar" class="block text-gray-700">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <!-- Kolom Kanan -->
                        <div>
                            <div class="mb-4">
                                <label for="edisi" class="block text-gray-700">Edisi</label>
                                <input type="text" name="edisi" id="edisi" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="isbn" class="block text-gray-700">ISBN/ISSN</label>
                                <input type="text" name="isbn" id="isbn" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="mb-4">  
                                <label for="deskripsi_fisik" class="block text-gray-700">Deskripsi Fisik</label>
                                <input type="text" name="deskripsi_fisik" id="deskripsi_fisik" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="judul_seri" class="block text-gray-700">Judul Seri</label>
                                <input type="text" name="judul_seri" id="judul_seri" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="no_panggil" class="block text-gray-700">No. Panggil</label>
                                <input type="text" name="no_panggil" id="no_panggil" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="jumlah_buku" class="block text-gray-700">Jumlah Buku</label>
                                <input type="number" name="jumlah_buku" id="jumlah_buku" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit dan Hapus -->
@foreach ($buku as $b)
    <!-- Modal Edit Buku -->
    <div class="modal fade" id="modalEditBuku{{ $b->idbuku }}" tabindex="-1" role="dialog" aria-labelledby="modalEditBukuLabel{{ $b->idbuku }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditBukuLabel{{ $b->idbuku }}">Edit Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('buku.update', $b->idbuku) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Kolom Kiri -->
                            <div>
                                <div class="mb-4">
                                    <label for="judul" class="block text-gray-700">Judul</label>
                                    <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->judul }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="penulis" class="block text-gray-700">Penulis</label>
                                    <input type="text" name="penulis" id="penulis" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->penulis }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" rows="4" required>{{ $b->deskripsi }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="gambar" class="block text-gray-700">Gambar</label>
                                    <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                    @if ($b->gambar)
                                        <img src="data:image/jpeg;base64,{{ $b->gambar }}" alt="Gambar {{ $b->judul }}" class="img-thumbnail mt-2" style="width: 100px; height: 100px; object-fit: cover;">
                                    @endif
                                </div>
                            </div>
                            <!-- Kolom Kanan -->
                            <div>
                                <div class="mb-4">
                                    <label for="edisi" class="block text-gray-700">Edisi</label>
                                    <input type="text" name="edisi" id="edisi" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->edisi }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="isbn" class="block text-gray-700">ISBN/ISSN</label>
                                    <input type="text" name="isbn" id="isbn" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->isbn }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="deskripsi_fisik" class="block text-gray-700">Deskripsi Fisik</label>
                                    <input type="text" name="deskripsi_fisik" id="deskripsi_fisik" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->deskripsi_fisik }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="judul_seri" class="block text-gray-700">Judul Seri</label>
                                    <input type="text" name="judul_seri" id="judul_seri" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->judul_seri }}">
                                </div>
                                <div class="mb-4">
                                    <label for="no_panggil" class="block text-gray-700">No. Panggil</label>
                                    <input type="text" name="no_panggil" id="no_panggil" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->no_panggil }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="jumlah_buku" class="block text-gray-700">Jumlah Buku</label>
                                    <input type="number" name="jumlah_buku" id="jumlah_buku" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $b->jumlah_buku }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Buku -->
    <div class="modal fade" id="modalHapusBuku{{ $b->idbuku }}" tabindex="-1" role="dialog" aria-labelledby="modalHapusBukuLabel{{ $b->idbuku }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusBukuLabel{{ $b->idbuku }}">Hapus Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data buku ini?</p>
                    <form action="{{ route('buku.destroy', $b->idbuku) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection