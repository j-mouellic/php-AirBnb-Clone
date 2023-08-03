<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingFormRequest;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        return view('', [
            'bookings' => Booking::all()
        ]);
    }

    public function show(Booking $booking)
    {
        return view("", [
            "booking" => $booking
        ]);
    }

    public function create()
    {
        $booking = new Booking();
        // renvoie vers méthode store
        return view('', ['booking' => $booking]);
    }

    public function store(BookingFormRequest $request, Booking $booking)
    {
        $booking->create($request->validated());
        // renvoie vers route de show.booking
        return to_route('')->with('success', "Votre réservation a été prise en compte");
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
