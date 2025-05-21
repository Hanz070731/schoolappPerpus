<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Buku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the user dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get popular books (5 items for first row)
        $popularBooks = Buku::orderBy('created_at', 'desc')->take(5)->get();
        
        // Get latest books (5 items for second row)
        $latestBooks = Buku::latest()->take(5)->get();
        
        // Get books by category
        $kesusastraanBooks = Buku::where('judul_seri', 'like', '%kesusastraan%')->limit(4)->get();
        $ilmuPengetahuanBooks = Buku::where('judul_seri', 'like', '%ilmu pengetahuan%')->limit(4)->get();
        $ilmuTerapanBooks = Buku::where('judul_seri', 'like', '%ilmu terapan%')->limit(4)->get();

        return view('user.pages.dashboard', [
            'popularBooks' => $popularBooks,
            'latestBooks' => $latestBooks,
            'kesusastraanBooks' => $kesusastraanBooks,
            'ilmuPengetahuanBooks' => $ilmuPengetahuanBooks,
            'ilmuTerapanBooks' => $ilmuTerapanBooks,
        ]);
    }
    public function show($idbuku)
    {
        $book = Buku::findOrFail($idbuku);
        return view('user.pages.book_detail', compact('book'));
    }
}