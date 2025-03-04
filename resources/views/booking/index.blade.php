@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Bookings</h2>

    @if($bookings->isEmpty())
        <p>No bookings found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Booking Type</th>
                    <th>User Email</th>
                    <th>Mobile Number</th>
                    <th>Amount</th>
                    <th>Details</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <!-- Common Details -->
                        <td>{{ ucwords(str_replace('_', ' ', $booking->service->type)) }}</td>
                        <td>{{ $booking->user->email ?? 'N/A' }}</td>
                        <td>{{ $booking->mobile_number ?? 'N/A' }}</td>
                        <td>₹{{ number_format($booking->service->amount, 2) }}</td>
                        

                        <!-- Type-Based Details -->
                        <td>
                            @if($booking->service->type == 'flight')
                                <strong>From:</strong> {{ $booking->leaving_from }} <br>
                                <strong>Departure:</strong> {{ $booking->departure_date }} <br>
                                <strong>Return:</strong> {{ $booking->return_date ?? '-' }} <br>
                                <strong>Class:</strong> {{ $booking->service->class_type }} <br>
                                <strong>Passport Number:</strong> {{ $booking->passport_number }} <br>
                                <strong>DOB:</strong> {{ $booking->dob }} <br>

                            @elseif($booking->service->type == 'hotel')
                                <strong>Location:</strong> {{ $booking->service->going_to }} <br>
                                <strong>Check-in:</strong> {{ $booking->checkin_date }} <br>
                                <strong>Check-out:</strong> {{ $booking->checkout_date }} <br>
                                <strong>Rooms:</strong> {{ $booking->service->rooms }} <br>
                                <strong>Facilities:</strong> {{ implode(', ', json_decode($booking->service->facility, true) ?? []) }} <br>

                            @elseif($booking->service->type == 'car_rental')
                                <strong>Car Name:</strong> {{ $booking->service->name }} <br>
                                <strong>Pickup:</strong> {{ $booking->pickup_location }} <br>
                                <strong>Drop:</strong> {{ $booking->drop_location }} <br>
                                <strong>Car Type:</strong> {{ implode(', ', json_decode($booking->service->car_type, true) ?? []) }} <br>
                                <strong>Facilities:</strong> {{ implode(', ', json_decode($booking->service->facility, true) ?? []) }} <br>
                            @endif
                        </td>
                        <td>
                            <span class="badge 
                                {{ $booking->status == 'pending' ? 'bg-warning' : '' }} 
                                {{ $booking->status == 'Confirmed' ? 'bg-success' : '' }} 
                                {{ $booking->status == 'Cancelled' ? 'bg-danger' : '' }}">
                                {{ $booking->status }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
