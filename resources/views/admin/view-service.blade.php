@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Service List</h2>
    <a href="{{ route('service.create') }}" class="btn btn-primary mb-3 float-end">Create Service</a>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>S.No</th> <!-- Serial Number Column -->
                <th>Type</th>
                <th>Name</th>
                <th>Details</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $index => $service)
            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Serial Number -->
                <td>{{ Str::title(str_replace('_', ' ', $service->type)) }}
                </td>
                <td>{{ $service->name ?? '-' }}</td>
                <td>
                    @if($service->type == 'flight')
                        <strong>From:</strong> {{ $service->leaving_from }} <br>
                        <strong>Departure:</strong> {{ $service->departure_date }} <br>
                        <strong>Return:</strong> {{ $service->return_date ?? '-' }} <br>
                        <strong>Class:</strong> {{ $service->class_type }} <br>
                    @elseif($service->type == 'hotel')
                        <strong>Location:</strong> {{ $service->going_to }} <br>
                        <strong>Check-in:</strong> {{ $service->checkin_date }} <br>
                        <strong>Check-out:</strong> {{ $service->checkout_date }} <br>
                        <strong>Rooms:</strong> {{ $service->rooms }} <br>
                        <strong>Facilities:</strong> {{ implode(', ', json_decode($service->facility, true) ?? []) }} <br>
                    @elseif($service->type == 'car_rental')
                        <strong>Pickup:</strong> {{ $service->pickup_location }} <br>
                        <strong>Drop:</strong> {{ $service->drop_location }} <br>
                        <strong>Car Type:</strong> {{ implode(', ', json_decode($service->car_type, true) ?? []) }} <br>
                        <strong>Facilities:</strong> {{ implode(', ', json_decode($service->facility, true) ?? []) }} <br>

                    @endif
                </td>
                <td>${{ number_format($service->amount, 2) }}</td>
                <td>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
