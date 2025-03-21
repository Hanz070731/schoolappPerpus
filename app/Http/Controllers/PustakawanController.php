<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    /**
     * Menampilkan daftar pustakawan.
     */
    public function index()
    {
        $pustakawan = Pustakawan::all();
        return view('admin.pages.perpustakaan.v_pustakawan', compact('pustakawan'));
    }

    /**
     * Menyimpan data pustakawan baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|unique:pustakawan,email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Batasan file gambar
        ]);

        // Simpan data pustakawan
        $data = $request->except('foto');

        // Jika ada file foto, simpan sebagai base64
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoBase64 = base64_encode(file_get_contents($foto->path()));
            $data['foto'] = $fotoBase64;
        }

        Pustakawan::create($data);

        return redirect()->route('pustakawan.index')->with('success', 'Pustakawan berhasil ditambahkan.');
    }

    /**
     * Mengupdate data pustakawan.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|unique:pustakawan,email,' . $id . ',idpustakawan',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Batasan file gambar
        ]);

        $pustakawan = Pustakawan::findOrFail($id);
        $data = $request->except('foto');

        // Jika ada file foto baru, simpan sebagai base64
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoBase64 = base64_encode(file_get_contents($foto->path()));
            $data['foto'] = $fotoBase64;
        }

        $pustakawan->update($data);

        return redirect()->route('pustakawan.index')->with('success', 'Pustakawan berhasil diperbarui.');
    }

    /**
     * Menghapus data pustakawan.
     */
    public function destroy($id)
    {
        $pustakawan = Pustakawan::findOrFail($id);
        $pustakawan->delete();

        return redirect()->route('pustakawan.index')->with('success', 'Pustakawan berhasil dihapus.');
    }
}