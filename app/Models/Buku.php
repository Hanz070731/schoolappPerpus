<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'buku';

    protected $primaryKey = 'idbuku';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'judul', 'penulis', 'deskripsi', 'edisi', 'isbn', 'deskripsi_fisik', 'judul_seri', 'no_panggil', 'jumlah_buku', 'gambar'
    ];

    // Kolom yang tidak boleh diisi (guarded)
    protected $guarded = [];
}