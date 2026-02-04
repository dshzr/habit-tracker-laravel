<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($attributes, $request->boolean('remember-me'))) {
            throw ValidationException::withMessages([
                'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
            ]);
        }

        $request->session()->regenerate();

        return redirect('/')->with('success', 'Bem-vindo de volta!');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Até breve!');
    }
}
