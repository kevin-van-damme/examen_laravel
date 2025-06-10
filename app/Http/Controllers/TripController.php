<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::with('bookings')
            ->orderBy('start_date')
            ->get()
            ->map(function ($trip) {
                $trip->confirmed_bookings = $trip->bookings->where('status', 'confirmed')->count();
                $trip->pending_bookings = $trip->bookings->where('status', 'pending')->count();
                $trip->cancelled_bookings = $trip->bookings->where('status', 'cancelled')->count();
                $trip->total_revenue = $trip->bookings
                    ->where('status', 'confirmed')
                    ->sum(fn($booking) => $booking->number_of_people * $trip->price_per_person);
                return $trip;
            });

        return view('trips', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $trip = Trip::create($request->all());
        return response()->json($trip, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return response()->json(null, 204);
    }
}
