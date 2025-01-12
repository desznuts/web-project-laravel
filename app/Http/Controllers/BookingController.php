<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tickets' => 'required|integer|min:1',
            'payment_method' => 'required|string|max:50',
            'special_requests' => 'nullable|string',
            'card_title' => 'required|string|max:255',
            'card_date' => 'required|string|max:255',
            'card_price' => 'required|numeric',
            'total_price' => 'required|numeric',
        ]);

        $booking = Booking::create($validated);

        return response()->json(['message' => 'Booking successful', 'booking' => $booking], 201);
    }
}