@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Users List</h2>
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Flight Name</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->flight_name }}</td>
            <td>{{ $booking->departure_time }}</td>
            <td>{{ $booking->arrival_time }}</td>
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
