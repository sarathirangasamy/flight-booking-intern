@extends('layouts.admin')

@section('content')
<h2>Admin Dashboard</h2>
<table class="table table-striped">
    <thead class="table-dark">
        <tr><th>User</th><th>Flight</th><th>Status</th><th>Action</th></tr>
    </thead>
    <tbody>
    @foreach($bookings as $booking)
    <tr>
        <td>{{ $booking->user->name }}</td>
        <td>{{ $booking->flight_name }}</td>
        <td><span class="badge bg-info">{{ ucfirst($booking->status) }}</span></td>
        <td>
            <a href="{{ route('admin.booking.edit', $booking->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
            <form action="{{ route('admin.booking.destroy', $booking->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
