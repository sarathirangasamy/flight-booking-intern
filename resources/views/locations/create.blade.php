@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Add New Location</h2>
    <form action="{{ route('locations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-control">
                <option value="">Select Type</option>
                <option value="car">Car</option>
                <option value="flight">Flight</option>
                <option value="hotel">Hotel</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('locations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
