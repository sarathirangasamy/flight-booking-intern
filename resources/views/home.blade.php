@extends('layouts.app')

@section('content')
<div class="container text-center">
    <img src="{{ asset('images/flight.jpg') }}" alt="Flight Image" class="img-fluid">
    <h2>Book Your Flight Now</h2>
    <p>Find the best deals on flights worldwide.</p>
    <a href="{{ route('booking.create') }}" class="btn btn-primary">Book Now</a>
</div>
@endsection
