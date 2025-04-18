<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Location;
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
        $services = Service::all();
        return view('admin.view-service', compact('services'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['FlightLocations'] = Location::where('type','=','flight')->get();
        $data['HotelLocations'] = Location::where('type','=','hotel')->get();
        $data['CarLocations'] = Location::where('type','=','car')->get();
        return view('admin.create-service',$data);

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
            'departure_date' => 'nullable|  date',
            'return_date' => 'nullable|date',
            'class_type' => 'nullable|string',
            'amount' => 'nullable|numeric|min:0',
            'no_of_days' => 'nullable|numeric|min:0',
    
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
            'car_type' => 'nullable|array',
            'car_type.*' => 'string',
            'facility' => 'nullable|array',
            'facility.*' => 'string',
            'offer' => 'nullable|integer|min:0|max:100',
            'cancellation_date' => 'nullable|date',
            'discount_amount' => 'nullable|numeric|min:0',
        ]);
    
        // // Convert facility (comma-separated) into JSON array
    
        // Save booking record
        $booking = new Service();
        $booking->type = $validated['type'];
        
        // Flight fields
        if ($validated['type'] == 'flight') {
            $booking->going_to = $validated['going_to'];
            $booking->trip_type = $validated['trip_type'];
            $booking->leaving_from = $validated['leaving_from'];
            $booking->departure_date = $validated['departure_date'];
            $booking->return_date = $validated['return_date'];
            $booking->class_type = $validated['class_type'];
            $booking->amount = $validated['amount'];
            $booking->discount_amount = $validated['discount_amount'];
            $booking->no_of_days = $validated['no_of_days'];
            // $booking->adults = $validated['adults'];
            // $booking->children = $validated['children'];
            // $booking->rooms = $validated['rooms'];
        }
    
        // Hotel fields
        if ($validated['type'] == 'hotel') {
            $booking->name = $validated['name'];
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
            $booking->facility = !empty($validated['facility']) ? json_encode($validated['facility']) : null;

        }
    
        // Car Rental fields
        if ($validated['type'] == 'car_rental') {
            $booking->name = $validated['name'];
            $booking->pickup_location = $validated['pickup_location'];
            $booking->drop_location = $validated['drop_location'];
            $booking->car_type = !empty($validated['car_type']) ? json_encode($validated['car_type']) : null;
            $booking->facility = !empty($validated['facility']) ? json_encode($validated['facility']) : null;
            $booking->offer = $validated['offer'];
            $booking->cancellation_date = $validated['cancellation_date'];
            $booking->amount = $validated['amount'];
            $booking->discount_amount = $validated['discount_amount'];
        }
    
        $booking->save();
    
        return redirect()->route('service')->with('success', 'Service successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }


        public function showFlightDetails($id)
    {
        $flight = Service::with(['ratings.user']) 
            ->withCount('ratings as total_reviews')
            ->withSum('ratings as total_rating', 'rating')
            ->findOrFail($id);

        $ratings_count = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratings_count[$i] = $flight->ratings()->where('rating', $i)->count();
        }

        return view('flight.show', compact('flight', 'ratings_count'));
    }


    public function showHotelDetails($id)
    {
        $hotel = Service::with(['ratings.user']) 
            ->withCount('ratings as total_reviews')
            ->withSum('ratings as total_rating', 'rating')
            ->findOrFail($id);
    
        // Calculate rating count for each star (1 to 5)
        $ratings_count = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratings_count[$i] = $hotel->ratings()->where('rating', $i)->count();
        }
    
        return view('hotel.show', compact('hotel', 'ratings_count'));
    }
    
    

        public function showCarDetails($id)
    {
        $car = Service::with(['ratings.user']) 
            ->withCount('ratings as total_reviews')
            ->withSum('ratings as total_rating', 'rating')
            ->findOrFail($id);

            $ratings_count = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratings_count[$i] = $car->ratings()->where('rating', $i)->count();
        }

        return view('car.show', compact('car','ratings_count'));
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
    public function destroy($id)
    {
        $service = Service::findOrFail($id); 
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully!');
    }
}
