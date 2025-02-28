@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a New Booking</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="flight_name" class="form-label">Flight Name</label>
            <input type="text" class="form-control" id="flight_name" name="flight_name" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Booking Status</label>
            <select class="form-control" id="status" name="status">
                <option value="Pending">Pending</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>
@endsection
