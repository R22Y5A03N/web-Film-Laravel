<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('admin.films.index', compact('films'));
    }

    public function create()
    {
        return view('admin.films.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_film' => 'required|string|max:255',
            'bintang_film' => 'required|string|max:255',
            'sutradara' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'tahun_diterbitkan' => 'required|digits:4',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('films', 'public');
        }
        

        Film::create($validated);

        return redirect()->route('admin.films.index')->with('success', 'Film berhasil ditambahkan.');
    }

    public function edit(Film $film)
    {
        return view('admin.films.edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $validated = $request->validate([
            'judul_film' => 'required|string|max:255',
            'bintang_film' => 'required|string|max:255',
            'sutradara' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'tahun_diterbitkan' => 'required|digits:4',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('films', 'public');
        }
        
        $film->update($validated);

        return redirect()->route('admin.films.index')->with('success', 'Film berhasil diupdate.');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('admin.films.index')->with('success', 'Film berhasil dihapus.');
    }
}
