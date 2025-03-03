<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Flight Booking') }}</title>

    <!-- Laravel Asset CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnifypopup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prism.css') }}">

    <!-- Fontawesome & Bootstrap Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>

    <div class="header header-light head-shadow">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#"><img src="assets/img/logo.png" class="logo" alt=""></a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>
                            <li class="currencyDropdown me-2">
                                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
											class="fw-medium">INR</span></a>
                            </li>
                            <li class="languageDropdown me-2">
                                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal"><img src="assets/img/flag/flag.png" class="img-fluid" width="17" alt="Country"></a>
                            </li>
                            <li>
                                <a href="#" class="bg-light-primary text-primary rounded" data-bs-toggle="modal" data-bs-target="#login"><i class="fa-regular fa-circle-user fs-6"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">

                        <li class="active"><a href="home-flight.html"><i class="fa-solid fa-jet-fighter me-2"></i>Flights</a></li>
                        <li><a href="home-hotel.html"><i class="fa-solid fa-spa me-2"></i>Hotels</a></li>
                        <li><a href="home-car.html"><i class="fa-solid fa-car me-2"></i>Cars</a></li>

                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                    @auth
            @if(Auth::user()->role === 'admin')
                <!-- Admin Dashboard Button -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="fa-solid fa-gauge-high me-2"></i> Dashboard
                    </a>
                </li>
            @else
                <!-- My Bookings Button -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('booking.index') }}">
                        <i class="fa-solid fa-calendar-check me-2"></i> My Bookings
                    </a>
                </li>
            @endif

    <!-- Profile & Logout Dropdown -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            <i class="fa-regular fa-user me-2"></i> {{ Auth::user()->name }} 
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
                <a class="dropdown-item text-danger" href="#" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
                </a>
            </li>
        </ul>
    </li>

    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @else
    <!-- Currency Dropdown -->
    <li class="currencyDropdown me-2">
        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal">
            <span class="fw-medium">INR</span>
        </a>
    </li>

    <!-- Language Dropdown -->
    <li class="languageDropdown me-2">
        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal">
            <img src="assets/img/flag/flag.png" class="img-fluid" width="17" alt="Country">
        </a>
    </li>

    <!-- Sign In / Register Button -->
    <li class="list-buttons">
        <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="btn btn-primary px-3 py-2 rounded-pill">
            <i class="fa-regular fa-circle-user fs-6 me-2"></i> Sign In / Register
        </a>
    </li>
    @endauth
