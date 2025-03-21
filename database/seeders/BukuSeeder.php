<?php

use Illuminate\Database\Seeder;
use App\Models\Buku;
class BukuSeeder extends Seeder
{
    public function run()
    {
        Buku::create([
            'judul' => 'Pemrograman Laravel untuk Pemula',
            'penulis' => 'John Doe',
            'deskripsi' => 'Buku ini membahas dasar-dasar pemrograman menggunakan framework Laravel.',
            'edisi' => 'Edisi Pertama',
            'isbn' => '978-1234567890',
            'deskripsi_fisik' => 'xii + 300 halaman',
            'judul_seri' => 'Seri Pemrograman Web',
            'no_panggil' => '005.1 DOE',
            'jumlah_buku' => 10,
            'gambar' => NULL,
        ]);

        Buku::create([
            'judul' => 'Belajar Machine Learning dengan Python',
            'penulis' => 'Jane Smith',
            'deskripsi' => 'Buku ini mengajarkan konsep machine learning menggunakan bahasa pemrograman Python.',
            'edisi' => 'Edisi Kedua',
            'isbn' => '978-0987654321',
            'deskripsi_fisik' => 'xiv + 400 halaman',
            'judul_seri' => NULL,
            'no_panggil' => '006.31 SMI',
            'jumlah_buku' => 5,
            'gambar' => NULL,
        ]);
    }
}
