@extends('layouts.app')

@section('content')

<style>
    .container-custom.container {
    padding: 0px !important;
    margin: 0px !important;
    width: 100% !important;
    display: flex !important;
}


.custom-input-group {
        background: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
        font-weight: 500;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    .custom-input-group label {
        width: 120px;
        font-weight: bold;
        margin-right: 10px;
        color: #495057;
    }
    .custom-input-group span {
        flex: 1;
        color: #000;
    }
</style>

    <div class="image-cover hero-header bg-white" style="background:url(assets/img/banner-7.jpg)no-repeat;" data-overlay="6">
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
                            <div class="search-wrap bg-white rounded-3 p-3">
                            <div class="search-upper">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="flx-start mb-sm-0 mb-2">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="trip" id="return" value="return" checked>
                                    <label class="form-check-label" for="return">Return</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="trip" id="oneway" value="one_way">
                                    <label class="form-check-label" for="oneway">One Way</label>
                                    </div>
                                </div>
                                <div class="flx-end d-flex align-items-center flex-wrap">
                                    <div class="px-sm-2 pb-3 pt-0 ps-0 mob-full">
                                    <div class="booking-form__input guests-input">
                                        <i class="fa-solid fa-user-clock text-muted me-2"></i><button name="guests-btn"
                                        id="guests-input-btn">1
                                        Guest</button>
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
                                    <div class="ps-1 pb-3 pt-0 mob-full">
                                    <div class="dropdowns">
                                        <div class="selections">
                                        <i class="fa-solid fa-basket-shopping text-muted me-2"></i><span
                                            class="selected">Economy</span>
                                        <div class="caret"></div>
                                        </div>
                                        <ul class="menu">
                                        <li class="active">Economy</li>
                                        <li>Premium Economy</li>
                                        <li>Business/First</li>
                                        <li>Business</li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row gx-lg-2 g-3">

                                <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="row gy-3 gx-lg-2 gx-3">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                    <div class="form-group hdd-arrow mb-0">
                                        <select class="leaving form-control fw-bold">
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
                                    <div class="btn-flip-icon mt-md-0">
                                        <button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
                                    </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-groupp hdd-arrow mb-0">
                                        <select class="goingto form-control fw-bold">
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
                                    </div>
                                </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="row gy-3 gx-lg-2 gx-3">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input class="form-control fw-bold choosedate" type="text" placeholder="Departure.."
                                        readonly="readonly">
                                    </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input class="form-control fw-bold choosedate" type="text" placeholder="Return.."
                                        readonly="readonly">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-12">
                                <div class="form-group mb-0">
                                    <button type="button" class="btn btn-primary search-btn full-width fw-medium"><i
                                        class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                                </div>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- </row> -->

                </div>
    </div>


        <section class="pt-4 pb-0">
			<div class="container container-custom.container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div
											class="offers-pic bg-light-success p-3 rounded-3 d-flex align-items-center justify-content-center h-100">
											<img src="assets/img/air-4.png" class="img-fluid rounded" width="70" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>30% Off</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">On Domestic Flight For USA</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Valid 31 March 2023</span></p>
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
										<div
											class="offers-pic bg-light-warning p-3 rounded-3 d-flex align-items-center justify-content-center h-100">
											<img src="assets/img/air-2.png" class="img-fluid rounded" width="70" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>40% Off</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">On International Routes</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Valid 31 March 2023</span></p>
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
										<div
											class="offers-pic bg-light-info p-3 rounded-3 d-flex align-items-center justify-content-center h-100">
											<img src="assets/img/air-5.png" class="img-fluid rounded" width="70" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-4 m-0 fw-bold">
											<span>15% Off</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">On National Routes</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Valid 31 March 2023</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>

        <section class="py-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Explore Top Domestic Routes</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row  gy-4 gx-3 default-flights">
                    @foreach($flightsService as $key => $flight)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="pop-touritem">
                                <a href="#" class="card rounded-3 border br-dashed h-100 m-0">
                                    <div class="flight-thumb-wrapper">
                                        <div class="popFlights-item-overHidden">
                                            <img src="assets/img/destination/tr-{{ $key + 1 }}.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="touritem-middle position-relative p-3">
                                        <div class="touritem-flexxer">
                                            <h4 class="city fs-6 m-0 fw-bold">
                                                <span>{{ $flight->leaving_from }}</span>
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <span>{{ $flight->going_to }}</span>
                                            </h4>
                                            <p class="detail ellipsis-container">
                                                <span class="ellipsis-item__normal">{{ str_replace('_', ' ', $flight->trip_type) }}
                                                - trip</span>
                                                <span class="separate ellipsis-item__normal"></span>

                                                
                                                <span class="ellipsis-item">{{ $flight->no_of_days }} days</span>
                                            </p>
                                        </div>


                                        <div class="flight-foots d-flex justify-content-between align-items-center">
										<h5 class="fs-5 low-price m-0">
											<span class="tag-span">From</span> 
											<span class="price">₹{{ $flight->amount }}</span>
										</h5>
										<button class="btn btn-primary btn-sm book-now-btn pt-1 py-0" data-bs-toggle="modal" data-bs-target="#flightBookingModal"
											data-flight-id="{{ $flight->id }}" data-user-id="{{ auth()->user()->id ?? '' }}"
											data-leaving-from="{{ $flight->leaving_from }}" data-going-to="{{ $flight->going_to }}"
											data-trip-type="{{ $flight->trip_type }}" data-departure-date="{{ $flight->departure_date }}"
											data-return-date="{{ $flight->return_date }}" data-amount="{{ $flight->amount }}">
											Book Now
										</button>
									</div>

                                    </div>
                                </a>

								
                            </div>
                        </div>
                    @endforeach
				</div>


                <div class="row justify-content-center gy-4 gx-3">
                    <div id="flightsContainer" style="display: none;"></div>
                </div>

                <p class="no-flights-message text-center mt-3" style="display: none;">No flights found.</p>

			</div>
		</section>


        <section class="pt-0 pb-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Browse Popular Destinations</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-3">

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-12.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">Los Angeles</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-6.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">Chicago</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-8.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">Las Vegas</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="cardCities cursor rounded-2">
							<div class="cardCities-image ratio ratio-4">
								<img src="assets/img/city/ct-9.png" class="img-fluid object-fit" alt="image">
							</div>

							<div class="citiesCard-content d-flex flex-column justify-content-between text-center px-4 py-4">
								<div class="cardCities-bg"></div>

								<div class="citiesCard-topcaps">
									<div class="d-flex align-items-center justify-content-center flex-wrap">
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">10 Hotels</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">25 Flights</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">17 Cars</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">22 Tours</div>
										<div class="bg-transparents text-light text-xs rounded fw-medium p-2 m-1">36 Activities</div>
									</div>
								</div>

								<div class="citiesCard-bottomcaps">
									<h4 class="text-light fs-3 mb-3">New Orleans</h4>
									<button class="btn btn-whitener full-width fw-medium">Discover<i
											class="fa-solid fa-arrow-trend-up ms-2"></i></button>
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
	

		<div class="modal fade" id="flightBookingModal" tabindex="-1" aria-labelledby="flightBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="flightBookingModalLabel">Flight Booking Details</h5>
				
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="{{ route('booking.store') }}" method="POST">
			@csrf
			<div class="modal-body">
				<input type="hidden" name="service_id" id="flight_id">
				<input type="hidden" name="user_id" id="user_id">

				<div class="row">

				<div class="col-md-6">
					<div class="custom-input-group">
						<label>Leaving From:</label>
						<span id="leaving_from_display"></span>
					</div>
				</div>

				<div class="col-md-6">
					<div class="custom-input-group">
						<label>Going To:</label>
						<span id="going_to_display"></span>
					</div>
				</div>

				<div class="col-md-6">
					<div class="custom-input-group">
						<label>Trip Type:</label>
						<span id="trip_type_display"></span>
					</div>
				</div>

				<div class="col-md-6">
					<div class="custom-input-group">
						<label>Amount:</label>
						<span>₹</span><span id="amount_display"></span>
					</div>
				</div>


				<input type="hidden" class="form-control" id="leaving_from" name="leaving_from" >
				<input type="hidden" class="form-control" id="going_to" name="going_to" >
				<input type="hidden" class="form-control" id="trip_type" name="trip_type" >
				<input type="hidden" class="form-control" id="amount" name="amount" >


					<!-- Departure Date -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Departure Date</label>
						<input type="date" class="form-control"  name="departure_date">
					</div>

					<!-- Return Date -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Return Date</label>
						<input type="date" class="form-control"  name="return_date">
					</div>


					<!-- Mobile Number -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Mobile Number</label>
						<input type="tel" class="form-control" id="mobile_number" name="mobile_number" required>
					</div>
					<!-- Passport Number -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Passport Number</label>
						<input type="text" class="form-control" id="passport_number" name="passport_number" required>
					</div>

					<!-- Date of Birth -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Date of Birth</label>
						<input type="date" class="form-control" id="dob" name="dob" required>
					</div>
				</div>
			</div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Confirm Booking</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</form>

        </div>
    </div>
</div>


        <script>
          document.querySelector(".search-btn").addEventListener("click", function () {
			// Get trip type (radio)
			let tripType = document.querySelector("input[name='trip']:checked").value;

			// Get selected locations
			let leavingFrom = document.querySelector(".leaving").value;
			let goingTo = document.querySelector(".goingto").value;

			let defaultFlightsContainer = $('.default-flights'); // Add class to default flight container

			// Get selected dates
			let departureDate = document.querySelector("input[placeholder='Departure..']").value;
			let returnDate = document.querySelector("input[placeholder='Return..']").value;

			// Get guest counts
			let adults = document.getElementById("guests-count-adults").innerText;
			let children = document.getElementById("guests-count-children").innerText;
			let rooms = document.getElementById("guests-count-room").innerText;

			// Get travel class selection
			let travelClass = document.querySelector(".dropdowns .selected").innerText;

			// AJAX Request
			$.ajax({
			url: "{{ url('/filter-flights') }}",
			type: "GET",
			data: {
				leaving_from: leavingFrom !== "" ? leavingFrom : null,
				going_to: goingTo !== "" ? goingTo : null,
				trip_type: tripType !== "" ? tripType : null,
				class_type: travelClass !== "" ? travelClass : null,
				adults: adults > 0 ? adults : null,
				children: children > 0 ? children : null,
				rooms: rooms > 0 ? rooms : null,
				departure_date: departureDate !== "" ? departureDate : null,
				return_date: returnDate !== "" ? returnDate : null,

			},
			success: function(response) {
				let flightsContainer = $('#flightsContainer');
				flightsContainer.html(''); 

				if (response.flights.length > 0) {
					flightsContainer.show();
					defaultFlightsContainer.hide();


					$.each(response.flights, function(index, flight) {
						flightsContainer.append(`
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
								<div class="pop-touritem">
									<a href="flight-search.html" class="card rounded-3 border br-dashed h-100 m-0">
										<div class="flight-thumb-wrapper">
											<img src="assets/img/destination/tr-${index + 1}.jpg" class="img-fluid" alt="">
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>${flight.leaving_from}</span>
													<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
															<path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
														</svg>
													</span>
													<span>${flight.going_to}</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">${flight.trip_type.replace('_', ' ')} - trip</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3 days</span>
												</p>
											</div>
											<div class="flight-foots">
												<h5 class="fs-5 low-price m-0">
													<span class="tag-span">From</span>
													<span class="price">₹${flight.amount}</span>
												</h5>
											</div>
										</div>
									</a>
								</div>
							</div>
						`);
					});
				} else {
					flightsContainer.hide(); // Hide container if no flights found
					defaultFlightsContainer.hide();
					$('.no-flights-message').show(); // Show "No flights found" message
				}
			}
		});

		});



		document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".book-now-btn").forEach(button => {
            button.addEventListener("click", function () {
				document.getElementById("flight_id").value = this.getAttribute("data-flight-id");
                document.getElementById("user_id").value = this.getAttribute("data-user-id");
                document.getElementById("leaving_from").value = this.getAttribute("data-leaving-from");
                document.getElementById("going_to").value = this.getAttribute("data-going-to");
                document.getElementById("trip_type").value = this.getAttribute("data-trip-type");
                document.getElementById("amount").value = this.getAttribute("data-amount");


				document.getElementById("leaving_from_display").textContent = this.getAttribute("data-leaving-from");
            document.getElementById("going_to_display").textContent = this.getAttribute("data-going-to");
            document.getElementById("trip_type_display").textContent = this.getAttribute("data-trip-type");
            document.getElementById("amount_display").textContent = this.getAttribute("data-amount");
            });
        });
    });
</script>

@endsection
