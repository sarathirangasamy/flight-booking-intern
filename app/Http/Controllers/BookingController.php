<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        return view('booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'departure_date' => 'required|date',
        // ]);

        Booking::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'name' => $request->name,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
            'date' => $request->date,
            'status' => 'pending'
        ]);

        return redirect()->route('home')->with('success', 'Booking created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'status' => 'in:pending,confirmed,cancelled',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($request->all());

        return redirect()->route('booking')->with('success', 'Booking updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking')->with('success', 'Booking deleted successfully!');
    }

    public function home()
    {
        $flightsService = Service::where('type', '=', 'flight')->get();
        return view('home', compact('flightsService'));
    }


    public function filterFlights(Request $request)
    {
        $query = Service::where('type', 'flight');
    

        if (!empty($request->leaving_from)) {
            $query->where('leaving_from', $request->leaving_from);
        }
        
        if (!empty($request->going_to)) {
            $query->where('going_to', $request->going_to);
        }
        
        if (!empty($request->trip_type)) {
            $query->where('trip_type', $request->trip_type);
        }

        if (!empty($request->class_type)) {
            $query->where('class_type', $request->class_type);
        }
 
        if (!empty($request->going_to)) {
            $query->where('going_to', $request->going_to);
        }   
    
        if (!empty($request->adults)) {
            $query->where('adults', '>=', $request->adults);
        }
    
        if (!empty($request->children)) {
            $query->where('children', '>=', $request->children);
        }
    
        if (!empty($request->rooms)) {
            $query->where('rooms', '>=', $request->rooms);
        }

        if (!empty($request->departure_date) && !empty($request->return_date)) {
            $departureDate = Carbon::parse($request->departure_date);
            $returnDate = Carbon::parse($request->return_date);
    
            if ($departureDate->lte($returnDate)) {
                $query->whereBetween('departure_date', [$departureDate, $returnDate]);
            }
        }

        $flightsService = $query->get();
    
        return response()->json([
            'flights' => $flightsService
        ]);
    }



    public function hotelPage()
    {
        $hotelService = Service::where('type', '=', 'hotel')->get();
        return view('hotel', compact('hotelService'));
    }


    public function filterHotel(Request $request)
    {
        $query = Service::where('type', 'hotel');
    
        if (!empty($request->going_to)) {
            $query->where('going_to', $request->going_to);
        }
        
        if (!empty($request->adults)) {
            $query->where('adults', '>=', $request->adults);
        }
    
        if (!empty($request->children)) {
            $query->where('children', '>=', $request->children);
        }
    
        if (!empty($request->rooms)) {
            $query->where('rooms', '>=', $request->rooms);
        }


        $hotelService = $query->get();
    
        return response()->json([
            'hotels' => $hotelService
        ]);
    }



    public function booking()
    {
        if (!Auth::check()) {
            return redirect('/register');
        }
        return view('booking');
    }
}
