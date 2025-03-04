@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Bookings List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Booking Type</th>
                <th>User Email</th>
                <th>Mobile Number</th>
                <th>Amount</th>
                <th>Details</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $index => $booking)
            <tr>
                <td>{{ $index + 1 }}</td> <!-- Serial Number -->
                <td>{{ ucwords(str_replace('_', ' ', $booking->service->type)) }}</td>
                <td>{{ $booking->user->email ?? 'N/A' }}</td>
                <td>{{ $booking->mobile_number ?? 'N/A' }}</td>
                <td>₹{{ number_format($booking->service->amount, 2) }}</td>

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
                    @if ($booking->status == 'pending')
                        <form action="{{ route('admin.bookings.updateStatus', $booking->id) }}" method="POST">
                            @csrf
                            <select name="status" class="form-select" onchange="this.form.submit()">
                                <option value="Pending" {{ $booking->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Confirmed">Confirmed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </form>
                    @else
                        <span class="badge 
                            {{ $booking->status == 'Confirmed' ? 'bg-success' : '' }} 
                            {{ $booking->status == 'Cancelled' ? 'bg-danger' : '' }}">
                            {{ $booking->status }}
                        </span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
