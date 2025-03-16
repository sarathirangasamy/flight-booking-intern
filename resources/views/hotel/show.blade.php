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
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/assets/img/hotel/hotel-1.jpg" class="img-fluid rounded mb-4" alt="{{ $hotel->name }}">
            <h2>{{ $hotel->name }}</h2>
            <p><strong>Destination:</strong> {{ $hotel->going_to }}</p>
            <p><strong>Free Cancellation Till:</strong> {{ $hotel->cancellation_date }}</p>
            
            <!-- Rating System -->
            <div class="mt-2">
                           <!-- Rating Display -->
                           <div class="row">
    <!-- Left Side: Star Rating -->
    <div class="col-md-6">
        <p>Rating:</p>
        @php
            $total_rating = $hotel->total_rating ?? 0; // Get total rating sum
            $total_reviews = $hotel->total_reviews ?? 0; // Get total review count
            $average_rating = $total_reviews > 0 ? round($total_rating / $total_reviews) : 0; // Calculate average
        @endphp

        @for ($i = 1; $i <= 5; $i++)
            <i class="fa fa-star {{ $i <= $average_rating ? 'text-warning' : 'text-muted' }}"></i>
        @endfor
        <strong>({{ $total_reviews }} reviews)</strong>
    </div>

    <!-- Right Side: Rating Progress Bars -->
    <div class="col-md-6">
        @php
            $total_reviews = $total_reviews > 0 ? $total_reviews : 1; // Avoid division by zero
        @endphp

        @foreach ([5, 4, 3, 2, 1] as $star)
            @php
                $percentage = round(($ratings_count[$star] / $total_reviews) * 100);
            @endphp
            <div class="d-flex align-items-center">
                <span class="me-2">{{ $star }} <i class="fa fa-star text-warning"></i></span>
                <div class="progress flex-grow-1" style="height: 10px;">
                    <div class="progress-bar bg-warning" role="progressbar" 
                         style="width: {{ $percentage }}%;" 
                         aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <span class="ms-1">{{ $percentage }}%</span>
            </div>
        @endforeach
    </div>
</div>



                @if($hotel->ratings->isNotEmpty())
                    <p><strong>Reviews:</strong></p>
                    <ul class="list-unstyled">
                        @foreach($hotel->ratings as $rating)
                            <li class="d-flex align-items-center">
                                <i class="fa fa-user-circle text-primary me-2"></i>  
                                <strong>{{ $rating->user->name ?? 'Anonymous' }}</strong>: 
                                <span>{{ $rating->description }}</span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No reviews yet.</p>
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
