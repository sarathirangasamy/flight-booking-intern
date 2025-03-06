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
        $bookings = Booking::with(['service', 'user'])
        ->where('user_id', Auth::id())
        ->get();

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
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to create a booking.');
        }

        // Check if the logged-in user is an admin
        if (Auth::user()->role === 'admin') {
            return redirect()->route('home')->with('error', 'Admin cannot create a booking.');
        }

        $departureDate = Carbon::parse($request->departure_date);
        $returnDate = $request->return_date ? Carbon::parse($request->return_date) : null;
    
        // Check if departure date is greater than return date
        if ($returnDate && $departureDate->greaterThan($returnDate)) {
            return redirect()->route('home')->with('error', 'Return date must be after the departure date.');

        }

        Booking::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id ?? null,
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'passport_number' => $request->passport_number,
            'dob' => $request->dob,
            'leaving_from' => $request->leaving_from,
            'going_to' => $request->going_to,
            'trip_type' => $request->trip_type,
            'departure_date' => $request->departure_date,
            'return_date' => $request->return_date,
            'amount' => $request->amount,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'amount' => $request->amount,
            'pickup_location' => $request->pickup_location,
            'drop_location' => $request->drop_location,
            'rental_date' => $request->rental_date,
            'status' => 'pending',
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



    public function carPage()
    {
        $carServices = Service::where('type', '=', 'car_rental')->get();
        return view('car', compact('carServices'));
    }

    public function booking()
    {
        if (!Auth::check()) {
            return redirect('/register');
        }
        return view('booking');
    }
}
