<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.films.index');
            } elseif ($user->role === 'user') {
                return redirect()->route('user.films.index');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function showRegisterForm()
    {
        return view('Auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'user'; // Default role untuk pendaftaran baru

        User::create($data);

        return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
