@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="my-4 text-center text-light fw-bold">
        <i class="fas fa-film me-2 mt-5"></i>Daftar Film
    </h1>
    <form action="{{ route('films.index') }}" method="GET" class="mb-4">
        <div class="container">
            <div class="category-pills">
                <!-- Pill untuk 'All' genre -->
                <a href="{{ route('films.index') }}" class="category-pill {{ request('genre') == '' ? 'active' : '' }}">
                    All
                </a>
    
                <!-- Looping genres yang sudah unik -->
                @foreach ($genres as $genre)
                    <a href="{{ route('films.index', ['genre' => $genre]) }}" 
                       class="category-pill {{ request('genre') == $genre ? 'active' : '' }}">
                        {{ ucfirst($genre) }}
                    </a>
                @endforeach
            </div>
    
            <!-- Navigasi untuk genre lebih dari 10 -->
            @if ($remainingGenres->isNotEmpty())
                <div class="mt-3 text-center">
                    <button type="button" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#remainingGenres">
                        <i class="fas fa-chevron-down"></i> Show More
                    </button>
                    <div id="remainingGenres" class="collapse mt-2">
                        <div class="category-pills">
                            @foreach ($remainingGenres as $genre)
                                <a href="{{ route('films.index', ['genre' => $genre]) }}" 
                                   class="category-pill {{ request('genre') == $genre ? 'active' : '' }}">
                                    {{ ucfirst($genre) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </form>
    

    <!-- Enhanced Filter Section -->
    <form action="{{ route('films.index') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="input-group">
                    <span class="input-group-text text-light" style="background-color: red">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                    <select name="tahun_diterbitkan" class="form-select">
                        <option value="">-- Filter Berdasarkan Tahun --</option>
                        @foreach ($years as $year)
                        <option value="{{ $year->tahun_diterbitkan }}"
                            {{ request('tahun_diterbitkan') == $year->tahun_diterbitkan ? 'selected' : '' }}>
                            {{ $year->tahun_diterbitkan }}
                        </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn text-white" style="background-color: red">
                        <i class="fas fa-filter me-1 text-white"></i> Filter
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- Enhanced Film Cards -->
    <div class="row g-4 justify-content-center mt-5">
        @forelse ($films as $film)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="card h-100 bg-dark border-0 shadow film-card" 
                 style="cursor: pointer; transition: transform 0.2s;"
                 onmouseover="this.style.transform='scale(1.05)'"
                 onmouseout="this.style.transform='scale(1)'"
                 data-bs-toggle="modal" 
                 data-bs-target="#filmModal{{ $film->id }}">
                <div class="position-relative">
                    <img src="{{ asset('storage/' . $film->gambar) }}" 
                         class="card-img-top" 
                         alt="{{ $film->judul_film }}"
                         style="height: 200px; object-fit: cover;">
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge bg-danger">
                            <i class="fas fa-star me-1"></i>{{ $film->rating }}
                        </span>
                    </div>
                </div>
                <div class="card-body bg-dark text-white p-2">
                    <h6 class="card-title text-center mb-1 fw-bold">{{ $film->judul_film }}</h6>
                    <p class="card-text text-center text-white small mb-0">
                        {{ $film->tahun_diterbitkan }}
                    </p>
                </div>
                
            </div>
        </div>

        <!-- Enhanced Modal -->
        <div class="modal fade" id="filmModal{{ $film->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header border-bottom border-danger">
                        <h5 class="modal-title">
                            <i class="fas fa-film me-2"></i>{{ $film->judul_film }}
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('storage/' . $film->gambar) }}" 
                                     class="img-fluid rounded shadow" 
                                     alt="{{ $film->judul_film }}">
                            </div>
                            <div class="col-md-7">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-danger me-2">
                                        <i class="fas fa-star me-1"></i>{{ $film->rating }}
                                    </span>
                                    <span class="badge bg-secondary">
                                        <i class="fas fa-calendar me-1"></i>{{ $film->tahun_diterbitkan }}
                                    </span>
                                </div>

                                <div class="mb-3">
                                    <h6 class="text-danger">
                                        <i class="fas fa-user-friends me-2"></i>Bintang Film
                                    </h6>
                                    <p>{{ $film->bintang_film }}</p>
                                </div>

                                <div class="mb-3">
                                    <h6 class="text-danger">
                                        <i class="fas fa-video me-2"></i>Sutradara
                                    </h6>
                                    <p>{{ $film->sutradara }}</p>
                                </div>

                                <div class="mb-3">
                                    <h6 class="text-danger">
                                        <i class="fas fa-tags me-2"></i>Genre
                                    </h6>
                                    <p>{{ $film->genre }}</p>
                                </div>

                                <!-- Added buttons for interaction -->
                                <div class="d-flex gap-2 mt-4">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-play me-2"></i>Watch Now
                                    </button>
                                    <button class="btn btn-outline-light">
                                        <i class="fas fa-plus me-2"></i>Add to Watchlist
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-danger text-center" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>Film tidak ditemukan.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection