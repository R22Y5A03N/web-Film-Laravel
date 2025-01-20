<!-- resources/views/admin/films/edit.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Film</h1>
    <form action="{{ route('admin.films.update', $film->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul_film" class="form-label">Judul Film</label>
            <input type="text" name="judul_film" id="judul_film" value="{{ $film->judul_film }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="bintang_film" class="form-label">Bintang Film</label>
            <input type="text" name="bintang_film" id="bintang_film" value="{{ $film->bintang_film }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sutradara" class="form-label">Sutradara</label>
            <input type="text" name="sutradara" id="sutradara" value="{{ $film->sutradara }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" id="genre" value="{{ $film->genre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tahun_diterbitkan" class="form-label">Tahun Diterbitkan</label>
            <input type="number" name="tahun_diterbitkan" id="tahun_diterbitkan" value="{{ $film->tahun_diterbitkan }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            @if($film->gambar)
                <img src="{{ asset('storage/' . $film->gambar) }}" alt="Gambar Film" class="img-thumbnail mt-2" width="150">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
