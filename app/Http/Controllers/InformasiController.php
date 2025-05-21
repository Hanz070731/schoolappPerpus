<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::orderBy('tanggal_posting', 'desc')->get();
        return view('admin.pages.perpustakaan.v_informasi', compact('informasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'status' => 'required|in:draft,published'
        ]);

        Informasi::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal_posting' => now(),
            'status' => $request->status
        ]);

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'status' => 'required|in:draft,published'
        ]);

        $informasi = Informasi::findOrFail($id);
        $informasi->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'status' => $request->status
        ]);

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dihapus');
    }

    public function publish($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->update(['status' => 'published']);

        return response()->json(['success' => true]);
    }

    public function unpublish($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->update(['status' => 'draft']);

        return response()->json(['success' => true]);
    }
}