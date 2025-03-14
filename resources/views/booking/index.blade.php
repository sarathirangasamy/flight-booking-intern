@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Bookings</h2>

    @if($bookings->isEmpty())
        <p>No bookings found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Booking Type</th>
                    <th>User Email</th>
                    <th>Mobile Number</th>
                    <th>Amount</th>
                    <th>Details</th>
                    <th>Status</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ ucwords(str_replace('_', ' ', $booking->service->type)) }}</td>
                        <td>{{ $booking->user->email ?? 'N/A' }}</td>
                        <td>{{ $booking->mobile_number ?? 'N/A' }}</td>
                        <td>₹{{ number_format($booking->service->amount, 2) }}</td>

                        <td>
                            @if($booking->service->type == 'flight')
                                <strong>From:</strong> {{ $booking->leaving_from }} <br>
                                <strong>Departure:</strong> {{ $booking->departure_date }} <br>
                                <strong>Return:</strong> {{ $booking->return_date ?? '-' }} <br>
                                <strong>Class:</strong> {{ $booking->service->class_type }} <br>
                                <strong>Passport Number:</strong> {{ $booking->passport_number }} <br>
                                <strong>DOB:</strong> {{ $booking->dob }} <br>
                            @elseif($booking->service->type == 'hotel')
                                <strong>Location:</strong> {{ $booking->service->going_to }} <br>
                                <strong>Check-in:</strong> {{ $booking->checkin_date }} <br>
                                <strong>Check-out:</strong> {{ $booking->checkout_date }} <br>
                                <strong>Rooms:</strong> {{ $booking->service->rooms }} <br>
                                <strong>Facilities:</strong> {{ implode(', ', json_decode($booking->service->facility, true) ?? []) }} <br>
                            @elseif($booking->service->type == 'car_rental')
                                <strong>Car Name:</strong> {{ $booking->service->name }} <br>
                                <strong>Pickup:</strong> {{ $booking->pickup_location }} <br>
                                <strong>Drop:</strong> {{ $booking->drop_location }} <br>
                                <strong>Car Type:</strong> {{ implode(', ', json_decode($booking->service->car_type, true) ?? []) }} <br>
                                <strong>Facilities:</strong> {{ implode(', ', json_decode($booking->service->facility, true) ?? []) }} <br>
                            @endif
                        </td>

                        <td>
                            <span class="badge 
                                {{ $booking->status == 'pending' ? 'bg-warning' : '' }} 
                                {{ $booking->status == 'Confirmed' ? 'bg-success' : '' }} 
                                {{ $booking->status == 'Completed' ? 'bg-success' : '' }} 
                                {{ $booking->status == 'Cancelled' ? 'bg-danger' : '' }}">
                                {{ $booking->status }}
                            </span>
                        </td>

                        <td>
                        @if($booking->status == 'Completed')
                            @php
                                $existingRating = $booking->rating; // Access the rating relation
                            @endphp

                            @if($existingRating)
                                <p><strong>Rating:</strong> {{ $existingRating->rating }}/5</p>
                                <p><strong>Feedback:</strong> {{ $existingRating->description }}</p>
                            @else
                                <button class="btn btn-primary btn-sm open-rating-modal" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#ratingModal"
                                        data-booking-id="{{ $booking->id }}" 
                                        data-service-id="{{ $booking->service_id }}" 
                                        data-user-id="{{ $booking->user_id }}">
                                    Rate Now
                                </button>
                            @endif
                        @else
                            <p>-</p>
                        @endif
                    </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<!-- Rating Modal -->
