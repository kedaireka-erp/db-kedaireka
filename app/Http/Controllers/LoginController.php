<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $credentials = $request->only("email", "password");

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/");
        }

        return back()->withErrors([
            "email" => "The provided credentials do not match our records.",
        ]);

        return redirect()->intended("/");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
