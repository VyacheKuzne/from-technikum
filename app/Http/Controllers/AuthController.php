<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_client;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Аутентификация успешна
            return redirect()->intended('/');
        }

        // Аутентификация не удалась
        return back()->withInput()->withErrors(['email' => 'Неверный email или пароль']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}