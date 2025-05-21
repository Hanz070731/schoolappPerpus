<?php

namespace App\Models\User;

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
        'judul', 'penulis', 'deskripsi', 'edisi', 'isbn', 
        'deskripsi_fisik', 'judul_seri', 'no_panggil', 
        'jumlah_buku', 'gambar'
    ];

    // Kolom yang tidak boleh diisi (guarded)
    protected $guarded = [];

    /**
     * Get the URL for the book's cover image.
     *
     * @return string|null
     */
    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return 'data:image/jpeg;base64,' . $this->gambar;
        }
        return null;
    }

    /**
     * Scope a query to only include popular books.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePopular($query)
    {
        return $query->orderBy('created_at', 'desc')->limit(8);
    }

    /**
     * Scope a query to only include latest books.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc')->limit(4);
    }
}