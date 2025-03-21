<!-- Awal Konten Dinamis -->
@extends('admin.v_admin')
@section('judulhalaman', 'Daftar Pustakawan')
@section('title', 'Daftar Pustakawan')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Pustakawan</h3>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambahPustakawan">
                Tambah Pustakawan
            </button>
        </div>
        <div class="container">
            <h2 class="mb-4">Profil Pustakawan</h2>
            <div class="row">
                @foreach ($pustakawan as $p)
                    <div class="col-md-6 mb-4">
                        <div class="card p-3 shadow-sm d-flex flex-row align-items-center">
                            <!-- Tampilkan gambar dalam format Base64 -->
                            <img src="{{ $p->foto ? 'data:image/jpeg;base64,' . $p->foto : asset('img/default-profile.png') }}" 
                                 alt="Foto {{ $p->nama }}" class="rounded-circle me-3" style="width: 80px; height: 80px;">
                            <div class="flex-grow-1">
                                <h5 class="mb-1">{{ $p->nama }}</h5>
                                <p class="mb-1"><strong>Jabatan:</strong> {{ $p->jabatan }}</p>
                                <p class="mb-1"><strong>Email:</strong> {{ $p->email }}</p>
                                <div class="d-flex">
                                    <button class="btn btn-warning btn-sm me-2" data-toggle="modal" data-target="#modalEditPustakawan{{ $p->idpustakawan }}">Edit</button>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapusPustakawan{{ $p->idpustakawan }}">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pustakawan -->
    <div class="modal fade" id="modalTambahPustakawan" tabindex="-1" role="dialog" aria-labelledby="modalTambahPustakawanLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahPustakawanLabel">Tambah Pustakawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pustakawan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
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
    @foreach ($pustakawan as $p)
        <!-- Modal Edit Pustakawan -->
        <div class="modal fade" id="modalEditPustakawan{{ $p->idpustakawan }}" tabindex="-1" role="dialog" aria-labelledby="modalEditPustakawanLabel{{ $p->idpustakawan }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditPustakawanLabel{{ $p->idpustakawan }}">Edit Pustakawan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('pustakawan.update', $p->idpustakawan) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->jabatan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $p->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                @if ($p->foto)
                                    <img src="data:image/jpeg;base64,{{ $p->foto }}" alt="Foto {{ $p->nama }}" class="img-fluid mt-2" style="max-width: 100px;">
                                @endif
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

        <!-- Modal Hapus Pustakawan -->
        <div class="modal fade" id="modalHapusPustakawan{{ $p->idpustakawan }}" tabindex="-1" role="dialog" aria-labelledby="modalHapusPustakawanLabel{{ $p->idpustakawan }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHapusPustakawanLabel{{ $p->idpustakawan }}">Hapus Pustakawan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data pustakawan ini?</p>
                        <form action="{{ route('pustakawan.destroy', $p->idpustakawan) }}" method="POST">
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
<!-- Akhir Isi Konten Dinamis -->