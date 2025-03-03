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
                    <th>Flight Name</th>
                    <th>Date</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->date }}</td>
                        <td>{{ $booking->departure_time }}</td>
                        <td>{{ $booking->arrival_time }}</td>
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