</ul>


                </div>
            </nav>
        </div>
    </div>

    <!-- <div class="container mt-4"> -->
    <div class="">
        @yield('content')
    </div>


    <!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-header">
                    <h4 class="modal-title fs-6">Sign In / Register</h4>
                    <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
								class="fa-solid fa-square-xmark"></i></a>
                </div>
                <div class="modal-body">
                    <div class="modal-login-form py-4 px-md-3 px-0">
                        <form>

                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="name@example.com">
                                <label>Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" placeholder="Password">
                                <label>Password</label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                            </div>

                            <div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
                                <div class="modal-flex-first">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="savepassword" value="option1">
                                        <label class="form-check-label" for="savepassword">Save Password</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="modal-footer align-items-center justify-content-center">
                    <p>Don't have an account yet?<a href="signup.html" class="text-primary fw-medium ms-1">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="loginmodal">
            <div class="modal-header">
                <h4 class="modal-title fs-6" id="modalTitle">Sign In</h4>
                <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-square-xmark"></i>
                </a>
            </div>
            <div class="modal-body">
                <div class="modal-login-form py-4 px-md-3 px-0">

                    <!-- Login Form -->
                    <form id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-4">
                            <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            <label>Email Address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            <label>Password</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>Don't have an account? <a href="#" id="showSignUp" class="text-primary fw-medium">Sign Up</a></p>
                        </div>
                    </form>

                    <!-- Register Form -->
                    <form id="signupForm" method="POST" action="{{ route('register') }}" style="display: none;">
                        @csrf
                        <div class="form-floating mb-4">
                            <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            <label>Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                            <label>Email Address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            <label>Password</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label>Confirm Password</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Register</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>Already have an account? <a href="#" id="showLogin" class="text-primary fw-medium">Sign In</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Choose Currency Modal -->
    <div class="modal modal-lg fade" id="currencyModal" tabindex="-1" aria-labelledby="currenyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-6" id="currenyModalLabel">Select Your Currency</h4>
                    <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
                </div>
                <div class="modal-body">
                    <div class="allCurrencylist">

                        <div class="suggestedCurrencylist-wrap mb-4">
                            <div class="d-inline-block mb-0 ps-3">
                                <h5 class="fs-6 fw-bold">Suggested Currency For you</h5>
                            </div>
                            <div class="suggestedCurrencylists">
                                <ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">United State Dollar</div>
                                            <div class="text-muted-2 text-md text-uppercase">USD</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Pound Sterling</div>
                                            <div class="text-muted-2 text-md text-uppercase">GBP</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency active" href="#">
                                            <div class="text-dark text-md fw-medium">Indian Rupees</div>
                                            <div class="text-muted-2 text-md text-uppercase">Inr</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Euro</div>
                                            <div class="text-muted-2 text-md text-uppercase">EUR</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Australian Dollar</div>
                                            <div class="text-muted-2 text-md text-uppercase">aud</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Thai Baht</div>
                                            <div class="text-muted-2 text-md text-uppercase">thb</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="suggestedCurrencylist-wrap">
                            <div class="d-inline-block mb-0 ps-3">
                                <h5 class="fs-6 fw-bold">All Currencies</h5>
                            </div>
                            <div class="suggestedCurrencylists">
                                <ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">United State Dollar</div>
                                            <div class="text-muted-2 text-md text-uppercase">USD</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Property currency</div>
                                            <div class="text-muted-2 text-md text-uppercase">GBP</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Argentine Peso</div>
                                            <div class="text-muted-2 text-md text-uppercase">EUR</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Azerbaijani Manat</div>
                                            <div class="text-muted-2 text-md text-uppercase">Inr</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Australian Dollar</div>
                                            <div class="text-muted-2 text-md text-uppercase">aud</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Bahraini Dinar</div>
                                            <div class="text-muted-2 text-md text-uppercase">thb</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Brazilian Real</div>
                                            <div class="text-muted-2 text-md text-uppercase">USD</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Bulgarian Lev</div>
                                            <div class="text-muted-2 text-md text-uppercase">GBP</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Canadian Dollar</div>
                                            <div class="text-muted-2 text-md text-uppercase">EUR</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Chilean Peso</div>
                                            <div class="text-muted-2 text-md text-uppercase">Inr</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Colombian Peso</div>
                                            <div class="text-muted-2 text-md text-uppercase">aud</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Danish Krone</div>
                                            <div class="text-muted-2 text-md text-uppercase">thb</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Egyptian Pound</div>
                                            <div class="text-muted-2 text-md text-uppercase">USD</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Hungarian Forint</div>
                                            <div class="text-muted-2 text-md text-uppercase">GBP</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Japanese Yen</div>
                                            <div class="text-muted-2 text-md text-uppercase">EUR</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Jordanian Dinar</div>
                                            <div class="text-muted-2 text-md text-uppercase">Inr</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Kuwaiti Dinar</div>
                                            <div class="text-muted-2 text-md text-uppercase">aud</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Malaysian Ringgit</div>
                                            <div class="text-muted-2 text-md text-uppercase">thb</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCurrency" href="#">
                                            <div class="text-dark text-md fw-medium">Singapore Dollar</div>
                                            <div class="text-muted-2 text-md text-uppercase">thb</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Choose Countries Modal -->
    <div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
                    <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
                </div>
                <div class="modal-body">
                    <div class="allCountrieslist">

                        <div class="suggestedCurrencylist-wrap mb-4">
                            <div class="d-inline-block mb-0 ps-3">
                                <h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
                            </div>
                            <div class="suggestedCurrencylists">
                                <ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry active" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Euro</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Thai Baht</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="suggestedCurrencylist-wrap">
                            <div class="d-inline-block mb-0 ps-3">
                                <h5 class="fs-6 fw-bold">All Countries</h5>
                            </div>
                            <div class="suggestedCurrencylists">
                                <ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/vietnam.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Property currency</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/japan.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/portugal.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/italy.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/european.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="selectCountry" href="#">
                                            <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt=""></div>
                                            <div class="text-dark text-md fw-medium ps-2">Singapore Dollar</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Laravel Asset JavaScript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/prism.js') }}"></script>
    <script src="{{ asset('assets/js/addadult.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const loginForm = document.getElementById("loginForm");
        const signupForm = document.getElementById("signupForm");
        const modalTitle = document.getElementById("modalTitle");

        document.getElementById("showSignUp").addEventListener("click", function (event) {
            event.preventDefault();
            loginForm.style.display = "none";
            signupForm.style.display = "block";
            modalTitle.innerText = "Sign Up";
        });

        document.getElementById("showLogin").addEventListener("click", function (event) {
            event.preventDefault();
            loginForm.style.display = "block";
            signupForm.style.display = "none";
            modalTitle.innerText = "Sign In";
        });
    });
</script>

</body>

</html>