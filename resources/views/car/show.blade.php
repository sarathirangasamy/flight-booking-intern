@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('assets/img/car.jpg') }}" class="img-fluid rounded shadow" alt="{{ $car->name }}">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold">{{ $car->name }}</h2>

            <!-- Rating Section -->
            @php
                $totalRating = $car->ratings[0]->total_rating ?? 0;
                $totalReviews = $car->ratings[0]->total_reviews ?? 0;
                $avgRating = $totalReviews > 0 ? round($totalRating / $totalReviews) : 0;
                $reviews = explode(' || ', $car->ratings[0]->descriptions ?? '');
            @endphp

            <div class="mt-2">
                <p>Rating:
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fa fa-star {{ $i <= $avgRating ? 'text-warning' : 'text-muted' }}"></i>
                    @endfor
                    ({{ $totalReviews }} reviews)
                </p>
            </div>

            <!-- Car Type -->
            @php
                $carTypes = json_decode($car->car_type, true);
            @endphp
            @if(is_array($carTypes))
                <p><strong>Car Type:</strong> {{ implode(' | ', $carTypes) }}</p>
            @endif

            <!-- Facilities -->
            @php
                $facilities = json_decode($car->facility, true);
            @endphp
            @if(is_array($facilities))
                <p><strong>Facilities:</strong> {{ implode(', ', $facilities) }}</p>
            @endif

            <p><strong>Cancellation Policy:</strong> Free Cancellation Till {{ $car->cancellation_date }}</p>

            <!-- Price Details -->
            <div class="d-flex align-items-center">
                <span class="text-danger fw-bold fs-4">{{ $car->offer }}% Off</span>
            </div>
            <div class="d-flex align-items-center">
                <span class="text-dark fw-bold fs-4">₹{{ $car->amount }}</span>
                <span class="text-muted text-decoration-line-through ms-2">₹{{ $car->discount_amount }}</span>
            </div>

        </div>
    </div>

    <!-- Reviews Section -->
    <div class="mt-5">
        <h3>Customer Reviews</h3>
        @if($car->ratings->isNotEmpty())
            <ul class="list-unstyled">
                @foreach ($car->ratings as $rating)
                    <li class="d-flex align-items-center mb-2">
                        <i class="fa fa-user-circle text-primary me-2"></i>
                        <strong>{{ $rating->user->name ?? 'Anonymous' }}</strong>: 
                        <span>{{ $rating->description }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No reviews yet.</p>
        @endif
    </div>


@endsection
