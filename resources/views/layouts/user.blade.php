<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Bioskop - Your Ultimate Movie Destination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-dark text-light">
    <!-- Enhanced Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" style="color: red" >
                <i class="fas fa-film me-2"></i>BoxMovie
            </a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#movies">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#upcoming">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#categories">Categories</a>
                    </li>
                </ul>
                <form class="d-flex me-3">
                    <input class="form-control search-bar" type="search" placeholder="Search movies...">
                </form>
                @if(auth()->check())
                    <div class="d-flex align-items-center">
                        <a href="/profile" class="btn btn-outline-light me-2">
                            <i class="fas fa-user me-1"></i> Profile
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn " style="background-color: red ">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-danger">
                        <i class="fas fa-sign-in-alt me-1"></i> Login
                    </a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Enhanced Hero Section -->
    <header id="home" class="hero-header text-light text-center py-5" style="height: 100vh;">
        <div class="container text-start" style="margin-top: 100px">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Temukan Film Luar Biasa</h1>
                    <p class="lead fw-semibold mb-4">Streaming film terbaru, karya indie terbaik, dan favorit klasik.
                        Malam film sempurnamu dimulai di sini!</p>
                    <div class="d-flex flex-column align-items-start gap-3">
                        <a href="#movies" class="btn btn-danger btn-lg rounded-pill px-4 custom-btn">
                            <i class="fas fa-play me-2"></i> Watch Now
                        </a>
                        <a href="#upcoming" class="btn btn-outline-light btn-lg rounded-pill px-5 custom-btn">
                            <i class="fas fa-plus me-2"></i> Add list
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features Section -->
    <section class="features-section bg-dark">
        <div class="container ">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-tv"></i>
                    </div>
                    <h4>HD Streaming</h4>
                    <p>Nikmati kualitas jernih di semua perangkat</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <h4>Download & Watch</h4>
                    <p>Tonton secara offline di perangkat selulermu</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4>Multiple Languages</h4>
                    <p>Audio dan subtitle dalam berbagai bahasa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Movies Carousel -->
    <section class="py-5 bg-dark">
        <div class="container">
            <h2 class="text-white fw-bold mb-5 text-center">
                Trending Movies
            </h2>
            <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-4 overflow-hidden">
                    <div class="carousel-item active">
                        <img src="img/batman.jpg" class="d-block w-100" alt="Featured Movie 1"
                            style="height: 500px; object-fit: cover;">
                        <div class="carousel-caption">
                            <h3 class="fw-bold">The Dark Knight</h3>
                            <p class="mb-3">When the menace known as the Joker wreaks havoc on Gotham City, Batman must
                                face one of his greatest psychological and physical tests.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <span class="badge bg-danger">Action</span>
                                <span class="badge bg-danger">Drama</span>
                                <span class="badge bg-danger">Crime</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="img/joker2.jpg" class="d-block w-100" alt="Featured Movie 1"
                            style="height: 500px; object-fit: cover;">
                        <div class="carousel-caption">
                            <h3 class="fw-bold">The Dark Knight</h3>
                            <p class="mb-3">When the menace known as the Joker wreaks havoc on Gotham City, Batman must
                                face one of his greatest psychological and physical tests.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <span class="badge bg-danger">Action</span>
                                <span class="badge bg-danger">Drama</span>
                                <span class="badge bg-danger">Crime</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="img/milesmorales.jpg" class="d-block w-100" alt="Featured Movie 1"
                            style="height: 500px; object-fit: cover;">
                        <div class="carousel-caption">
                            <h3 class="fw-bold">The Dark Knight</h3>
                            <p class="mb-3">When the menace known as the Joker wreaks havoc on Gotham City, Batman must
                                face one of his greatest psychological and physical tests.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <span class="badge bg-danger">Action</span>
                                <span class="badge bg-danger">Drama</span>
                                <span class="badge bg-danger">Crime</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Latest Releases -->
    <section id="movies" class="py-5">
        <div class="container">
            <h2 class="text-white fw-bold mb-5 text-center">
                <i class="fas fa-film me-2"></i>Rilis Terbaru
            </h2>
            <div class="row g-4">
                <!-- Movie Card 1 -->
                <div class="col-md-3">
                    <div class="card bg-dark movie-card " style="border: 2px solid rgb(71, 71, 71)">
                        <span class="badge bg-danger category-badge">Action</span>
                        <img src="img/men.webp" class="card-img-top" alt="Movie 1">
                        <div class="card-body">
                            <h5 class="card-title text-light">Movie Title</h5>
                            <div class="rating-stars mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-light ms-2">4.5/5</span>
                            </div>
                            <button class="btn  btn-sm w-100" style="background-color: red ; color: white; ">
                                <i class=" fas fa-play me-2" style="color: white"></i>Watch Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark movie-card" style="border: 2px solid rgb(71, 71, 71)">
                        <span class="badge bg-danger category-badge">Action</span>
                        <img src="img/joker.webp" class="card-img-top" alt="Movie 1">
                        <div class="card-body">
                            <h5 class="card-title text-light">Movie Title</h5>
                            <div class="rating-stars mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-light ms-2">4.5/5</span>
                            </div>
                            <button class="btn btn-danger btn-sm w-100" style="background-color: red ; color: white;">
                                <i class="fas fa-play me-2" style="color: white"></i>Watch Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark movie-card" style="border: 2px solid rgb(71, 71, 71)">
                        <span class="badge bg-danger category-badge">Action</span>
                        <img src="img/squidgame.webp" class="card-img-top" alt="Movie 1">
                        <div class="card-body">
                            <h5 class="card-title text-light">Movie Title</h5>
                            <div class="rating-stars mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-light ms-2">4.5/5</span>
                            </div>
                            <button class="btn btn-danger btn-sm w-100" style="background-color: red ; color: white;">
                                <i class="fas fa-play me-2" style="color: white"></i>Watch Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark movie-card" style="border: 2px solid rgb(71, 71, 71)">
                        <span class="badge bg-danger category-badge">Action</span>
                        <img src="img/venom.webp" class="card-img-top" alt="Movie 1">
                        <div class="card-body">
                            <h5 class="card-title text-light">Movie Title</h5>
                            <div class="rating-stars mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-light ms-2">4.5/5</span>
                            </div>
                            <button class="btn btn-danger btn-sm w-100" style="background-color: red ; color: white;">
                                <i class="fas fa-play me-2" style="color: white"></i>Watch Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Add more movie cards -->
                <main class="container">
                    @yield('content')
                </main>

            </div>
        </div>
    </section>

    <!-- Mobile App Banner -->
    <section class="py-5" style="background: linear-gradient(45deg, #141414, #E50914);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Unduh Aplikasi Kami</h2>
                    <p class="mb-4">Tonton film dan acara favoritmu di mana saja dengan aplikasi mobile kami.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-dark"><i class="fab fa-apple me-2"></i>App Store</a>
                        <a href="#" class="btn btn-dark"><i class="fab fa-google-play me-2"></i>Play Store</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/mockup.png" alt="Mobile App" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>


    <!-- Newsletter Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-white fw-bold mb-4">
                        Stay Updated
                    </h2>
                    <p class="text-light mb-4">Berlangganan sekarang juga dan anda akan mendapatkan pembaruan film terbaru dan penawaran eksklusif!</p>
                    <form class="d-flex justify-content-center gap-2">
                        <input type="email" class="form-control w-50" placeholder="Enter your email">
                        <button class="btn btn-danger">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3" style="color: rgb(255, 0, 0)">BoxMovie</h5>
                    <p>
                        Destinasi terbaik untuk film dan acara TV. Streaming konten terbaru kapan saja, di mana saja.
                    </p>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Movies</a></li>
                        <li><a href="#" class="text-light text-decoration-none">TV Series</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3">Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Help Center</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Contact Us</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Connect With Us</h5>
                    <div class="social-links mb-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                    </div>
                    <p class="mb-1">Unduh Aplikasi Kami:</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-dark border"><i class="fab fa-apple me-2"></i>App Store</a>
                        <a href="#" class="btn btn-dark border"><i class="fab fa-google-play me-2"></i>Play Store</a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 BoxMovie. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/user.js') }}"></script>
</body>

</html>