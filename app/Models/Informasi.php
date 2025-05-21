<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'isi',
        'tanggal_posting',
        'status'
    ];

    protected $dates = ['tanggal_posting'];
}