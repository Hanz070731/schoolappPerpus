<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Menampilkan halaman informasi.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data yang akan dikirim ke view
        $data = [
            'judulhalaman' => 'Informasi Aplikasi',
            'title' => 'Informasi',
            'informasi' => [
                'Aplikasi ini dirancang untuk memudahkan manajemen keuangan sekolah.',
                'Fitur utama meliputi manajemen siswa, guru, dan pembayaran SPP/DSP.',
                'Dikembangkan dengan Laravel dan AdminLTE.',
            ],
        ];

        // Mengembalikan view dengan data
        return view('admin.pages.perpustakaan.v_informasi', $data);
    }
}