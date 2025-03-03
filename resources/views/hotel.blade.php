@extends('layouts.app')

@section('content')


<div class="image-cover hero-header bg-white" style="background:url(assets/img/banner-5.jpg)no-repeat;" data-overlay="5">
			<div class="container">

				<!-- Search Form -->
				<div class="row justify-content-center align-items-center">

					<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
						<div class="position-relative text-center mb-5">
							<h1>Starts Your Trip with <span class="position-relative z-4">GeoTrip<span
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

					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="search-wrap with-label bg-white rounded-3 p-3 pt-4">
							<div class="row gy-3 gx-md-3 gx-sm-2">

								<div class="col-xl-8 col-lg-7 col-md-12">
									<div class="row gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
											<div class="form-group hdd-arrow border rounded-1 mb-0">
												<label>Where</label>
												<select class="goingto form-control border-0">
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
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
											<div class="form-group mb-0">
												<label>Choose Date</label>
												<input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
													id="checkinout" readonly="readonly">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12">
									<div class="row gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
											<div class="form-group mb-0">
												<label>Members</label>
												<div class="booking-form__input guests-input mixer-auto">
													<button name="guests-btn" id="guests-input-btn">1 Guest</button>
													<div class="guests-input__options" id="guests-input-options">
														<div>
															<span class="guests-input__ctrl minus" id="adults-subs-btn"><i
																	class="fa-solid fa-minus"></i></span>
															<span class="guests-input__value"><span id="guests-count-adults">1</span>Adults</span>
															<span class="guests-input__ctrl plus" id="adults-add-btn"><i
																	class="fa-solid fa-plus"></i></span>
														</div>
														<div>
															<span class="guests-input__ctrl minus" id="children-subs-btn"><i
																	class="fa-solid fa-minus"></i></span>
															<span class="guests-input__value"><span id="guests-count-children">0</span>Children</span>
															<span class="guests-input__ctrl plus" id="children-add-btn"><i
																	class="fa-solid fa-plus"></i></span>
														</div>
														<div>
															<span class="guests-input__ctrl minus" id="room-subs-btn"><i
																	class="fa-solid fa-minus"></i></span>
															<span class="guests-input__value"><span id="guests-count-room">0</span>Rooms</span>
															<span class="guests-input__ctrl plus" id="room-add-btn"><i
																	class="fa-solid fa-plus"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
											<div class="form-group mb-0">
												<button type="button" class="btn btn-primary search-btn full-width rounded-1 fw-medium"><i
														class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- </row> -->

			</div>
		</div>
		<!-- ============================ Hero Banner End ================================== -->


		<!-- ============================ Offers Start ================================== -->
		<section class="py-5">
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="pop-touritems">
							<div class="card bg-light-success rounded-3 p-4 m-0">
								<div class="card-body py-3 px-1">
									<div class="position-relative">
										<div class="offers-pic"><img src="assets/img/flt-3.png" class="img-fluid rounded" width="150" alt=""></div>
									</div>
									<div class="position-relative py-4 my-1">
										<span class="mb-1 text-dark fw-medium">Flat</span>
										<h4 class="mb-1 text-success">$899 off</h4>
										<h6 class="fw-normal fw-medium">On Domestic Flights</h6>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<div class="bg-light-success border border-2 border-success br-dashed rounded-2 px-3 py-2">
											<h5 class="fw-bold user-select-all text-success mb-0">LOG125F</h5>
										</div>
										<a href="#" class="nav-link text-success"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="pop-touritems">
							<div class="card bg-light-purple rounded-3 p-4 m-0">
								<div class="card-body py-3 px-1">
									<div class="position-relative">
										<div class="offers-pic"><img src="assets/img/goibibo.png" class="img-fluid rounded" width="150" alt="">
										</div>
									</div>
									<div class="position-relative py-4 my-1">
										<span class="mb-1 text-dark fw-medium">Flat</span>
										<h4 class="mb-1 text-purple">$899 off</h4>
										<h6 class="fw-normal fw-medium">On Domestic Flights</h6>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<div class="bg-light-purple border border-2 border-purple br-dashed rounded-2 px-3 py-2">
											<h5 class="fw-bold user-select-all text-purple mb-0">INT285</h5>
										</div>
										<a href="#" class="nav-link text-purple"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="pop-touritems">
							<div class="card bg-light-danger rounded-3 p-4 m-0">
								<div class="card-body py-3 px-1">
									<div class="position-relative">
										<div class="offers-pic"><img src="assets/img/flt-2.png" class="img-fluid rounded" width="150" alt=""></div>
									</div>
									<div class="position-relative py-4 my-1">
										<span class="mb-1 text-dark fw-medium">Flat</span>
										<h4 class="mb-1 text-danger">$899 off</h4>
										<h6 class="fw-normal fw-medium">On Domestic Flights</h6>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<div class="bg-light-danger border border-2 border-danger br-dashed rounded-2 px-3 py-2">
											<h5 class="fw-bold user-select-all text-danger mb-0">LOG125F</h5>
										</div>
										<a href="#" class="nav-link text-danger"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="pop-touritems">
							<div class="card bg-light-warning rounded-3 p-4 m-0">
								<div class="card-body py-3 px-1">
									<div class="position-relative">
										<div class="offers-pic"><img src="assets/img/flt-1.png" class="img-fluid rounded" width="150" alt=""></div>
									</div>
									<div class="position-relative py-4 my-1">
										<span class="mb-1 text-dark fw-medium">Flat</span>
										<h4 class="mb-1 text-warning">$899 off</h4>
										<h6 class="fw-normal fw-medium">On Domestic Flights</h6>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<div class="bg-light-warning border border-2 border-warning br-dashed rounded-2 px-3 py-2">
											<h5 class="fw-bold user-select-all text-warning mb-0">LOG125F</h5>
										</div>
										<a href="#" class="nav-link text-warning"><i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Offers End ================================== -->


		<!-- ============================ Popular Hotels Start ================================== -->
		<section class="py-0">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Explore Top Hotels & Resorts</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12 p-0">
        <div class="main-carousel main-carousel-hotel cols-3 dots-full">
            @foreach($hotelService as $key => $hotel)
                <div class="carousel-cell">
                    <div class="pop-touritem">
                        <a href="#" class="card rounded-3 border br-dashed m-0">
                            <div class="flight-thumb-wrapper">
                                <div class="popFlights-item-overHidden">
                                    <img src="assets/img/hotel/hotel-{{ $key + 1 }}.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="touritem-middle position-relative p-3">
                                <div class="touritem-flexxer">
                                    <h4 class="city fs-6 m-0 fw-bold">
                                        <span>{{$hotel->name}}</span>
                                    </h4>
                                    <p class="detail ellipsis-container">
                                        @php
                                            $cityNames = [
                                                'ny' => 'New York',
                                                'sd' => 'San Diego',
                                                'sj' => 'San Jose',
                                                'ph' => 'Philadelphia',
                                                'nl' => 'Nashville',
                                                'sf' => 'San Francisco',
                                                'hu' => 'Houston',
                                                'sa' => 'San Antonio'
                                            ];
                                            $destination = $cityNames[$hotel->going_to] ?? 'Unknown';
                                        @endphp
                                        <span class="ellipsis-item__normal">{{ $destination }}</span>
                                        <span class="separate ellipsis-item__normal"></span>
                                        <span class="ellipsis-item">3.5 Km From {{$destination}}</span>
                                    </p>

                                    <div class="touritem-centrio mt-4">
                                        <div class="d-block position-relative">
                                            <span class="label bg-light-success text-success">Free Cancellation Till {{$hotel->cancellation_date}}</span>
                                        </div>
                                        <div class="aments-lists mt-2">
                                            <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                                @php
                                                    $facilities = json_decode($hotel->facility, true);
                                                @endphp

                                                @if(!empty($facilities) && is_array($facilities))
                                                    @foreach($facilities as $facility)
                                                        <li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                                                            <i class="fa-solid fa-check text-success me-1"></i>{{ $facility }}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="trsms-foots mt-4">
                                    <div class="flts-flex d-flex align-items-end justify-content-between">
                                        <div class="flts-flex-strat">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <span class="label bg-seegreen text-light">{{$hotel->offer}}% Off</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="text-dark fw-bold fs-4">₹{{$hotel->amount}}</div>
                                                <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">₹{{$hotel->discount_amount}}</div>
                                            </div>
                                            <div class="d-flex align-items-start flex-column">
                                                <div class="text-muted-2 text-sm">Per Night</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            <!-- No hotels message -->
            @if(count($hotelService) == 0)
                <p class="no-hotels-message text-center text-danger">No hotels found.</p>
            @endif
        </div>
    </div>
