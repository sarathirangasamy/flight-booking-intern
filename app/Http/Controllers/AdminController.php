<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with(['service', 'user'])
        ->get();
        return view('admin.bookings', compact('bookings'));
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
        // Validate request data
        $validated = $request->validate([
            'type' => 'required|string|in:flight,hotel,car_rental',
    
            // Flight Fields
            'name' => 'nullable|string',
            'trip_type' => 'nullable|string|in:one_way,return',
            'leaving_from' => 'nullable|string',
            'departure_date' => 'nullable|date',
            'return_date' => 'nullable|date',
            'class_type' => 'nullable|string',
            'amount' => 'nullable|numeric|min:0',
    
            // Hotel Fields
            'going_to' => 'nullable|string',
            'checkin_date' => 'nullable|date',
            'checkout_date' => 'nullable|date',
            'adults' => 'nullable|integer|min:1',
            'children' => 'nullable|integer|min:0',
            'rooms' => 'nullable|integer|min:1',
            'offer' => 'nullable|integer|min:0|max:100',
            'cancellation_date' => 'nullable|date',
            'discount_amount' => 'nullable|numeric|min:0',
    
            // Car Rental Fields
            'pickup_location' => 'nullable|string',
            'drop_location' => 'nullable|string',
            'car_type' => 'nullable|string',
            'facility' => 'nullable|string',
            'offer' => 'nullable|integer|min:0|max:100',
            'cancellation_date' => 'nullable|date',
            'discount_amount' => 'nullable|numeric|min:0',
        ]);
    
        // // Convert facility (comma-separated) into JSON array
        if (!empty($validated['facility'])) {
            $validated['facility'] = json_encode(explode(',', $validated['facility']));
        }
    
        // Save booking record
        $booking = new Booking();
        $booking->type = $validated['type'];
        
        // Flight fields
        if ($validated['type'] == 'flight') {
            $booking->name = $validated['name'];
            $booking->trip_type = $validated['trip_type'];
            $booking->leaving_from = $validated['leaving_from'];
            $booking->departure_date = $validated['departure_date'];
            $booking->return_date = $validated['return_date'];
            $booking->class_type = $validated['class_type'];
            $booking->amount = $validated['amount'];
        }
    
        // Hotel fields
        if ($validated['type'] == 'hotel') {
            $booking->going_to = $validated['going_to'];
            $booking->checkin_date = $validated['checkin_date'];
            $booking->checkout_date = $validated['checkout_date'];
            $booking->adults = $validated['adults'];
            $booking->children = $validated['children'];
            $booking->rooms = $validated['rooms'];
            $booking->offer = $validated['offer'];
            $booking->cancellation_date = $validated['cancellation_date'];
            $booking->amount = $validated['amount'];
            $booking->discount_amount = $validated['discount_amount'];
        }
    
        // Car Rental fields
        if ($validated['type'] == 'car_rental') {
            $booking->pickup_location = $validated['pickup_location'];
            $booking->drop_location = $validated['drop_location'];
            $booking->car_type = $validated['car_type'];
            $booking->facility = $validated['facility'];
            $booking->offer = $validated['offer'];
            $booking->cancellation_date = $validated['cancellation_date'];
            $booking->amount = $validated['amount'];
            $booking->discount_amount = $validated['discount_amount'];
        }
    
        $booking->save();
    
        return redirect()->back()->with('success', 'Booking successfully created!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Show the admin dashboard with all bookings.
     */
    public function dashboard()
{
    $userCount = User::where('role','=','user')->count();
    $pendingBookings = Booking::where('status', 'Pending')->count();
    $confirmedBookings = Booking::where('status', 'Confirmed')->count();
    $completedBookings = Booking::where('status', 'Completed')->count();
    $cancelledBookings = Booking::where('status', 'Cancelled')->count();

    return view('admin.dashboard', compact('userCount', 'pendingBookings', 'confirmedBookings', 'cancelledBookings','completedBookings'));
}




    public function users()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.users', compact('users'));
    }

    public function updateBookingStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();
    
        return redirect()->route('admin.dashboard')->with('success', 'Booking status updated successfully!');
    }
}
