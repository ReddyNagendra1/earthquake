@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Earthquake</h1>
    <form action="{{ route('earthquakes.update', $earthquake) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $earthquake->date }}" required>
        </div>
        <div class="form-group">
            <label for="magnitude">Magnitude</label>
            <input type="number" step="0.1" class="form-control" id="magnitude" name="magnitude"
                value="{{ $earthquake->magnitude }}" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $earthquake->location }}"
                required>
        </div>
        <div class="form-group">
            <label for="observations">Observations</label>
            <select multiple class="form-control" id="observations" name="observation_ids[]">
                @foreach($observations as $observation)
                    <option value="{{ $observation->id }}" {{ $earthquake->observations->contains($observation->id) ? 'selected' : '' }}>
                        {{ $observation->description }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection