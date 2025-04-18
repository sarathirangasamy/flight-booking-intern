@extends('layouts.app')

@section('content')

<div class="image-cover hero-header bg-white" style="background:url(assets/img/car-bg.jpg)no-repeat;" data-overlay="5">
			<div class="container">

				<!-- Search Form -->
				<div class="row justify-content-center align-items-center">

					<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
						<div class="position-relative text-center mb-5">
							<h1>Starts Your Trip with <span class="position-relative z-4">Airlines Booking<span
										class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
										<svg width="185px" height="23px" viewBox="0 0 445.5 23">
											<path class="fill-white opacity-7"
												d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
											</path>
										</svg>
									</span></span></h1>
							<p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
								explore beautiful destinations.</p>
						</div>
					</div>

					<div class="col-12">
						<div class="search-wrap bg-white rounded-3 p-2">
							<div class="row g-2 align-items-center">

								<!-- Pickup Column -->
								<div class="col-xl-5 col-lg-7 col-md-6">
									<div class="form-group mb-0">
										<select class="pickup form-control fw-bold">
											<option value="">Select Pickup</option>
												@foreach($CarLocations as $location)
													<option value="{{ $location->name }}">{{ $location->name }}</option>
												@endforeach
										</select>
									</div>
								</div>

								<!-- Drop Column -->
								<div class="col-xl-6 col-lg-4 col-md-4">
									<div class="form-group mb-0">
										<select class="drop form-control fw-bold">
											<option value="">Select Drop</option>
											@foreach($CarLocations as $location)
												<option value="{{ $location->name }}">{{ $location->name }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<!-- Search Button -->
								<div class="col-xl-1 col-lg-1 col-md-2">
									<button type="button" class="btn search-btn btn-primary btn-submit w-100">
										<i class="fa-solid fa-magnifying-glass"></i>
									</button>
								</div>

							</div>
						</div>
					</div>


				</div>
				<!-- </row> -->

			</div>
		</div>



        <!-- <section class="pt-5 pb-0">
			<div class="container">
				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-3 g-4">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">20% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-6.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Los Angeles</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3 Person</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$849 -
													$999</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">15% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-5.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>United Kingdom</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">2 Person</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$399 -
													$599</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>France</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3 Person</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$569 -
													$799</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section> -->



        <section>
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Our Awesome Vehicles</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row  gy-4 gx-xl-3 gx-lg-4 gx-4 main-carousel-hotel">

                @foreach($carServices as $key => $car)
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritem">
							<a href="{{ route('service.car.show', $car->id) }}" class="card rounded-3 shadow-wrap m-0">
								<div class="flight-thumb-wrapper">
									<div class="position-absolute top-0 left-0 ms-3 mt-3 z-1">
										<div class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
											<span class="svg-icon text-light svg-icon-2hx me-1">
												<!-- SVG Icon Here -->
											</span>600Kms included. After that $15/Kms
										</div>
									</div>
									<div class="popFlights-item-overHidden">
										<img src="assets/img/car.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>{{$car->name}}</span>
										</h4>

										@php
											$carTypes = json_decode($car->car_type, true);
										@endphp
										@if(is_array($carTypes))
											<p class="detail ellipsis-container">
												@foreach($carTypes as $index => $type)
													<span class="ellipsis-item__normal">{{ $type }}</span>
													@if($index !== count($carTypes) - 1) | @endif
												@endforeach
											</p>
										@endif

										<!-- Rating System -->
										<div class="mt-2">
											@php
												$totalRating = $car->ratings[0]->total_rating ?? 0;
												$totalReviews = $car->ratings[0]->total_reviews ?? 0;
												$avgRating = $totalReviews > 0 ? round($totalRating / $totalReviews) : 0;
											@endphp
											<p>Rating:
												@for($i = 1; $i <= 5; $i++)
													<i class="fa fa-star {{ $i <= $avgRating ? 'text-warning' : 'text-muted' }}"></i>
												@endfor
												({{ $totalReviews }} reviews)
											</p>
										</div>

										<div class="touritem-centrio mt-4">
											<div class="d-block position-relative">
												<span class="label bg-light-success text-success">Free Cancellation Till {{$car->cancellation_date}}</span>
											</div>
											<div class="aments-lists mt-2">
												@php
													$facilities = json_decode($car->facility, true);
												@endphp
												@if(is_array($facilities))
													<div class="detail ellipsis-container mt-1">
														@foreach($facilities as $facility)
															<span class="ellipsis"> {{ $facility }}</span>
														@endforeach
													</div>
												@else
													<span class="text-success">{{ $car->facility }}</span>
												@endif
											</div>
										</div>
									</div>
									<div class="trsms-foots mt-4">
										<div class="flts-flex d-flex align-items-end justify-content-between">
											<div class="flts-flex-strat">
												<div class="d-flex align-items-center justify-content-start">
													<span class="label bg-light-danger text-danger">{{$car->offer}}% Off</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="text-dark fw-bold fs-4">₹{{$car->amount}}</div>
													<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">₹{{$car->discount_amount}}</div>
												</div>
											</div>
											<div class="d-flex justify-content-end">
												<button class="btn btn-sm btn-primary ms-auto book-now-btn" 
													data-bs-toggle="modal" 
													data-bs-target="#bookingModal" 
													data-car-name="{{$car->name}}" 
													data-service-id="{{$car->id}}" 
													data-car-amount="{{$car->amount}}"
													data-car-discount="{{$car->discount_amount}}"
													data-car-offer="{{$car->offer}}">
													Book Now
												</button>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
                @endforeach

				</div>

			</div>
		</section>

        <footer class="footer skin-dark-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-4">
							<div class="footer-widget">
								<div class="d-flex align-items-start flex-column mb-3">
									<div class="d-inline-block"><img src="assets/img/logo-light.png" class="img-fluid" width="160"
											alt="Footer Logo"></div>
								</div>
								<div class="footer-add pe-xl-3">
									<p>We make your dream more beautiful & enjoyful with lots of happiness.</p>
								</div>
								<div class="foot-socials">
									<ul>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="footer-widget">
								<h4 class="widget-title">The Navigation</h4>
								<ul class="footer-menu">
									<li><a href="JavaScript:Void(0);">Talent Marketplace</a></li>
									<li><a href="JavaScript:Void(0);">Payroll Services</a></li>
									<li><a href="JavaScript:Void(0);">Direct Contracts</a></li>
									<li><a href="JavaScript:Void(0);">Hire Worldwide</a></li>
									<li><a href="JavaScript:Void(0);">Hire in the USA</a></li>
									<li><a href="JavaScript:Void(0);">How to Hire</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4">
							<div class="footer-widget">
								<h4 class="widget-title">Our Resources</h4>
								<ul class="footer-menu">
									<li><a href="JavaScript:Void(0);">Free Business tools</a></li>
									<li><a href="JavaScript:Void(0);">Affiliate Program</a></li>
									<li><a href="JavaScript:Void(0);">Success Stories</a></li>
									<li><a href="JavaScript:Void(0);">Upwork Reviews</a></li>
									<li><a href="JavaScript:Void(0);">Resources</a></li>
									<li><a href="JavaScript:Void(0);">Help & Support</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-6">
							<div class="footer-widget">
								<h4 class="widget-title">The Company</h4>
								<ul class="footer-menu">
									<li><a href="JavaScript:Void(0);">About Us</a></li>
									<li><a href="JavaScript:Void(0);">Leadership</a></li>
									<li><a href="JavaScript:Void(0);">Contact Us</a></li>
									<li><a href="JavaScript:Void(0);">Investor Relations</a></li>
									<li><a href="JavaScript:Void(0);">Trust, Safety & Security</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="footer-widget">
								<h4 class="widget-title">Payment Methods</h4>
								<div class="pmt-wrap">
									<img src="assets/img/payment.png" class="img-fluid" alt="">
								</div>
								<div class="our-prtwrap mt-4">
									<div class="prtn-title">
										<p class="text-light opacity-75 fw-medium">Our Partners</p>
									</div>
									<div class="prtn-thumbs d-flex align-items-center justify-content-start">
										<div class="pmt-wrap pe-4">
											<img src="assets/img/mytrip.png" class="img-fluid" alt="">
										</div>
										<div class="pmt-wrap pe-4">
											<img src="assets/img/tripadv.png" class="img-fluid" alt="">
										</div>
										<div class="pmt-wrap pe-4">
											<img src="assets/img/goibibo.png" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom border-top">
				<div class="container">
					<div class="row align-items-center justify-content-between">

						<div class="col-xl-6 col-lg-6 col-md-6">
							<p class="mb-0">© 2023 Airlines Booking Design by Themezhub.</p>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-6">
							<ul class="p-0 d-flex justify-content-start justify-content-md-end text-start text-md-end m-0">
								<li><a href="#">Terms of services</a></li>
								<li class="ms-3"><a href="#">Privacy Policies</a></li>
								<li class="ms-3"><a href="#">Cookies</a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</footer>

		<!-- Booking Modal -->
<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Car Rental Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm" method="POST" action="{{ route('booking.store') }}">
                    @csrf
                    <input type="hidden" id="service_id" name="service_id">

                    <!-- User Information Fields -->
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="user_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                    </div>

                    <!-- Pickup Location Dropdown -->
                    <div class="mb-3">
                        <label for="pickup_location" class="form-label">Pickup Location</label>
                        <select class="form-control fw-bold" id="pickup_location" name="pickup_location" required>
                            <option value="">Select Pickup</option>
							@foreach($CarLocations as $location)
								<option value="{{ $location->name }}">{{ $location->name }}</option>
							@endforeach
                        </select>
                    </div>

                    <!-- Drop Location Dropdown -->
                    <div class="mb-3">
                        <label for="drop_location" class="form-label">Drop Location</label>
                        <select class="form-control fw-bold" id="drop_location" name="drop_location" required>
                            <option value="">Select Drop</option>
							@foreach($CarLocations as $location)
								<option value="{{ $location->name }}">{{ $location->name }}</option>
							@endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="rental_date" class="form-label">Rental Date</label>
                        <input type="date" class="form-control" id="rental_date" name="rental_date" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Confirm Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        var bookingModal = document.getElementById('bookingModal');


		document.querySelectorAll(".book-now-btn").forEach(button => {
        button.addEventListener("click", function (event) {
            event.stopPropagation();
            event.preventDefault(); 
        });
    });

        bookingModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; 

            // Get data from button attributes
            var serviceId = button.getAttribute('data-service-id');
            var carName = button.getAttribute('data-car-name');
            var carAmount = button.getAttribute('data-car-amount');
            var carDiscount = button.getAttribute('data-car-discount');
            var carOffer = button.getAttribute('data-car-offer');

            // Populate modal form fields
            document.getElementById('service_id').value = serviceId;
            document.getElementById('car_name').value = carName;
            document.getElementById('car_amount').value = carAmount;
            document.getElementById('car_discount').value = carDiscount;
            document.getElementById('car_offer').value = carOffer;
        });
    });


	document.querySelector(".search-btn").addEventListener("click", function () {
    let pickup_location = document.querySelector(".pickup")?.value;
    let drop_location = document.querySelector(".drop")?.value;

    $.ajax({
        url: "{{ url('/filter-car') }}",
        type: "GET",
        data: {
            pickup_location: pickup_location !== "" ? pickup_location : null,
            drop_location: drop_location !== "" ? drop_location : null,
        },
        success: function (response) {
                $(".main-carousel-hotel").hide();
            if (response.cars.length > 0) {
                $(".car-list").html(""); // Clear existing list
                
                $.each(response.cars, function (index, car) {
                    let carTypes = "";
                    let facilities = "";

                    try {
                        carTypes = Array.isArray(car.car_type) 
                            ? car.car_type.join(" | ") 
                            : JSON.parse(car.car_type).join(" | ");
                    } catch (e) {
                        carTypes = car.car_type;
                    }

                    try {
                        facilities = Array.isArray(car.facility) 
                            ? car.facility.map(facility => `<span class="ellipsis">${facility}</span>`).join("")
                            : JSON.parse(car.facility).map(facility => `<span class="ellipsis">${facility}</span>`).join("");
                    } catch (e) {
                        facilities = `<span class="text-success">${car.facility}</span>`;
                    }

                    let carHtml = `
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="pop-touritem">
                                <a href="/cars/${car.id}" class="card rounded-3 shadow-wrap m-0">
                                    <div class="flight-thumb-wrapper">
                                        <div class="popFlights-item-overHidden">
                                            <img src="assets/img/car.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="touritem-middle position-relative p-3">
                                        <div class="touritem-flexxer">
                                            <h4 class="city fs-4 m-0 fw-bold">
                                                <span>${car.name}</span>
                                            </h4>
                                            <p class="detail ellipsis-container">${carTypes}</p>
                                            <div class="touritem-centrio mt-4">
                                                <div class="d-block position-relative">
                                                    <span class="label bg-light-success text-success">
                                                        Free Cancellation Till ${car.cancellation_date}
                                                    </span>
                                                </div>
                                                <div class="aments-lists mt-2">
                                                    <div class="detail ellipsis-container mt-1">
                                                        ${facilities}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trsms-foots mt-4">
                                            <div class="flts-flex d-flex align-items-end justify-content-between">
                                                <div class="flts-flex-strat">
                                                    <div class="d-flex align-items-center">
                                                        <span class="label bg-light-danger text-danger">${car.offer}% Off</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-dark fw-bold fs-4">₹${car.amount}</div>
                                                        <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">
                                                            ₹${car.discount_amount}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-sm btn-primary ms-auto" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#bookingModal" 
                                                        data-car-name="${car.name}" 
                                                        data-service-id="${car.id}" 
                                                        data-car-amount="${car.amount}"
                                                        data-car-discount="${car.discount_amount}"
                                                        data-car-offer="${car.offer}">
                                                        Book Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>`;

                    $(".car-list").append(carHtml);
                });
            } else {
                $(".car-list").html('<p class="text-center text-danger">No cars found for selected locations.</p>');
            }
        },
        error: function (error) {
            console.log("Error fetching cars:", error);
        }
    });
});



</script>


@endsection