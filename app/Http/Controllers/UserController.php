<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $bookings = $user->bookings;
        $properties = $user->properties;
        return view('dashboard', ['bookings' => $bookings, "properties" => $properties, "user" => $user]);
    }

    public function create()
    {
        return view('newUser', ["user" => new User]);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        Auth::login($user);
        return to_route("user.dashboard", $user)->with("success", "Votre compte a été créé");
    }
}
