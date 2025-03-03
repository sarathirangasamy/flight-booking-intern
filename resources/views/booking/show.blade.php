@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Booking Details</h2>
    <table class="table">
        <tr>
            <th>Flight Name:</th>
            <td>{{ $booking->name }}</td>
        </tr>
        <tr>
            <th>Booking Status:</th>
            <td>{{ $booking->status }}</td>
        </tr>
        <tr>
            <th>Booked By:</th>
            <td>{{ $booking->user->name }}</td>
        </tr>
        <tr>
            <th>Booking Date:</th>
            <td>{{ $booking->created_at->format('d M Y') }}</td>
        </tr>
    </table>
    <a href="{{ route('booking.index') }}" class="btn btn-secondary">Back to My Bookings</a>
</div>
@endsection
