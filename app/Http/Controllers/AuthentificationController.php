<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthentificationFormRequest;
use Illuminate\Support\Facades\Auth;



class AuthentificationController extends Controller
{
    public function showLoginForm()
    {
        return view('loginForm');
    }

    public function Login(AuthentificationFormRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('user.dashboard'));
        }

        return back()->withErrors([
            'email' => "Identifiants incorrects"
        ])->onlyInput('email');
    }

    public function Logout()
    {
        Auth::logout();
        return to_route('property.index')->with('success', 'Déconnexion réussie');
    }
}
