<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\RedirectResponse;


class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->checkRemember)) {
            $request->session()->regenerate();
            return redirect()->intended('obat_user');
        }

        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan inputan anda'
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