<div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Your Rating</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="ratingForm">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id">
                    <input type="hidden" name="booking_id" id="booking_id">
                    <input type="hidden" name="service_id" id="service_id">
                    <label for="description">Feedback</label>
                    <textarea name="description" id="description" placeholder="Enter Your Feedback" class="form-control" required></textarea>
                    <input type="hidden" name="rating" id="rating">

                    <div class="mt-3" style="display:none">
                        <strong>Auto-detected Rating:</strong> <span id="ratingValue">-</span>/5
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="submitRating">Submit</button>
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const openRatingModalButtons = document.querySelectorAll(".open-rating-modal");
    const ratingModal = document.getElementById("ratingModal");
    const bookingIdInput = document.getElementById("booking_id");
    const serviceIdInput = document.getElementById("service_id");
    const userIdInput = document.getElementById("user_id");
    const descriptionInput = document.getElementById("description");
    const ratingValueDisplay = document.getElementById("ratingValue");
    const ratingInput = document.getElementById("rating");
    const submitRatingButton = document.getElementById("submitRating");

    function showModal(modal) {
        let bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
    }

    function calculateRating(description) {
        let cleanedText = description.toLowerCase().replace(/[.,!?]/g, "");
        let words = cleanedText.split(/\s+/);

        let rating = 3; // Default neutral rating

        let positiveKeywords = { 
            "excellent": 5, "awesome": 5, "perfect": 5, "outstanding": 5, "superb": 5, "super": 5, 
            "amazing": 5, "wonderful": 5, "fantastic": 5, "exceptional": 5, "impressive": 5,
            "great": 4, "good": 4, "nice": 4, "satisfactory": 4, "pleasant": 4, "delightful": 4, 
            "lovely": 4, "fine": 4, "decent": 3, "okay": 3, "acceptable": 3, "fair": 3, 
            "moderate": 3, "standard": 3
        };

        let negativeKeywords = { 
            "bad": 1, "terrible": 1, "horrible": 1, "worst": 1, "awful": 1, "dreadful": 1, 
            "pathetic": 1, "abysmal": 1, "poor": 2, "disappointing": 2, "not satisfied": 2, 
            "subpar": 2, "mediocre": 2, "lackluster": 2, "underwhelming": 2, "unimpressive": 2, 
            "frustrating": 2, "below average": 2, "insufficient": 2, "meh": 2
        };


        words.forEach(word => {
            if (positiveKeywords[word]) rating = Math.max(rating, positiveKeywords[word]);
            if (negativeKeywords[word]) rating = Math.min(rating, negativeKeywords[word]);
        });

        console.log("Generated Rating:", rating);
        return rating;
    }

    openRatingModalButtons.forEach(button => {
        button.addEventListener("click", function () {
            let bookingId = this.getAttribute("data-booking-id");
            let serviceId = this.getAttribute("data-service-id");
            let userId = this.getAttribute("data-user-id");

            console.log("Opening modal for booking ID:", serviceId);

            bookingIdInput.value = bookingId;
            serviceIdInput.value = serviceId;
            userIdInput.value = userId;
            descriptionInput.value = "";
            ratingValueDisplay.textContent = "-";
            ratingInput.value = "";

            showModal(ratingModal);
        });
    });

    descriptionInput.addEventListener("input", function () {
        let description = this.value.trim();
        let rating = description ? calculateRating(description) : "-";
        ratingValueDisplay.textContent = rating;
        ratingInput.value = rating;
    });

submitRatingButton.addEventListener("click", function (e) {
    e.preventDefault();

    let formData = new FormData(document.getElementById("ratingForm"));

    console.log("Submitting Form Data:");
    for (let pair of formData.entries()) {
        console.log(pair[0] + ": " + pair[1]);
    }

    fetch("{{ route('rating.store') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        },
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        console.log("Server Response:", data);
        if (data.success) {
            Swal.fire({
                title: "Success!",
                text: "Rating submitted successfully!",
                icon: "success",
                confirmButtonText: "OK"
            }).then(() => {
                location.reload();
            });
        } else {
            Swal.fire({
                title: "Error!",
                text: "Failed to submit rating.",
                icon: "error",
                confirmButtonText: "Try Again"
            });
        }

    })
    .catch(error => {
        console.error("Fetch Error:", error);
        alert("Something went wrong!");
    });
});

});


</script>

@endsection
