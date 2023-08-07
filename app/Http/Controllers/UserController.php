<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = User::first();
        $bookings = $user->bookings;
        $properties = $user->properties;
        return view('dashboard', ['bookings' => $bookings, "properties" => $properties, "user" => $user]);
    }
}
