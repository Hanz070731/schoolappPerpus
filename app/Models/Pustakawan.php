<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pustakawan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pustakawan'; // Nama tabel
    protected $primaryKey = 'idpustakawan'; // Primary key
    protected $fillable = [
        'nama',
        'jabatan',
        'email',
        'foto', // Kolom untuk menyimpan gambar dalam format base64
    ];

    // Tambahkan atribut yang tidak boleh diisi secara massal (jika ada)
    protected $guarded = [];
}
