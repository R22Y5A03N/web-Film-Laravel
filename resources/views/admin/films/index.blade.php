<!-- resources/views/admin/films/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="my-5 ">Daftar Film</h1>
    <a href="{{ route('admin.films.create') }}" class="btn btn-primary mb-3">Tambah Film</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Film</th>
                <th>Bintang Film</th>
                <th>Sutradara</th>
                <th>Genre</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $film->judul_film }}</td>
                <td>{{ $film->bintang_film }}</td>
                <td>{{ $film->sutradara }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->tahun_diterbitkan }}</td>
                <td>
                    <a href="{{ route('admin.films.edit', $film->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.films.destroy', $film->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus film ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
