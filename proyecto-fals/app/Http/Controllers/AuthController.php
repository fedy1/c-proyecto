<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('welcome');
        }

        return redirect()->route('login')->with('error', 'Credenciales incorrectas. Por favor, inténtelo de nuevo.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function welcome()
    {
        $user = Auth::user();
        $gender = $user->gender; // Ajusta esto según el nombre real del campo en tu modelo de usuario que almacena el género.

        $welcomeMessage = 'Bienvenid' . ($gender == 'male' ? 'o' : 'a') . ' ' . $user->name . ', su rol es ' . $user->role->role_name;

        return view('welcome', compact('welcomeMessage'));
    }
}
