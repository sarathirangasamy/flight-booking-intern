@extends('layouts.admin')

@section('content')

<div class="container mt-4">
    <h2>Create Booking</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('service.store') }}" method="POST">
        @csrf

        <!-- Booking Type Dropdown -->
        <div class="mb-3">
            <label for="booking_type" class="form-label">Select Booking Type</label>
            <select class="form-select" id="booking_type" name="type" onchange="toggleFields()">
                <option value="">Select Type</option>
                <option value="flight">Flight</option>
                <option value="hotel">Hotel</option>
                <option value="car_rental">Car Rental</option>
            </select>
        </div>

        <!-- Flight Fields -->
        <div id="flight_fields" class="booking-section d-none">
            <h4>Flight Booking</h4>
            <div class="row">
                <div class="col-md-6">
                    <label>Leaving From</label>
                    <select class="form-control" name="leaving_from">
                        <option value="">Select</option>
                        <option value="ny">New York</option>
                        <option value="sd">San Diego</option>
                        <option value="sj">San Jose</option>
                        <option value="ph">Philadelphia</option>
                        <option value="nl">Nashville</option>
                        <option value="sf">San Francisco</option>
                        <option value="hu">Houston</option>
                        <option value="sa">San Antonio</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Trip Type</label>
                    <select name="trip_type" class="form-select">
                        <option value="one_way">One Way</option>
                        <option value="return">Return</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                <label>Going To</label>
                <select class="form-control" name="going_to">
                        <option value="">Select</option>
                        <option value="lv">Las Vegas</option>
                        <option value="la">Los Angeles</option>
                        <option value="kc">Kansas City</option>
                        <option value="no">New Orleans</option>
                        <option value="kc">Jacksonville</option>
                        <option value="lb">Long Beach</option>
                        <option value="cl">Columbus</option>
                        <option value="cn">Canada</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Departure Date</label>
                    <input type="date" name="departure_date" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Return Date</label>
                    <input type="date" name="return_date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Class Type</label>
                    <select name="class_type" class="form-select">
                        <option value="Economy">Economy</option>
                        <option value="Premium Economy">Premium Economy</option>
                        <option value="Business">Business</option>
                        <option value="Business/First">Business/First</option>
                        <option value="First">First</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Amount</label>
                    <input type="number" step="0.01" name="amount" class="form-control">
                </div>

                <div class="col-md-6">
                    <label>Adults</label>
                    <input type="number" name="adults" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Children</label>
                    <input type="number" name="children" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Rooms</label>
                    <input type="number" name="rooms" class="form-control">
                </div>
            </div>
        </div>

        <!-- Hotel Fields -->
        <div id="hotel_fields" class="booking-section d-none">
            <h4>Hotel Booking</h4>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Hotel Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
            </div>


            <div class="row">
                <div class="col-md-6">
                    <label>Going To</label>
                    <select class="form-control" name="going_to">
                        <option value="">Select</option>
                        <option value="ny">New York</option>
                        <option value="sd">San Diego</option>
                        <option value="sj">San Jose</option>
                        <option value="ph">Philadelphia</option>
                        <option value="nl">Nashville</option>
                        <option value="sf">San Francisco</option>
                        <option value="hu">Houston</option>
                        <option value="sa">San Antonio</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Check-in Date</label>
                    <input type="date" name="checkin_date" class="form-control">
                </div>
            </div>
    
            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Check-out Date</label>
                    <input type="date" name="checkout_date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Adults</label>
                    <input type="number" name="adults" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Children</label>
                    <input type="number" name="children" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Rooms</label>
                    <input type="number" name="rooms" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Offer (%)</label>
                    <input type="number" name="offer" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Cancellation Date</label>
                    <input type="date" name="cancellation_date" class="form-control">
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Amount</label>
                    <input type="number" step="0.01" name="amount" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Discount Amount</label>
                    <input type="number" step="0.01" name="discount_amount" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label>Room Facilities</label>
                <select class="form-control" name="facility[]" multiple>
                    <option value="Cooling">Cooling</option>
                    <option value="Pet Allow">Pet Allow</option>
                    <option value="Free Wifi">Free Wifi</option>
                    <option value="Food">Food</option>
                    <option value="Parking">Parking</option>
                </select>
            </div>
        </div>

        <!-- Car Rental Fields -->
        <div id="car_rental_fields" class="booking-section d-none">
            <h4>Car Rental Booking</h4>
            <div class="row">
                <div class="col-md-6">
                    <label>Pickup Location</label>
                    <select class="form-control" name="pickup_location">
                        <option value="">Select</option>
                        <option value="ny">New York</option>
                        <option value="sd">San Diego</option>
                        <option value="sj">San Jose</option>
                        <option value="ph">Philadelphia</option>
                        <option value="nl">Nashville</option>
                        <option value="sf">San Francisco</option>
                        <option value="hu">Houston</option>
                        <option value="sa">San Antonio</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Drop Location</label>
                    <select class="form-control" name="drop_location">
                        <option value="">Select</option>
                        <option value="ny">New York</option>
                        <option value="sd">San Diego</option>
                        <option value="sj">San Jose</option>
                        <option value="ph">Philadelphia</option>
                        <option value="nl">Nashville</option>
                        <option value="sf">San Francisco</option>
                        <option value="hu">Houston</option>
                        <option value="sa">San Antonio</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Car Type</label>
                    <select class="form-control fw-bold" name="car_type[]" multiple>
                    <option value="">Select</option>
                    <option value="SEDAN">SEDAN</option>
                    <option value="Hatch Back">Hatch Back</option>
                    <option value="Lux">Lux</option>
                    <option value="AC">AC</option>
                    <option value="5 Seats">5 Seats</option>
                </select>
                </div>
                <div class="col-md-6">
                    <label>Facilities</label>
                    <select class="form-control fw-bold" name="facility[]" multiple>
                    <option value="">Select</option>
                    <option value="Manual">Manual</option>
                    <option value="1 Large Bag">1 Large Bag</option>
                    <option value="1 Small Bag">1 Small Bag</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Petrol">Petrol</option>
                </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Amount</label>
                    <input type="number" step="0.01" name="amount" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Discount Amount</label>
                    <input type="number" step="0.01" name="discount_amount" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Offer (%)</label>
                    <input type="number" name="offer" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Cancellation Date</label>
                    <input type="date" name="cancellation_date" class="form-control">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">Book Now</button>

    </form>
</div>

<!-- JavaScript to Show/Hide Fields -->
<script>
   function toggleFields() {
    let type = document.getElementById('booking_type').value;
    
    document.querySelectorAll('.booking-section input, .booking-section select').forEach(el => {
        el.disabled = true;
    });

    document.getElementById('flight_fields').classList.add('d-none');
    document.getElementById('hotel_fields').classList.add('d-none');
    document.getElementById('car_rental_fields').classList.add('d-none');

    if (type === 'flight') {
        document.getElementById('flight_fields').classList.remove('d-none');
        document.querySelectorAll('#flight_fields input, #flight_fields select').forEach(el => {
            el.disabled = false;
        });
    } else if (type === 'hotel') {
        document.getElementById('hotel_fields').classList.remove('d-none');
        document.querySelectorAll('#hotel_fields input, #hotel_fields select').forEach(el => {
            el.disabled = false;
        });
    } else if (type === 'car_rental') {
        document.getElementById('car_rental_fields').classList.remove('d-none');
        document.querySelectorAll('#car_rental_fields input, #car_rental_fields select').forEach(el => {
            el.disabled = false;
        });
    }
}

</script>

@endsection
