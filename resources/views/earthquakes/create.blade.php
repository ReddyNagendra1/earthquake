@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Earthquake</h1>
    <form action="{{ route('earthquakes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="magnitude">Magnitude</label>
            <input type="number" step="0.1" class="form-control" id="magnitude" name="magnitude" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="observations">Observations</label>
            <select multiple class="form-control" id="observations" name="observation_ids[]">
                @foreach($observations as $observation)
                    <option value="{{ $observation->id }}">{{ $observation->description }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection