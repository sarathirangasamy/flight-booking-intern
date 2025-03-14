@extends('layouts.app')

@section('content')
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

                <p>Rating:
                    @php
                        $total_rating = $flight->ratings->first()->total_rating ?? 0;
                        $total_reviews = $flight->ratings->first()->total_reviews ?? 0;
                        $average_rating = $total_reviews > 0 ? round($total_rating / $total_reviews) : 0;
                    @endphp

                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $average_rating)
                            <i class="fa fa-star text-warning"></i>  <!-- Full Star -->
                        @else
                            <i class="fa fa-star text-muted"></i>   <!-- Empty Star -->
                        @endif
                    @endfor
                    ({{ $total_reviews }} reviews)
                </p>

                @if($flight->ratings->isNotEmpty())
                <p><strong>Reviews:</strong></p>
                <ul class="list-unstyled">
                    @foreach($flight->ratings as $rating)
                        <li class="d-flex align-items-center">
                            <i class="fa fa-comment text-primary me-2"></i>  <!-- Comment Icon -->
                            {{ $rating->descriptions }}
                        </li>
                    @endforeach
                </ul>
            @endif



            </div>
        </div>
    </div>
</div>
@endsection
