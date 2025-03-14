@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/assets/img/hotel/hotel-1.jpg" class="img-fluid rounded mb-4" alt="{{ $hotel->name }}">
            <h2>{{ $hotel->name }}</h2>
            <p><strong>Destination:</strong> {{ $hotel->going_to }}</p>
            <p><strong>Free Cancellation Till:</strong> {{ $hotel->cancellation_date }}</p>
            
            <!-- Rating System -->
            <div class="mt-2">
                <p>Rating:
                    @php
                        $total_rating = $hotel->ratings->first()->total_rating ?? 0;
                        $total_reviews = $hotel->ratings->first()->total_reviews ?? 0;
                        $average_rating = $total_reviews > 0 ? round($total_rating / $total_reviews) : 0;
                    @endphp

                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fa fa-star {{ $i <= $average_rating ? 'text-warning' : 'text-muted' }}"></i>
                    @endfor
                    ({{ $total_reviews }} reviews)
                </p>

                @if($hotel->ratings->isNotEmpty())
                <p><strong>Reviews:</strong></p>
                <ul class="list-unstyled">
                    @foreach($hotel->ratings as $rating)
                        <li class="d-flex align-items-center">
                            <i class="fa fa-comment text-primary me-2"></i>  <!-- Comment Icon -->
                            {{ $rating->descriptions }}
                        </li>
                    @endforeach
                </ul>
            @endif
            </div>

            <!-- Facilities -->
            <h4>Facilities:</h4>
            <ul>
                @php
                    $facilities = json_decode($hotel->facility, true);
                @endphp
                @if(!empty($facilities) && is_array($facilities))
                    @foreach($facilities as $facility)
                        <li><i class="fa-solid fa-check text-success"></i> {{ $facility }}</li>
                    @endforeach
                @endif
            </ul>

            <!-- Pricing -->
            <h4>Price:</h4>
            <p>
                <strong>₹{{ $hotel->amount }}</strong>
                <span class="text-muted text-decoration-line-through">₹{{ $hotel->discount_amount }}</span>
            </p>

        </div>
    </div>
</div>
@endsection
