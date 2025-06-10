<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bookings = Booking::all();
        return response()->json($bookings);
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
        $token = md5($request->email . "canadarocks");
        if (!$request->token === $token) {
            return response()->json(['error' => 'Token is not valid'], 401);
        }
        $validator = Validator::make($request->all(), [
            'trip_id' => 'required|exists:trips,id',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'number_of_people' => 'required|integer|min:1',
            'duration_days' => 'required|integer|min:1',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        $expectedToken = md5($request->email . 'canadarocks');
        if ($request->token !== $expectedToken) {
            return response()->json(['error' => 'Invalid token'], 403);
        } else {
            $booking = Booking::create([
                'trip_id' => $request->trip_id,
                'name' => $request->name,
                'email' => $request->email,
                'number_of_people' => $request->number_of_people,
                'duration_days' => $request->duration_days,
                'status' => 'pending',
            ]);
        }

        return response()->json("Booking created successfully, $booking", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
        return response()->json(null, 204);
    }
}
