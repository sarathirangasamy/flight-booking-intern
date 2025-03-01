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
        $bookings = Booking::all();
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
        //
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
    $userCount = User::count();
    $pendingBookings = Booking::where('status', 'Pending')->count();
    $confirmedBookings = Booking::where('status', 'Confirmed')->count();
    $cancelledBookings = Booking::where('status', 'Cancelled')->count();

    return view('admin.dashboard', compact('userCount', 'pendingBookings', 'confirmedBookings', 'cancelledBookings'));
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
