@extends('admin.v_admin')
@section('judulhalaman', 'Informasi Perpustakaan')
@section('title', 'Informasi Perpustakaan')

@section('konten')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Informasi Perpustakaan</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahInformasi">
                    <i class="fas fa-plus"></i> Tambah Informasi
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @foreach ($informasi as $info)
            <div class="mb-5 p-4 border-bottom position-relative">
                <!-- Edit/Publish Buttons (Top Right) -->
                <div class="position-absolute" style="top: 10px; right: 10px;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEditInformasi{{ $info->id }}">
                            <i class="fas fa-edit"></i>
                        </button>
                        @if($info->status == 'draft')
                            <button type="button" class="btn btn-sm btn-success" onclick="publishInformasi({{ $info->id }})">
                                <i class="fas fa-check"></i>
                            </button>
                        @else
                            <button type="button" class="btn btn-sm btn-secondary" onclick="unpublishInformasi({{ $info->id }})">
                                <i class="fas fa-times"></i>
                            </button>
                        @endif
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusInformasi{{ $info->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Status Badge -->
                <span class="badge 
                    @if($info->status == 'published') 
                        bg-success 
                    @else 
                        bg-warning text-dark 
                    @endif mb-2">
                    {{ ucfirst($info->status) }}
                </span>

                <!-- Information Content -->
                <h2 class="mb-3">{{ $info->judul }}</h2>
                <p class="text-muted small mb-3">
                    <i class="far fa-calendar-alt"></i> {{ date('d M Y', strtotime($info->tanggal_posting)) }}
                </p>
                <div class="informasi-content">
                    {!! nl2br(e($info->isi)) !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal Tambah Informasi -->
<div class="modal fade" id="modalTambahInformasi" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('informasi.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Isi Informasi</label>
                        <textarea name="isi" class="form-control" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
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

<!-- Modal Edit dan Hapus -->
@foreach ($informasi as $info)
    <!-- Modal Edit Informasi -->
    <div class="modal fade" id="modalEditInformasi{{ $info->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('informasi.update', $info->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $info->judul }}" required>
                        </div>
                        <div class="form-group">
                            <label>Isi Informasi</label>
                            <textarea name="isi" class="form-control" rows="10" required>{{ $info->isi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="draft" {{ $info->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ $info->status == 'published' ? 'selected' : '' }}>Published</option>
                            </select>
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

    <!-- Modal Hapus Informasi -->
    <div class="modal fade" id="modalHapusInformasi{{ $info->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus informasi ini?</p>
                    <form action="{{ route('informasi.destroy', $info->id) }}" method="POST">
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

<script>
    function publishInformasi(id) {
        if (confirm('Apakah Anda yakin ingin mempublish informasi ini?')) {
            fetch(`/informasi/${id}/publish`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    location.reload();
                } else {
                    alert('Gagal mempublish informasi');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mempublish informasi');
            });
        }
    }

    function unpublishInformasi(id) {
        if (confirm('Apakah Anda yakin ingin mengunpublish informasi ini?')) {
            fetch(`/informasi/${id}/unpublish`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    location.reload();
                } else {
                    alert('Gagal mengunpublish informasi');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengunpublish informasi');
            });
        }
    }
</script>

<style>
    .informasi-content {
        line-height: 1.8;
        font-size: 1.05rem;
    }
    .informasi-content h2 {
        font-size: 1.5rem;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
    .informasi-content p {
        margin-bottom: 1rem;
    }
    .informasi-content strong {
        font-weight: 600;
    }
</style>
@endsection