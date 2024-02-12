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

        //dd($credentials); 

        if (Auth::attempt($credentials)) {
            return redirect()->route('welcome');
        }

        
        dd(Auth::user()); 
        return redirect()->route('login')->with('error', 'Credenciales incorrectas. Por favor, inténtelo de nuevo.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function welcome()
    {
        return view('welcome');
    }


}

