@extends('layouts.admin')

@section('content')

<div class="container mt-4">
    <h2>Admin Dashboard</h2>

    <!-- Cards Row -->
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-3">{{ $userCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pending Bookings</h5>
                    <p class="card-text fs-3">{{ $pendingBookings }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Confirmed Bookings</h5>
                    <p class="card-text fs-3">{{ $confirmedBookings }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Cancelled Bookings</h5>
                    <p class="card-text fs-3">{{ $cancelledBookings }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
