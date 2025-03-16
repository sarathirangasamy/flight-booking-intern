@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Locations</h2>
    <a href="{{ route('locations.create') }}" class="btn btn-primary" style="float:right">Add New Location</a>

    @if (session('success'))
        <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->name }}</td>
                    <td>{{ $location->type }}</td>
                    <td>
                        <a href="{{ route('locations.show', $location) }}" class="btn btn-info">View</a>
                        <a href="{{ route('locations.edit', $location) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('locations.destroy', $location) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- JavaScript to auto-remove toast message --}}
<script>
    setTimeout(function() {
        let successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.transition = "opacity 0.5s";
            successMessage.style.opacity = "0";
            setTimeout(() => successMessage.remove(), 500);
        }
    }, 2000);
</script>
@endsection