</div>



			</div>
		</section>
		<!-- ============================ Popular Hotels End ================================== -->


		<!-- ============================ Popular Location Start ================================== -->
		<section class="py-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Explore Top Destination</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12 p-0">
						<div class="main-carousel cols-4 dots-full">

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="destination-blocks bg-white p-2 rounded border br-dashed">
									<div class="destination-blocks-pics p-1">
										<a href="#"><img src="assets/img/city/c-6.png" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="destination-blocks-captions">
										<div class="touritem-flexxer text-center p-3">
											<h4 class="city fs-5 m-0 fw-bold">
												<span>New York</span>
											</h4>
											<p class="detail ellipsis-container m-0">
												<span class="ellipsis-item__normal">10 Destinations</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">5 Hotels</span>
											</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="destination-blocks bg-white p-2 rounded border br-dashed">
									<div class="destination-blocks-pics p-1">
										<a href="#"><img src="assets/img/city/c-5.png" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="destination-blocks-captions">
										<div class="touritem-flexxer text-center p-3">
											<h4 class="city fs-5 m-0 fw-bold">
												<span>New York</span>
											</h4>
											<p class="detail ellipsis-container m-0">
												<span class="ellipsis-item__normal">10 Destinations</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">5 Hotels</span>
											</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="destination-blocks bg-white p-2 rounded border br-dashed">
									<div class="destination-blocks-pics p-1">
										<a href="#"><img src="assets/img/city/c-4.png" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="destination-blocks-captions">
										<div class="touritem-flexxer text-center p-3">
											<h4 class="city fs-5 m-0 fw-bold">
												<span>New York</span>
											</h4>
											<p class="detail ellipsis-container m-0">
												<span class="ellipsis-item__normal">10 Destinations</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">5 Hotels</span>
											</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="destination-blocks bg-white p-2 rounded border br-dashed">
									<div class="destination-blocks-pics p-1">
										<a href="#"><img src="assets/img/city/c-5.png" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="destination-blocks-captions">
										<div class="touritem-flexxer text-center p-3">
											<h4 class="city fs-5 m-0 fw-bold">
												<span>New York</span>
											</h4>
											<p class="detail ellipsis-container m-0">
												<span class="ellipsis-item__normal">10 Destinations</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">5 Hotels</span>
											</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="destination-blocks bg-white p-2 rounded border br-dashed">
									<div class="destination-blocks-pics p-1">
										<a href="#"><img src="assets/img/city/c-6.png" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="destination-blocks-captions">
										<div class="touritem-flexxer text-center p-3">
											<h4 class="city fs-5 m-0 fw-bold">
												<span>New York</span>
											</h4>
											<p class="detail ellipsis-container m-0">
												<span class="ellipsis-item__normal">10 Destinations</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">5 Hotels</span>
											</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="destination-blocks bg-white p-2 rounded border br-dashed">
									<div class="destination-blocks-pics p-1">
										<a href="#"><img src="assets/img/city/c-6.png" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="destination-blocks-captions">
										<div class="touritem-flexxer text-center p-3">
											<h4 class="city fs-5 m-0 fw-bold">
												<span>New York</span>
											</h4>
											<p class="detail ellipsis-container m-0">
												<span class="ellipsis-item__normal">10 Destinations</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">5 Hotels</span>
											</p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

        <footer class="footer skin-light-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-4">
							<div class="footer-widget">
								<div class="d-flex align-items-start flex-column mb-3">
									<div class="d-inline-block"><img src="assets/img/logo.png" class="img-fluid" width="160" alt="Footer Logo">
									</div>
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
										<p class="text-muted-2 fw-medium">Our Partners</p>
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
							<p class="mb-0">© 2023 GeoTrip Design by Themezhub.</p>
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
        
        <script>
    document.querySelector(".search-btn").addEventListener("click", function () {
    let goingTo = document.querySelector(".goingto")?.value;

    let dateRangeInput = document.querySelector("#checkinout");
    let dateRange = dateRangeInput?.value.trim() || ""; // Ensure it's trimmed and non-null

    let departureDate = "Not Selected", returnDate = "Not Selected";

    if (dateRange.includes(" to ")) {  
        [departureDate, returnDate] = dateRange.split(" to ").map(date => date.trim());
    }

    let adults = document.getElementById("guests-count-adults")?.innerText || "0";
    let children = document.getElementById("guests-count-children")?.innerText || "0";
    let rooms = document.getElementById("guests-count-room")?.innerText || "0";

    $.ajax({
        url: "{{ url('/filter-hotel') }}",
        type: "GET",
        data: {
            going_to: goingTo !== "" ? goingTo : null,
            adults: adults > 0 ? adults : null,
            children: children > 0 ? children : null,
            rooms: rooms > 0 ? rooms : null,
            checkin_date: departureDate !== "Not Selected" ? departureDate : null,
            checkout_date: returnDate !== "Not Selected" ? returnDate : null,
        },
        success: function(response) {
            console.log(response, 'response');

            let hotelsContainer = $('.main-carousel-hotel'); // Ensure the correct container
            let noHotelsMessage = $('.no-hotels-message');

            let cityNames = {
                    ny: "New York",
                    sd: "San Diego",
                    sj: "San Jose",
                    ph: "Philadelphia",
                    nl: "Nashville",
                    sf: "San Francisco",
                    hu: "Houston",
                    sa: "San Antonio",
                };

            hotelsContainer.flickity('destroy'); // Destroy existing Flickity instance to prevent duplication
            hotelsContainer.html(''); // Clear existing hotels

            if (response.hotels && response.hotels.length > 0) {
                noHotelsMessage.hide(); // Hide "No hotels found" message

                let hotelCards = ''; // Store generated hotel cards

                $.each(response.hotels, function(index, hotel) {
                    let destination = cityNames[hotel.going_to] || "Unknown";

                    let facilitiesHTML = hotel.facilities ? hotel.facilities.map(facility => 
                        `<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center">
                            <i class="fa-solid fa-check text-success me-1"></i>${facility}
                        </li>`).join('') : '';

                    let hotelCard = `
                        <div class="carousel-cell">
                            <div class="pop-touritem">
                                <a href="#" class="card rounded-3 border br-dashed m-0">
                                    <div class="flight-thumb-wrapper">
                                        <div class="popFlights-item-overHidden">
                                            <img src="assets/img/hotel/hotel-${index + 1}.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="touritem-middle position-relative p-3">
                                        <div class="touritem-flexxer">
                                            <h4 class="city fs-6 m-0 fw-bold">
                                                <span>${hotel.name}</span>
                                            </h4>
                                            <p class="detail ellipsis-container">
                                                <span class="ellipsis-item__normal">${destination || 'Unknown'}</span>
                                                <span class="separate ellipsis-item__normal"></span>
                                                <span class="ellipsis-item">3.5 Km From ${destination || 'Unknown'}</span>
                                            </p>
                                            <div class="touritem-centrio mt-4">
                                                <div class="d-block position-relative">
                                                    <span class="label bg-light-success text-success">
                                                        Free Cancellation Till ${hotel.cancellation_date}
                                                    </span>
                                                </div>
                                                <div class="aments-lists mt-2">
                                                    <ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
                                                        ${facilitiesHTML}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trsms-foots mt-4">
                                            <div class="flts-flex d-flex align-items-end justify-content-between">
                                                <div class="flts-flex-strat">
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <span class="label bg-seegreen text-light">${hotel.offer}% Off</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-dark fw-bold fs-4">₹${hotel.amount}</div>
                                                        <div class="text-muted-2 fw-medium text-decoration-line-through ms-2">₹${hotel.discount_amount}</div>
                                                    </div>
                                                    <div class="d-flex align-items-start flex-column">
                                                        <div class="text-muted-2 text-sm">Per Night</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    `;
                    hotelCards += hotelCard;
                });

                hotelsContainer.append(hotelCards); // Append all cards at once for efficiency

                // Reinitialize Flickity
                hotelsContainer.flickity({
                    cellAlign: 'left',
                    contain: true,
                    pageDots: true,
                    wrapAround: true
                });

            } else {
                hotelsContainer.html(''); // Clear container
                noHotelsMessage.show(); // Show "No hotels found" message
            }
        }
    });
});


</script>
@endsection
