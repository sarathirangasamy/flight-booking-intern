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


<div class="container mt-4">
    <div class="card p-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/destination/tr-' . $flight->id . '.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">{{ $flight->leaving_from }} → {{ $flight->going_to }}</h3>
                <p class="text-muted">{{ str_replace('_', ' ', $flight->trip_type) }} - trip</p>
                <p class="text-muted">{{ $flight->no_of_days }} days</p>

                <h5 class="fw-bold">Price: 
                    <span class="text-dark fs-5">₹{{ $flight->amount }}</span>
                    <span class="text-muted text-decoration-line-through fs-6">₹{{ $flight->discount_amount }}</span>
                </h5>

                <!-- Rating Display -->
                <div class="row">
    <!-- Left Side: Star Rating -->
    <div class="col-md-6">
        <p>Rating:</p>
        @php
            $total_rating = $flight->total_rating ?? 0; // Get total rating sum
            $total_reviews = $flight->total_reviews ?? 0; // Get total review count
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
                <span class="ms-2">{{ $percentage }}%</span>
            </div>
        @endforeach
    </div>
</div>



                <!-- Display User Reviews -->
                @if($flight->ratings->isNotEmpty())
                    <p><strong>Reviews:</strong></p>
                    <ul class="list-unstyled">
                        @foreach($flight->ratings as $rating)
                            <li class="d-flex align-items-center">
                                <i class="fa fa-user-circle text-primary me-2"></i>  
                                <strong>{{ $rating->user->name ?? 'Unknown User' }}</strong>: 
                                <span>{{ $rating->description }}</span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No reviews yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
