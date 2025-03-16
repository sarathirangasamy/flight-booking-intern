@extends('layouts.app')

@section('content')

<style>
    .progress {
    background-color: #e9ecef;
    border-radius: 5px;
    overflow: hidden;
    margin-bottom:0px
}
.progress-bar {
    border-radius: 5px;
}

</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('assets/img/car.jpg') }}" class="img-fluid rounded shadow" alt="{{ $car->name }}">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold">{{ $car->name }}</h2>

            <!-- Rating Section -->
            <div class="row align-items-center">
                    <!-- Left Side: Star Rating -->
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="mb-0 me-2">Rating:</p>
                        @php
                            $totalRating = $car->total_rating ?? 0;
                            $totalReviews = $car->total_reviews ?? 0;
                            $avgRating = $totalReviews > 0 ? round($totalRating / $totalReviews) : 0;
                        @endphp

                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fa fa-star {{ $i <= $avgRating ? 'text-warning' : 'text-muted' }}"></i>
                        @endfor
                        <strong class="ms-2">({{ $totalReviews }} reviews)</strong>
                    </div>

                    <!-- Right Side: Rating Progress Bars -->
                    <div class="col-md-6">
                        @php
                            $totalReviews = $totalReviews > 0 ? $totalReviews : 1;
                        @endphp

                        @foreach ([5, 4, 3, 2, 1] as $star)
                            @php
                                $percentage = isset($ratings_count[$star]) && $totalReviews > 0 ? 
                                              round(($ratings_count[$star] / $totalReviews) * 100) : 0;
                            @endphp
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">{{ $star }} <i class="fa fa-star text-warning"></i></span>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-warning" role="progressbar" 
                                         style="width: {{ $percentage }}%;" 
                                         aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span class="ms-2">{{ $percentage }}%</span>
                            </div>
                        @endforeach
                    </div>
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
