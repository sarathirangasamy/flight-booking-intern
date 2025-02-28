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
            <input type="text" class="form-control" id="flight_name" name="flight_name">
        </div>
        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="mb-3">
            <label>Departure Time</label>
            <input type="time" name="departure_time" class="form-control">
        </div>

        <div class="mb-3">
            <label>Arrival Time</label>
            <input type="time" name="arrival_time" class="form-control">
        </div>

        

        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>
@endsection
