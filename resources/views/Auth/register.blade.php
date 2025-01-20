<!DOCTYPE html>
<html>
<head>
    <title>BoxMovie - Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1e2a3a 0%, #0f172a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .register-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            color: white;
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.1);
        }
        
        .btn-danger {
            background: linear-gradient(45deg, #ff4b2b, #ff416c);
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 75, 43, 0.4);
        }
        
        .form-label {
            color: rgba(255, 255, 255, 0.8);
        }
        
        a {
            color: #ff416c !important;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        a:hover {
            color: #ff4b2b !important;
            text-decoration: underline;
        }

        .password-requirements {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.6);
            margin-top: 0.5rem;
        }

        .site-title {
            font-size: 3.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 2rem;
            background: linear-gradient(45deg, #ff4b2b, #ff416c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(255, 75, 43, 0.3);
            letter-spacing: 2px;
        } 
    </style>
</head>
<body class="text-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h5 class="site-title">BoxMovie</h5>
                <div class="register-card">
                    <h3 class="text-center mb-4">Register</h3>
                    <form method="POST" action="/register">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Buat password">
                            <div class="password-requirements">
                                Password harus memiliki minimal 8 karakter
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Konfirmasi password">
                        </div>
                        <button type="submit" class="btn btn-danger w-100 py-2">Register</button>
                    </form>
                    <div class="mt-3 text-center">
                        <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>