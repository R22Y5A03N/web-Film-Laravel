<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua tahun unik dari tabel films
        $years = Film::select('tahun_diterbitkan')->distinct()->orderBy('tahun_diterbitkan', 'desc')->get();

        // Query untuk mengambil data film
        $films = Film::query();

        // Filter berdasarkan tahun jika input ada
        if ($request->has('tahun_diterbitkan') && $request->tahun_diterbitkan) {
            $films->where('tahun_diterbitkan', $request->tahun_diterbitkan);
        }

        // Filter berdasarkan genre jika input ada
        if ($request->has('genre') && $request->genre != '') {
            // Menambahkan filter untuk genre
            $films->where('genre', 'like', '%' . $request->genre . '%');
        }

        // Dapatkan data film
        $films = $films->get();

        // Ambil daftar genre yang unik dari semua film yang ada
        $genres = Film::all()->flatMap(function ($film) {
            return explode(',', $film->genre); // Mengasumsikan genre dipisahkan dengan koma
        })->unique()->values(); // Mengambil genre yang unik

        // Paginate genres jika jumlahnya lebih dari 10
        $genres = $genres->take(10);  // Ambil maksimal 10 genre pertama
        $remainingGenres = $genres->count() > 10 ? $genres->slice(10) : collect(); // Sisanya jika ada lebih dari 10

        // Kirim data ke view
        return view('user.films.index', compact('films', 'years', 'genres', 'remainingGenres'));
    }
}
