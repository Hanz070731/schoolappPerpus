<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Method untuk menampilkan daftar buku
    public function index()
    {
        $buku = Buku::all();
        return view('admin.pages.perpustakaan.v_buku', compact('buku'));
    }

    // Method untuk menyimpan data buku baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'edisi' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'deskripsi_fisik' => 'required|string|max:255',
            'judul_seri' => 'nullable|string|max:255',
            'no_panggil' => 'required|string|max:255',
            'jumlah_buku' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data buku
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->deskripsi = $request->deskripsi;
        $buku->edisi = $request->edisi;
        $buku->isbn = $request->isbn;
        $buku->deskripsi_fisik = $request->deskripsi_fisik;
        $buku->judul_seri = $request->judul_seri;
        $buku->no_panggil = $request->no_panggil;
        $buku->jumlah_buku = $request->jumlah_buku;

        // Simpan gambar sebagai base64
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarBase64 = base64_encode(file_get_contents($gambar->path()));
            $buku->gambar = $gambarBase64;
        }

        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    // Method untuk mengupdate data buku
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'edisi' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'deskripsi_fisik' => 'required|string|max:255',
            'judul_seri' => 'nullable|string|max:255',
            'no_panggil' => 'required|string|max:255',
            'jumlah_buku' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari data buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // Update data
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->deskripsi = $request->deskripsi;
        $buku->edisi = $request->edisi;
        $buku->isbn = $request->isbn;
        $buku->deskripsi_fisik = $request->deskripsi_fisik;
        $buku->judul_seri = $request->judul_seri;
        $buku->no_panggil = $request->no_panggil;
        $buku->jumlah_buku = $request->jumlah_buku;

        // Update gambar sebagai base64 jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarBase64 = base64_encode(file_get_contents($gambar->path()));
            $buku->gambar = $gambarBase64;
        }

        // Simpan perubahan
        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    // Method untuk menghapus data buku
    public function destroy($id)
    {
        // Cari data buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // Hapus data buku
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus.');
    }
}