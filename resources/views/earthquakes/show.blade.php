@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Earthquake Details</h1>
    <dl class="row">
        <dt class="col-sm-3">Date</dt>
        <dd class="col-sm-9">{{ $earthquake->date }}</dd>

        <dt class="col-sm-3">Magnitude</dt>
        <dd class="col-sm-9">{{ $earthquake->magnitude }}</dd>

        <dt class="col-sm-3">Location</dt>
        <dd class="col-sm-9">{{ $earthquake->location }}</dd>
    </dl>

    <h2>Associated Observations</h2>
    <ul>
        @foreach($earthquake->observations as $observation)
            <li>{{ $observation->description }}</li>
        @endforeach
    </ul>

    <a href="{{ route('earthquakes.edit', $earthquake) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('earthquakes.destroy', $earthquake) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</div>
@endsection