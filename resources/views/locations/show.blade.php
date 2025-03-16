@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Location Details</h2>
    <p><strong>Name:</strong> {{ $location->name }}</p>
    <p><strong>Type:</strong> {{ $location->type }}</p>
    <a href="{{ route('locations.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
