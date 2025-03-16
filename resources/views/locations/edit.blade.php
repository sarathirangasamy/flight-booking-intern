@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Location</h2>
    <form action="{{ route('locations.update', $location) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $location->name }}">
        </div>
        <div class="mb-3">
        <label class="form-label">Type</label>
        <select name="type" class="form-control">
            <option value="">Select Type</option>
            <option value="car" {{ $location->type == 'car' ? 'selected' : '' }}>Car</option>
            <option value="flight" {{ $location->type == 'flight' ? 'selected' : '' }}>Flight</option>
            <option value="hotel" {{ $location->type == 'hotel' ? 'selected' : '' }}>Hotel</option>
        </select>
    </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('locations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
