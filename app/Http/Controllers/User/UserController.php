<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;
    
class UserController extends Controller
{
    public function dashboard()
    {
        $buku = Buku::latest()->take(4)->get(); // Ambil 4 buku terbaru
        return view('User.pages.dashboard', compact('buku'));
    }

    public function semuaBuku()
    {
        $buku = Buku::orderBy('judul')->paginate(12);
        return view('User.pages.buku.semua', compact('buku'));
    }

    public function detailBuku($id)
    {
        $buku = Buku::findOrFail($id);
        return view('User.pages.buku.detail', compact('buku'));
    }

    public function cariBuku(Request $request)
    {
        $keyword = $request->input('q');
        $buku = Buku::where('judul', 'like', "%$keyword%")
                  ->orWhere('penulis', 'like', "%$keyword%")
                  ->paginate(12);
                  
        return view('User.pages.buku.cari', compact('buku', 'keyword'));
    }
    public function kategoriBuku($kategori)
    {
        $buku = Buku::where('kategori', $kategori)->paginate(12);
        return view('User.pages.buku.kategori', compact('buku', 'kategori'));
    }
        public function informasi()
        {
            return view('User.pages.informasi');
        }
    
}