<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-service');

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
        $booking = new Service();
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
            $booking->facility = json_encode($validated['facility']);
        }
    
        // Car Rental fields
        if ($validated['type'] == 'car_rental') {
            $booking->pickup_location = $validated['pickup_location'];
            $booking->drop_location = $validated['drop_location'];
            $booking->car_type = json_encode($validated['car_type']);
            $booking->facility = json_encode($validated['facility']);
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
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
