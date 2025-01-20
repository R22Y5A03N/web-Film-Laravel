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
}
